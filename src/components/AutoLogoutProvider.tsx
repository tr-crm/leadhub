
import React, { useState, useRef, useEffect } from 'react';
import { IdleTimerProvider } from 'react-idle-timer';
import { useNavigate } from 'react-router-dom';
import { logout } from '@/utils/auth';
import Cookies from 'js-cookie';

interface Props {
  children: React.ReactNode;
  timeoutMinutes?: number;
  countdownSeconds?: number;
}

const AutoLogoutProvider: React.FC<Props> = ({
  children,
  timeoutMinutes = 5,
  countdownSeconds = 30,
}) => {
  const [showPopup, setShowPopup] = useState(false);
  const [countdown, setCountdown] = useState(countdownSeconds);
  const countdownInterval = useRef<NodeJS.Timeout | null>(null);
  const navigate = useNavigate();

const handleLogout = async () => {
    // console.log('[AutoLogout] Logging out...');
    localStorage.clear();
    sessionStorage.clear();
      // Clear cookies

   await logout("1");
     Cookies.remove('accessToken');
  Cookies.remove('LeadHubLoginAccess');
    

    navigate('/login', { replace: true });
  };

  const startCountdown = () => {
    setShowPopup(true);
    setCountdown(countdownSeconds);
    countdownInterval.current = setInterval(() => {
      setCountdown(prev => {
        if (prev <= 1) {
          clearInterval(countdownInterval.current!);
          handleLogout();
          return 0;
        }
        return prev - 1;
      });
    }, 1000);
  };

  useEffect(() => {
    return () => {
      if (countdownInterval.current) {
        clearInterval(countdownInterval.current);
      }
    };
  }, []);

  return (
    <IdleTimerProvider
      timeout={timeoutMinutes * 60 * 1000}
      onIdle={startCountdown}
      debounce={500}
    >
      {showPopup && (
        <div style={styles.overlay}>
          <div style={styles.popup}>
           <h3>You’ve been inactive since the last {timeoutMinutes} minute</h3>
            <p>You’ll be logged out in {countdown} seconds.</p>
            {/* No cancel or close button */}
          </div>
        </div>
      )}
      {children}
    </IdleTimerProvider>
  );
};

export default AutoLogoutProvider;

const styles: { [key: string]: React.CSSProperties } = {
  overlay: {
    position: 'fixed',
    top: 0, left: 0,
    width: '100vw', height: '100vh',
    backgroundColor: 'rgba(0, 0, 0, 0.7)',
    display: 'flex',
    justifyContent: 'center',
    alignItems: 'center',
    zIndex: 9999,
  },
  popup: {
    backgroundColor: '#fff',
    padding: 30,
    borderRadius: 8,
    textAlign: 'center',
    maxWidth: 400,
    boxShadow: '0 4px 20px rgba(0,0,0,0.3)',
  },
};
