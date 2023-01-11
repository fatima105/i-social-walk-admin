<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Collecting Data</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <label>Name</label>
    <input id="Namebox" type="text"><br>
    <label>Roll No</label>
    <input id="Rollbox" type="text"><br>
    <label>Section</label>
    <input id="Secbox" type="text"><br>
    <hr>
    <button id="Insbtn">INSERT </button>

    <script type="module">
        // Import the functions you need from the SDKs you need
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        const firebaseConfig = {
            apiKey: "AIzaSyDt-D0zUY2siWNpb2c0l0K7Qhj-WlOYYJg",
            authDomain: "chatfinalapp-2cd0c.firebaseapp.com",
            projectId: "chatfinalapp-2cd0c",
            storageBucket: "chatfinalapp-2cd0c.appspot.com",
            messagingSenderId: "686354238795",
            appId: "1:686354238795:web:c777026acbfe2703942cce"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        import {
            getDatabase,
            ref,
            set,
            child,
            update,
            remove
        }
        from "https://www.gstatic.com/firebasejs/9.15.0/firebase-database.js";
        const db = getDatabase();
        var namebox = document.getElementById("Namebox");
        var rollbox = document.getElementById("Rollbox");
        var secbox = document.getElementById("Secbox");
        //INSERT DATA//
        function InsertData() {
            set(ref(db, "TheStudents/" + rollbox.value), {
                    NameOfStd: namebox.value,
                    RollNo: rollbox.value,
                    SectionBox: secbox.value,
                })
                .then(() => {
                    alert("data stored successfully");
                })
                .catch((error) => {
                    alert("unsuccessfully,error" + error);
                });
        }
        Insbtn.addEventListener('click', InsertData);
    </script>
</body>