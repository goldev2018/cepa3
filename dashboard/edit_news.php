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
            { width: '10%', targets: 1 },
            { width: '30%', targets: 2 },
            { width: '5%', targets: 3 },
            { width: '6%', targets: 4 },
            // { width: '10%', targets: 5 },
            // { width: '10%', targets: 6 },
            // { width: '10%', targets: 7 },
            // { width: '5%', targets: 8 }
        ],
        // fixedColumns: true
    } );
} );
</script>
<style type="text/css">
  td.b {
    /*white-space: nowrap; */
    width: 50px; 
    overflow: hidden;
    text-overflow: ellipsis; 
    /*border: 1px solid #000000;*/
}
</style>
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
          <center>

            <table id="myTable" class="display">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      include "config.php"; 
       $sql    = $db->prepare("SELECT * FROM newsroom ORDER BY id ASC");
       $sql->execute();
       while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
// id, newsroom_path, newsroom_desc, newsroom_title, newsroom_type, email, newsroom_datetime
       ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['newsroom_title']; ?></td>
            <td><?php echo $row['newsroom_desc']; ?></td>
            <?php 
              $ntype = substr($row['newsroom_type'], 0, 5);
              if(strcmp($ntype,'image')==0){ ?>

            <td><?php echo '<img src="'.$row['newsroom_path'].'" height="50px" width="50px">' ?></td>
            <?php }
            else{
             ?>

            <td><?php echo $row['newsroom_type']; ?></td>

            <?php } ?>
            <td><a href="editnews.php?edit=<?php echo $row['id'];  ?>" onclick="return confirm('Are you sure?')">Edit</a> | <a href="deletenews.php?delete=<?php echo $row['id'];  ?>&link=<?php echo $row['newsroom_path'];  ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
        </tr>
        <?php } ?>
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