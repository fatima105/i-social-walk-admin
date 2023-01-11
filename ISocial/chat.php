<!doctype html>
<html lang="en">
<?php include('include/scripts.php');
session_start();
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
} else {
} ?>

<body>
    <div id="layout-wrapper">
        <?php include('include/header.php'); ?>


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
                <?php include('include/sidebar.php'); ?>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        <?php include('include/leftsidebar.php'); ?>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="offset-9 col-md-3">
                            <i class="bx bx-plus-square icon nav-icon"></i>
                        </div>
                    </div>
                    <div class="d-lg-flex">
                        <div class="chat-leftsidebar card">


                            <div class="p-3">
                                <div class="search-box position-relative">
                                    <input type="text" class="form-control rounded border" placeholder="Search...">
                                    <i class="search-icon" data-eva="search-outline" data-eva-height="26" data-eva-width="26"></i>
                                </div>
                            </div>

                            <div class="chat-leftsidebar-nav">
                                <ul class="nav nav-pills nav-justified bg-light m-3 rounded">
                                    <li class="nav-item">
                                        <a href="#chat" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                            <i class="bx bx-chat font-size-20 d-sm-none"></i>
                                            <span class="d-none d-sm-block">Chat</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#groups" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="bx bx-group font-size-20 d-sm-none"></i>
                                            <span class="d-none d-sm-block">Groups</span>
                                        </a>
                                    </li>

                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="chat">
                                        <div class="chat-message-list" data-simplebar>
                                            <div class="pt-3">
                                                <div class="px-3">
                                                    <h5 class="font-size-14 mb-3">Recent</h5>
                                                </div>
                                                <ul class="list-unstyled chat-list p-3">
                                                    <?php $sql2 = "SELECT * from users ";
                                                    $query = mysqli_query($conn, $sql2); ?>

                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <?php while ($row = mysqli_fetch_assoc($query)) { ?>

                                                            <li>
                                                                <a href="#">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 user-img away align-self-center me-3">
                                                                            <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="">
                                                                            <span class="user-status"></span>
                                                                        </div>

                                                                        <h5 class="text-truncate font-size-14 mb-0"><?php echo $row['first_name'] . '' . $row['last_name']; ?></h5>

                                                                    <?php } ?>
                                                                    </div>

                                                    </div>
                                                    </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <!-- end chat-leftsidebar -->

                        <div class="w-100 user-chat mt-4 mt-sm-0 ms-lg-3">
                            <div class="card">
                                <div class="p-3 px-lg-4 border-bottom">
                                    <div class="row">
                                        <div class="col-xl-4 col-7">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 avatar me-3 d-sm-block d-none">
                                                    <img src="assets/images/users/avatar-6.jpg" alt="" class="img-fluid d-block rounded-circle">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="font-size-16 mb-1 text-truncate"><a href="#" class="text-dark">Jennie Sherlock</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Online</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-5">
                                            <ul class="list-inline user-chat-nav text-end mb-0">
                                                <li class="list-inline-item">
                                                    <div class="dropdown">
                                                        <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="bx bx-search"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-2">
                                                            <form class="px-2">
                                                                <div>
                                                                    <input type="text" class="form-control border bg-soft-light" placeholder="Search...">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="list-inline-item">
                                                    <div class="dropdown">
                                                        <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Profile</a>
                                                            <a class="dropdown-item" href="#">Archive</a>
                                                            <a class="dropdown-item" href="#">Muted</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="chat-conversation p-3" data-simplebar>
                                    <ul class="list-unstyled mb-0">
                                        <li class="chat-day-title">
                                            <span class="title">Today</span>
                                        </li>



                                </div>

                                <div class="p-3 border-top">



                                    <div class="row">
                                        <div class="col">
                                            <div class="position-relative">
                                                <textarea id="message" type="text" class="form-control border bg-soft-light" placeholder="Enter Message...">
</textarea>

                                                <input id="id" type="text" value="<?php echo "hi" . $id; ?>" class="form-control border bg-soft-light" />



                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button id="Insbtn" class="btn btn-primary chat-send w-md waves-effect waves-light">Send</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end user chat -->
                </div>
                <!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include('include/footer.php'); ?>
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


    <?php include('include/footerscripts.php'); ?>

    <script type="module">
        var date = new Date();
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

        document.getElementById("p1").innerHTML = date;
        var message = document.getElementById("message");
        var id = document.getElementById("id");
        var date = new Date();
        console.log("date" + date);
        //INSERT DATA//
        function InsertData() {
            set(ref(db, "TheStudents/" + date.value), {
                    message: message.value,
                    id: id.value,
                    date: date.value,
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


</html>