<?php include 'sessionchk.php'; 
$id = $_GET['edit'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Cepa | Add News Room</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
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
        <li class="breadcrumb-item active">Upload News Room</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Upload file here</h1>
          <!-- <p>This is an example of a blank page that you can use as a starting point for creating new ones.</p> -->
          <center>
            <?php 
            include 'config.php';
             $sql = $db->prepare("SELECT * FROM newsroom WHERE id = '$id'");
             $sql->execute();
             $row = $sql->fetch(PDO::FETCH_ASSOC);
             // id, newsroom_path, newsroom_desc, newsroom_title, newsroom_type, email, newsroom_datetime
             ?>
            <form action="edit_newsChk.php" method="post" enctype="multipart/form-data">
            <input type="text" name="newsroom_title" placeholder="News Room Title" size="99" value="<?php echo $row['newsroom_title'] ?>"><br><br>
            <textarea placeholder="News Room description here..." rows="10" cols="100" name="newsdesc"><?php echo $row['newsroom_desc'] ?></textarea><br><br>
            <input type="file" name="filepdf"><br><br>
            <input type="hidden" name="existing" value="<?php echo $row['newsroom_path']; ?>">
            <input type="hidden" name="editid" value="<?php echo $id; ?>">
            <input type="submit" name="upload" value="Upload">
            </form>
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
</body>

</html>