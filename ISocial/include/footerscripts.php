   <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
   <script src="assets/libs/simplebar/simplebar.min.js"></script>
   <script src="assets/libs/eva-icons/eva.min.js"></script>


   <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
   <script src="assets/libs/flatpickr/flatpickr.min.js"></script>

   <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
   <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>
   <script src="assets/js/pages/pass-addon.init.js"></script>
   <script src="assets/js/pages/dashboard.init.js"></script>
   <script src="assets/js/pages/todo.init.js"></script>

   <!-- tui charts plugins -->
   <script src="assets/libs/tui-chart/tui-chart-all.min.js"></script>

   <!-- tui charts map -->
   <script src="assets/libs/tui-chart/maps/usa.js"></script>

   <!-- tui charts plugins -->
   <script src="assets/js/pages/tui-charts.init.js"></script>

   <script src="assets/js/app.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <?php if (isset($_SESSION['status_title'])) {

   ?>
      <script>
         swal({
            title: '<?php echo $_SESSION['status_title']; ?>',
            text: '<?php echo $_SESSION['status_text']; ?>',
            icon: '<?php echo $_SESSION['status_code']; ?>',
            button: " OK",
         });
      </script>
   <?php unset($_SESSION['status_title']);
   } ?>
   </script>