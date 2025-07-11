import React, { useEffect, useState } from 'react';
import { useNavigate } from 'react-router-dom';

interface LogoutOverlayProps {
  message?: string;
  duration?: number; // in seconds
  onComplete?: () => Promise<void> | void; // async or sync handler
}

const LogoutOverlay: React.FC<LogoutOverlayProps> = ({
  message = 'You have been logged out due to a session error. Please log in again...',
  duration = 5,
  onComplete,
}) => {
  const [counter, setCounter] = useState(duration);
  const navigate = useNavigate();

  useEffect(() => {
    if (counter <= 0) {
      (async () => {
        if (onComplete) {
          await onComplete();
        }
        navigate('/login');
      })();
      return;
    }

    const timer = setTimeout(() => {
      setCounter((prev) => prev - 1);
    }, 1000);

    return () => clearTimeout(timer);
  }, [counter, onComplete, navigate]);

  return (
    <div
      style={{
        position: 'fixed',
        top: 0,
        left: 0,
        right: 0,
        bottom: 0,
        backgroundColor: 'rgba(255, 255, 255, 0.9)',
        zIndex: 9999,
        display: 'flex',
        justifyContent: 'center',
        alignItems: 'center',
        flexDirection: 'column',
      }}
    >
      <div
        className="spinner-border text-primary mb-3"
        role="status"
        style={{
          position: 'relative',
          width: '4rem',
          height: '4rem',
          fontSize: '1.5rem',
          display: 'flex',
          justifyContent: 'center',
          alignItems: 'center',
          borderWidth: '0.3rem',
        }}
      >
        <span
          style={{
            position: 'absolute',
            fontWeight: 'bold',
            color: '#0d6efd',
          }}
        >
          {counter > 0 ? counter : ''}
        </span>
      </div>

      <div style={{ fontSize: '1.2rem', color: '#333' }}>{message}</div>
    </div>
  );
};

export default LogoutOverlay;
