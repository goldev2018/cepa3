<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('include/header.php'); ?>
  <style>
  body {
        position: relative;
    }
    .modal-body{
      height: 450px;
      overflow-y: auto;
    }





/*style for news here*/

.container1 {
    border: 2px solid #dedede;
    background-color: #f1f1f1;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
}

.darker {
    border-color: #ccc;
    background-color: #ddd;
}

.container1::after {
    content: "";
    clear: both;
    display: table;
}

/*.container1 img {
    float: left;
    max-width: 60px;
    width: 100%;
    margin-right: 20px;
    border-radius: 50%;
}*/

.thumbnail{
   float: left;
    max-width: 60px;
    width: 100%;
    margin-right: 20px;
    border-radius: 50%;
}

.container1 img.right {
    float: right;
    margin-left: 20px;
    margin-right:0;
}

.time-right {
    float: right;
    color: #aaa;
}

.time-left {
    float: left;
    color: #999;
}


    #test {
      background: #eee;
      border: 1px dotted #ccc;
      margin: 1em;
    }
    .crop {
      white-space: nowrap;
      width: 12em;
      overflow: hidden;
      text-overflow: ellipsis;
      width: 99%;
    }




.imageshow {
    float: left;
    max-width: 60px;
    width: 100%;
    margin-right: 20px;
    /*border-radius: 50%;*/
}

/*end style for news*/


    </style>

    <!-- script for news here! -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<script>
    $(function() {
   $('p').click(function() {
     $(this).toggleClass('crop');
   });
 });
    
</script>
    <!-- end script for news -->


</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <?php include('include/navigation2.php'); ?>



<section id="content">
  <div class="container">
    <div class="row" >
      <div class="col-lg-8">
      <h3>NEWSROOM</h3>
      <div class="solidline"></div>



      <!-- insert news here! -->

<?php 
include 'dashboard/config.php';
// id, newsroom_path, newsroom_desc, newsroom_title, newsroom_type, email, newsroom_datetime
 $sql    = $db->prepare("SELECT * FROM newsroom ORDER BY id ASC");
$sql->execute();
while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
$email = $row['email'];
 $sql1    = $db->prepare("SELECT * FROM login WHERE email='$email'");
$sql1->execute();
$row1 = $sql1->fetch(PDO::FETCH_ASSOC);

// if ($row['newsroom_type']==="%image") {
  $ntype = substr($row['newsroom_type'], 0, 5);
if(strcmp($ntype,'image')==0){ ?>

<div class="container1 darker">
  <!-- <img src="img/images/default.png" alt="Avatar" style="border-radius: 50%;float:left;max-width: 60px;width: 100%;margin-right: 20px;"> -->
  <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row1['image'] ).'" alt="Avatar" style="border-radius: 50%;float:left;max-width: 60px;width: 100%;margin-right: 20px;"/>'; ?>
  <p><?php echo "<h5>".$row1['fullname'].", ".$row1['position']."</h5>".$row['newsroom_datetime']; ?></p><br>

    <div class="container1 darker">
    <img class="img-responsive" src="<?php echo "dashboard/".$row['newsroom_path']; ?>">
  </div>



  <p><?php echo "<h3>Clean energy is cheap, surging - and header for a fall</h3>"; ?></p>
  <div class="container1">
    <p id="test" class="crop">Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
  book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
  </div>


  <!-- <span class="time-right"><?php echo $row1["hd_info_date"]; ?></span> -->
</div>




<?php 
}
else{ ?>

<div class="container1 darker">
  <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row1['image'] ).'" alt="Avatar" style="border-radius: 50%;float:left;max-width: 60px;width: 100%;margin-right: 20px;"/>'; ?>
  <p><?php echo "<h5>".$row1['fullname'].", ".$row1['position']."</h5>".$row['newsroom_datetime']; ?></p><br>
  <p><?php echo "<h3>Clean energy is cheap, surging - and header for a fall</h3>"; ?></p>
  <div class="container1">
    <p id="test" class="crop">Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
  book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
  </div>

  <div class="container1">
    <a href="<?php echo "dashboard/".$row['newsroom_path']; ?>">  
    <img src="img/images/Download-Icon.png" alt="Avatar" style="border-radius: 50%;float:left;max-width: 60px;width: 100%;margin-right: 20px;">

    <p>
      <!-- <?php echo "<h4>EWC-AVP_Layout_SCN_10A-v2.ai<h4>"; ?> -->
      <?php echo "<h4>".str_replace("newsroomfiles/", "", $row['newsroom_path'])."</h4>"; ?>  
    </p>
  </a>
  <br>
  </div>
  <!-- <span class="time-right"><?php echo $row1["hd_info_date"]; ?></span> -->
</div>



<?php 
  }
} 
?>
      <!-- end insert news here! -->


      </div>




<div class="col-sm-4">
                    <h3>ANNOUNCEMENTS</h3>
                    <div class="solidline"></div>
                    <div class="col-xs-11 col-sm-10 col-md-10 col-lg-10">
                      <a href="announcements.php"><p>Click here for future announcements</p></a>
                    </div>
                  </div>

                  <div class="col-sm-4" style="float: right">
                    <h3>CONTACT US</h3>
                    <div class="solidline"></div>
                    <Address>
                      <!-- <i class="glyphicon glyphicon-home"></i> -->
                      <div class="col-xs-1 col-sm-2 col-md-2 col-lg-2">
                      <i class="glyphicon glyphicon-map-marker accent"></i>
                      </div>
                      <div class="col-xs-11 col-sm-10 col-md-10 col-lg-10">

                        Registered Address – <br>
                        Hazelwood Gregory Lane,<br>
                        Durley, Southampton,<br>
                        United Kingdom, SO32 2BS<br>
                        <br>
                        Hong Kong Address - <br>
                        Suite 4823, 48th Floor,<br>
                        Sun Hung Kai Centre, 30 Harbour Road,<br>
                        Hong Kong<br><br>

                      </div>

                      <div class="col-xs-1 col-sm-2 col-md-2 col-lg-2">
                      <i class="glyphicon glyphicon-earphone accent"></i>
                      </div>
                      <div class="col-xs-11 col-sm-10 col-md-10 col-lg-10">
                      (852) 2861 0719
                      </div>

                      <!-- <p><i class="glyphicon glyphicon-earphone"></i>&nbsp;(+632) 831 8855 </p> -->
                    </address>
                  </div>


    </div>
  </div>
</section>


</body>
<?php include('include/footer.php'); ?>

</html>
<!-- fa-cogs fa-wrench -->
