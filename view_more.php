<?php
include 'connection.php';
$id = $_GET['id'];
$data = mysqli_query($con,"select * from place where place_id ='$id'");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include 'header.php';
  ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include 'sidebar.php';
  ?>
 <!-- End Sidebar-->

  <main id="main" class="main">
<!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
<!-- End Sales Card -->

            <!-- Customers Card -->
            <!-- End Customers Card -->

            <!-- Reports -->
            <!-- End Reports -->

            <!-- Recent Sales -->
            <!-- End Recent Sales -->

            <!-- Top Selling -->
            <!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <!-- End Recent Activity -->

          <!-- Budget Report -->
          <!-- End Budget Report -->

          <!-- Website Traffic -->
          <!-- End Website Traffic -->

          <!-- News & Updates Traffic -->
          <!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>
    
   
          <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Sl no</th>
                    <th scope="col">Place Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Details</th>
                    <th scope="col">Amount</th>

                    
                   
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $count=0;

                    while($row = mysqli_fetch_assoc($data)){
                      $count++;
                  ?>
                  <tr>
                    <th scope="row"><?php echo $count; ?></th>
                    <td><?php echo $row['name']  ?></td>
                    <td><img src="images/<?php echo $row['image'];?>" height="100" width="100"alt=""></td>
                    <td><?php echo $row['details']  ?></td>
                    <td><?php echo $row['amount']  ?></td>
                    
                  </tr>
                  <?php
                    }
                  ?>
                 
                </tbody>
              </table>

  </main>
          
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
   
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>