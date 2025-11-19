// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getFirestore} from "firebase/firestore";
import {getAuth, setPersistence, browserLocalPersistence } from 'firebase/auth';
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyBUTP2Y2kx3TBEzkzZHVl0VSEuKfdSCr2Y",
  authDomain: "home-sua.firebaseapp.com",
  projectId: "home-sua",
  storageBucket: "home-sua.firebasestorage.app",
  messagingSenderId: "80733581104",
  appId: "1:80733581104:web:ba0fdc6d182aa79cc622f5"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);

export const db= getFirestore(app);
export const auth = getAuth( app );  // 파이어베이스 인증기능 사용위해

// 로그인유지를 위해
setPersistence( auth , browserLocalPersistence).catch(console.error);

//  browserLocalPersistence  - 브라우저 종료 해도 유지 