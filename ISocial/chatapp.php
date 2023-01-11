<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h1>Hello, world!</h1>
    <button class="btn btn-primary" id="btn">Click me </button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- j query cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="module">
        // on ready function show alert

        // Import the functions you need from the SDKs you need
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
        import {
            getAnalytics
        } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-analytics.js";
        import {
            getDatabase,
            ref,
            set
        } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-database.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "AIzaSyBW8EV-N-bSafeC40OvesIZZLtWbpe7Bhg",
            authDomain: "demochat-b9ef9.firebaseapp.com",
            projectId: "demochat-b9ef9",
            storageBucket: "demochat-b9ef9.appspot.com",
            messagingSenderId: "298225240808",
            appId: "1:298225240808:web:b4e7651073aeb1f715d75d",
            measurementId: "G-Y7VVW5KVM1",
            databaseURL: "https://demochat-b9ef9-default-rtdb.firebaseio.com/",
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
        const db = (app);



        $(document).ready(function() {
            $("#btn").click(function() {
                set(ref(db, 'users/01'), {
                        username: 'name',
                    })
                    .then(() => {
                        console.log('Data saved!');
                    })
            });
        });
    </script>
</body>

</html>