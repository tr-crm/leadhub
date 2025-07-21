import React, { useState } from 'react';

interface LockScreenProps {
  onUnlock: () => void;
}

const LockScreen: React.FC<LockScreenProps> = ({ onUnlock }) => {
  const [password, setPassword] = useState('');

  const handleUnlock = () => {
    // Replace with your real auth logic
    if (password === '1234') {
      onUnlock();
    } else {
      alert('Incorrect password');
    }
  };

  return (
    <div style={styles.overlay}>
      <h2>🔒 Session Locked</h2>
      <input
        type="password"
        value={password}
        placeholder="Enter password"
        onChange={(e) => setPassword(e.target.value)}
        onKeyDown={(e) => e.key === 'Enter' && handleUnlock()}
        style={styles.input}
      />
      <button onClick={handleUnlock} style={styles.button}>
        Unlock
      </button>
    </div>
  );
};

const styles: { [key: string]: React.CSSProperties } = {
  overlay: {
    position: 'fixed',
    top: 0, left: 0,
    width: '100vw', height: '100vh',
    backgroundColor: 'rgba(0, 0, 0, 0.9)',
    color: 'white',
    display: 'flex',
    flexDirection: 'column',
    justifyContent: 'center',
    alignItems: 'center',
    zIndex: 9999,
  },
  input: {
    padding: '10px',
    fontSize: '16px',
    marginTop: '20px',
  },
  button: {
    padding: '10px 20px',
    marginTop: '15px',
    fontSize: '16px',
    cursor: 'pointer',
  },
};

export default LockScreen;
