<!doctype html>
<html lang="en">
<?php include('include/scripts.php'); ?>

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

                                                    <li>
                                                        <a href="#">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 user-img away align-self-center me-3">
                                                                    <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="">
                                                                    <span class="user-status"></span>
                                                                </div>

                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <h5 class="text-truncate font-size-14 mb-0">Katie Olson</h5>
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
                                        <li>
                                            <div class="conversation-list">
                                                <div class="d-flex">
                                                    <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar" alt="">
                                                    <div class="flex-1">
                                                        <div class="ctext-wrap">
                                                            <div class="ctext-wrap-content">
                                                                <div class="conversation-name"><span class="time">10:00</span></div>
                                                                <p class="mb-0">Hi Jordan! </br>
                                                                    Feels like it's been a while! Home are you? Do you
                                                                    have ant time for the remainder of the week to help me with an ongoing project?</p>

                                                            </div>
                                                            <div class="dropdown align-self-start">
                                                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Copy</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Forward</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>


                                </div>

                                <div class="p-3 border-top">
                                    
                                    <form onsubmit="return sendMessage();">
                                        <div class="row">
                                            <div class="col">
                                                <div class="position-relative">
                                                    <textarea id="message" type="text" class="form-control border bg-soft-light" placeholder="Enter Message...">
</textarea>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <button id="submit" type="submit" class="btn btn-primary chat-send w-md waves-effect waves-light"><span class="d-none d-sm-inline-block me-2">Send</span> <i class="mdi mdi-send float-end"></i></button>
                                            </div>
                                    </form>
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
    <script src="https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js">
    </script>
    <script src="https://www.gstatic.com/firebasejs/9.15.0/firebase-database.js">
        // Import the functions you need from the SDKs you need
        function sendMessage() {
            var message = document.getElementById("message").value;
            firebase.database().ref("messages").push().set({
                "sender": myName,
                "message": message
            });
            return false;
        }

        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        const firebaseConfig = {
            apiKey: "AIzaSyDu_RwQLzNddw82ACqJFsBrlIpSc_ccYOI",
            authDomain: "isocialwalkuser.firebaseapp.com",
            projectId: "isocialwalkuser",
            storageBucket: "isocialwalkuser.appspot.com",
            messagingSenderId: "947751571419",
            appId: "1:947751571419:web:64ec9c3a2607c41e1ea1fe"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        var myName = prompt("Enter your name");
    </script>
</body>


</html>