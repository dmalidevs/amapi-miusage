import React from 'react';
import ReactDOM from 'react-dom/client';
import SettingsPage from './SettingsPage';
document.addEventListener('DOMContentLoaded', () => {
    const rootElement = document.getElementById('render-board');
    if (rootElement) {
        const root = ReactDOM.createRoot(rootElement);
        root.render(<SettingsPage />);
    } else {
        console.error(`Error: The root element was not found.`);
    }
});
