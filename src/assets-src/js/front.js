import React from 'react';
import ReactDOM from 'react-dom/client';
import { QueryClient, QueryClientProvider } from 'react-query';
// import { ReactQueryDevtools } from 'react-query/devtools'
import SettingsPage from './SettingsPage.jsx';
// const queryClient = new QueryClient();
const root = ReactDOM.createRoot(document.getElementById('root'));
domReady(() => {
    const rootElement = ReactDOM.createRoot(document.getElementById('render-board'));
    if (rootElement) {
        root.render(
            <React.StrictMode>
                    <SettingsPage />
            </React.StrictMode>
        );
    }
});
