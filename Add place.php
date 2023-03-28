
<?php
include 'connection.php';

if(isset($_POST['sub'])){

$place = $_POST['place'];
$amount = $_POST['amount'];

// $image = $_POST['image'];

$about = $_POST['about'];
$details = $_POST['details'];

$image = $_FILES['image']['name'];
    
if ($image != "") {
$filearray = pathinfo($_FILES['image']['name']);
// var_dump($filearray);exit();

$file1 = rand();
$file_ext = $filearray["extension"];




$filenew = $file1 . "." . $file_ext;
move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $filenew);

}


mysqli_query($con,"insert into place(name,image,about,details,amount)values('$place','$filenew','$about','$details','$amount')");
header("location:Viewplace.php");
}

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

  <div class="pagetitle">
      <h1></h1>
     
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-6">

       
          

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Place</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3" method="post" enctype="multipart/form-data">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" name="place" class="form-control" id="floatingName" placeholder="Place">
                    <label for="floatingName">Place</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" name="amount" class="form-control" id="floatingName" placeholder="Amount">
                    <label for="floatingName">Amount</label>
                  </div>
                </div>
                
                <div class="col-md-12">
                  
                    <input type="file" name="image" class="form-control" id="floatingName" placeholder="Image">
                    
                  
                </div>
             
                
               
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="about" placeholder="About" id="floatingTextarea" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Adout Place</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="details" placeholder="details" id="floatingTextarea" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">More Details</label>
                  </div>
                </div>
                
                
                
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="sub">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
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