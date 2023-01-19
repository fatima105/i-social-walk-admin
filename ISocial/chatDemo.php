<!doctype html>
<html lang="en">
<?php include 'include/scripts.php';
session_start();
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
} else {
} ?>

<body>
    <div id="layout-wrapper">
        <?php include 'include/header.php'; ?>


        <div class="vertical-menu">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="#" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-dark-sm.png" alt="" height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="28">
                    </span>
                </a>

                <a href="#" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="30">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo-light-sm.png" alt="" height="26">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                <i class="bx bx-menu align-middle"></i>
            </button>

            <div data-simplebar class="sidebar-menu-scroll">

                <!--- Sidemenu -->
                <?php include 'include/sidebar.php'; ?>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        <?php include 'include/leftsidebar.php'; ?>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-3" style="
                       height:80vh;
                          overflow-y:scroll;
                       ">
                            <h5 class="border-bottom" style="padding-left:20px;padding-top:20px;padding-bottom:20px;">Users</h5>
                            <?php
                            $sql = "SELECT * FROM users";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<a 
                            href="chatDemo.php?id=' . $row['id'] . '&name=' . $row['first_name'] . '"
                            style="border-bottom:1px solid black;
                            align-items:center;"
                            >
                            <p
                            style="color:grey;margin-top:10px;"
                            >' . $row['first_name'] . ' ' . $row['last_name'] . '</p>
                           </a>
                           <hr>
                           ';
                            }
                            ?>

                        </div>
                        <div class="col-9">
                            <h5 class="pt-3">Chat</h5>
                            <div style="
                            height:70vh;
                            overflow-y:scroll;
                            position:relative;
                            ">
                                <?php

                                if (isset($_GET['id'])) {
                                    for ($x = 0; $x < 100; $x++) {
                                        echo '<p>Hello</p>
                                    ';
                                    }
                                } else {
                                    echo '<p
                                style="text-align:center;"
                                >Select a user to chat</p>
                                ';
                                }


                                ?>
                            </div>

                            <div class="d-flex justify-content-center" style="position:absolute;bottom:10px;width:95%;left:30px">
                                <?php

                                if (isset($_GET['id'])) { ?>
                                    <input type="text" class="form-control" id="message" placeholder="Enter message">
                                    <a class="btn btn-warning">Send</a>
                                <?php
                                } ?>


                            </div>

                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'include/footer.php'; ?>
    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- chat offcanvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivity" aria-labelledby="offcanvasActivityLabel">
        <div class="offcanvas-header border-bottom">
            <h5 id="offcanvasActivityLabel">Offcanvas right</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            ...
        </div>
    </div>


    <?php include 'include/footerscripts.php'; ?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="module">
        // Import the functions you need from the SDKs you need

        import {
            initializeApp,
            getApps,

        } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
        import {
            getDatabase,

            ref,
            set,
            child,
            update,
            remove,
            onValue,
            onChildAdded,
            onChildChanged,
            onChildRemoved,
            onChildMoved,
            get,
            push,
        }
        from "https://www.gstatic.com/firebasejs/9.15.0/firebase-database.js";

        const firebaseConfig = {
            apiKey: "AIzaSyBZ7tzg8Zgjch9let2gsZR1orfDf-6npsk",
            authDomain: "isocialwalk-a6d51.firebaseapp.com",
            databaseURL: "https://isocialwalk-a6d51-default-rtdb.firebaseio.com",
            projectId: "isocialwalk-a6d51",
            storageBucket: "isocialwalk-a6d51.appspot.com",
            messagingSenderId: "520078194496",
            appId: "1:520078194496:web:87a93e30715677047baca5"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const db = getDatabase();
        // get admin user

        get(ref(db, "users/admin/"))
            .then((snapshot) => {
                if (snapshot.val() == null) {
                    // create admin user 
                    set(ref(db, "users/admin/"), {
                            name: "admin",
                            email: "admin@gmail.com",
                            id: "admin"
                        })
                        .then(() => {
                            console.table("admin created successfully");
                        })
                } else {
                    console.table("admin already exists");
                    // check if the friend already exists
                    get(ref(db, "users/admin/friends/<?php echo $_GET['id']; ?>"))
                        .then((snapshot) => {
                            if (snapshot.val() == null) {
                                // creating friend for admin
                                var uniq_id = Math.random().toString(36).substr(2);
                                set(ref(db, "users/admin/friends/<?php echo $_GET['id']; ?>"), {
                                    chatroomId: uniq_id,
                                    id: <?php
                                        echo $_GET['id'];
                                        ?>,
                                    name: "<?php
                                            echo $_GET['name'];
                                            ?>"

                                }).then(() => {
                                    console.table("friend created successfully");
                                    // creating frind chat room for admin

                                    set(ref(db, 'chatrooms/' + uniq_id + '/'), {
                                        firstUser: "admin",
                                        firstUserId: "admin",
                                        secondUser: " <?php
                                                        echo $_GET['name'];
                                                        ?> ",
                                        secondUserId: <?php
                                                        echo $_GET['id'];
                                                        ?>,


                                    }).then(() => {


                                        refs.child("chatrooms/messages/");

                                    })


                                })
                                console.log("no friends");
                            } else {
                                // get all chat of a user 
                                console.log("user already has this friend");
                                console.table(snapshot.val());
                            }
                        })
                }

            })




        //INSERT DATA//
        // function InsertData() {
        //     set(ref(db, "TheStudents/" + id.value), {
        //             message: message.value,
        //             id: id.value,
        //             seconduser: seconduser.value,

        //         })
        //         .then(() => {
        //             alert("data stored successfully");
        //         })
        //         .catch((error) => {
        //             alert("unsuccessfully,error" + error);
        //         });
        // }

        Insbtn.addEventListener('click', InsertData);
    </script>
</body>


</html>