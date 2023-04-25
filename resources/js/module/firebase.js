// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyB6auf5jvS0XZ_a0mnH-8dZeLFrbhVQ2LY",
    authDomain: "ise-countryclub-reserve-system.firebaseapp.com",
    projectId: "ise-countryclub-reserve-system",
    storageBucket: "ise-countryclub-reserve-system.appspot.com",
    messagingSenderId: "725778739365",
    appId: "1:725778739365:web:64d07dc08f227d4fd59d4c",
    measurementId: "G-VWV5HWBES3"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);

export { app, analytics };
