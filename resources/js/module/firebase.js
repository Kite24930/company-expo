// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyAye-7IR8Af9zFsHa63Bm3CqdISwxFH6Kg",
    authDomain: "company-expo.firebaseapp.com",
    projectId: "company-expo",
    storageBucket: "company-expo.appspot.com",
    messagingSenderId: "189906705612",
    appId: "1:189906705612:web:8c3eb9aa1b5906c52c3669",
    measurementId: "G-Z2ETVQ7E32"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);

export { app, analytics };
