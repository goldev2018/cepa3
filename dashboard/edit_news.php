<?php include 'sessionchk.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Cepa | Edit/Delete News Room</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">


<!-- for datatables -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="plugins/jquery.dataTables.css">
 
<script type="text/javascript" charset="utf8" src="plugins/jquery.dataTables.js"></script>

<script>
$(document).ready(function() {
    var table = $('#myTable').DataTable( {
        scrollY:        "300px",
        scrollX:        "1220px",
        scrollCollapse: true,
        // paging:         false,
        columnDefs: [
            { width: '5%', targets: 0 },
            { width: '15%', targets: 1 },
            // { width: '15%', targets: 2 },
            // { width: '30%', targets: 3 },
            // { width: '15%', targets: 4 },
            // { width: '10%', targets: 5 },
            // { width: '10%', targets: 6 },
            // { width: '10%', targets: 7 },
            // { width: '5%', targets: 8 }
        ],
        // fixedColumns: true
    } );
} );
</script>
 <!-- for datatables -->
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<?php include'navbar.php'; ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Update News Room</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <!-- <h1>Upload file here</h1> -->
          <!-- <p>This is an example of a blank page that you can use as a starting point for creating new ones.</p> -->
          <center>
            <!-- <form action="upload_newsChk.php" method="post" enctype="multipart/form-data">
            <input type="text" name="newsroom_title" placeholder="News Room Title" size="99"><br><br>
            <textarea placeholder="News Room description here..." rows="10" cols="100" name="newsdesc"></textarea><br><br>
            <input type="file" name="filepdf"><br><br>
            <input type="submit" name="upload" value="Upload">
            </form> -->

            <table id="myTable" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data </td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data </td>
        </tr>
    </tbody>
</table>


          </center>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
<?php include 'sidebar.php'; ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="session_destroy.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->
    <!-- Custom scripts for all pages-->
    <!-- <script src="js/sb-admin.min.js"></script> -->
  </div>
</body>

</html>