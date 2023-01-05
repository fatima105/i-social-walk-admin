<script type="module">
  // Import the functions you need from the SDKs you need
  import {
    initializeApp
  } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
  import {
    getDatabase,
    get,
    ref,
    push,
    child,
    onValue
  } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-database.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyAZrgypmO3_-zu0rLzax8TqXN0K1v7SA6Q",
    authDomain: "isocialwalk-b322a.firebaseapp.com",
    projectId: "isocialwalk-b322a",
    storageBucket: "isocialwalk-b322a.appspot.com",
    messagingSenderId: "1086256634541",
    appId: "1:1086256634541:web:af4e0f6e1f13558f5d4424"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const database = getDatabase(app);
</script>