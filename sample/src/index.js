import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import Library from './chapter-03/Library';
import Parent from './family/Parent';
import NotificationList from './chapter-06/NotificationList';
import Counter from './counter/counter';
import NameInput from './chapter_06_1/NameInput';
import Total from './chapter_06_1/Total';

const root = ReactDOM.createRoot(document.getElementById('root'));
setInterval(()=>{
  root.render(
    <React.StrictMode>
      <Total />
    </React.StrictMode>
  );
},1000);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
