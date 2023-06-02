<?php 
    include 'core/config.php';
    $user_id = $_SESSION['user_id'];
    $page = (isset($_GET['page']) && $_GET['page'] !='') ? $_GET['page'] : '';
    userlogin($_SESSION['user_id']);
?>
<!DOCTYPE html>

<html lang="en">

  <head>
    <title>Loan Manager</title>
  
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <!-- <link rel="stylesheet" href="assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css"> -->
    <!-- <link rel="stylesheet" href="assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css"> -->
    <link rel="stylesheet" href="assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
    <link rel="stylesheet" href="assets/vendor/libs/flatpickr/flatpickr.css" />

    <link href="assets/vendor/sweet-alert/sweetalert2.min.css" rel="stylesheet">

    <!-- Form Validation -->
    <link rel="stylesheet" href="assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />

    <!-- Page CSS -->
    
    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <!-- <script src="assets/vendor/js/template-customizer.js"></script> -->
    <script src="assets/js/config.js"></script>

</head>

<body>
  <!-- Core JS -->
  <script src="assets/vendor/js/menu.js"></script>
  <script src="assets/js/main.js"></script>


  <!-- build:js assets/vendor/js/core.js -->
  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="assets/vendor/libs/hammer/hammer.js"></script>
  <script src="assets/vendor/libs/i18n/i18n.js"></script>
  <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>
  <script src="assets/vendor/libs/datatables/jquery.dataTables.js"></script>
  <script src="assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
  <script src="assets/vendor/libs/datatables-responsive/datatables.responsive.js"></script>
  <script src="assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js"></script>
  <script src="assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.js"></script>
  <script src="assets/vendor/libs/datatables-buttons/datatables-buttons.js"></script>
  <script src="assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js"></script>
  <script src="assets/vendor/libs/jszip/jszip.js"></script>
  <script src="assets/vendor/libs/pdfmake/pdfmake.js"></script>
  <script src="assets/vendor/libs/datatables-buttons/buttons.html5.js"></script>
  <script src="assets/vendor/libs/datatables-buttons/buttons.print.js"></script>
  <script src="assets/vendor/sweet-alert/sweetalert2.all.min.js"></script>
  
  <!-- Flat Picker -->
  <script src="assets/vendor/libs/moment/moment.js"></script>
  <script src="assets/vendor/libs/flatpickr/flatpickr.js"></script>

  <!-- Form Validation -->
  <script src="assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
  <script src="assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
  <script src="assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
  
  <!-- Page JS -->
  <script src="assets/js/dashboards-analytics.js"></script>


    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">

        <!-- ======= Sidebar ======= -->
          <?php require_once 'components/sidebar.php' ?>
          <!-- Main JS -->
          

              <div class="layout-page">
                  <!-- ======= Topbar ======= -->
                    <?php require_once 'components/topbar.php' ?>

                  <!-- ======= MAIN BODY ======= -->
                  <?php require_once 'routes/routes.php' ?>

                  <!-- ======= FOOTER ======= -->
                  <?php require_once 'components/footer.php' ?>
              </div>
        </div>
    </div>



</body>

<script>
function checkAll(ele, ref) {
  var checkboxes = document.getElementsByName(ref);
    if (ele.checked) {
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].type == 'checkbox') {
                checkboxes[i].checked = true;
            }
        }
    }else{
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].type == 'checkbox') {
                checkboxes[i].checked = false;
            }
        }
    }
}
</script>

</html>