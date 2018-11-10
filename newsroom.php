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
			<div class="col-lg-12">
			<h3>NEWSROOM</h3>
			<div class="solidline"></div>


			<!-- Modal -->
			<div id="myModal" class="modal" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
			  <div class="modal-content">
			      <div class="modal-header">
							<!-- <a href="index.php"><button type="button" class="close">&times;</button></a> -->
			          <h4 class="modal-title">Disclaimer</h4>
			      </div>
			      <div class="modal-body"><p><strong>THIS SECTION OF THE WEBSITE CONTAINS ANNOUNCEMENTS, DOCUMENTS AND INFORMATION (THE “INFORMATION”) PUBLISHED BY STROBE RELATING TO THE [POSSIBLE] OFFER IN COMPLIANCE WITH THE CITY CODE ON TAKEOVERS AND MERGERS (THE “CODE”). THE OFFER CANNOT BE VALIDLY ACCEPTED BY BEAM SHAREHOLDERS OR ANY OTHER PERSONS BY MEANS OF DOWNLOADING A COPY OF THE OFFER DOCUMENTS FROM THIS WEBSITE.
			</strong></p>
			<p><strong>THE INFORMATION IS BEING MADE AVAILABLE IN GOOD FAITH AND FOR INFORMATION PURPOSES ONLY, AND ITS AVAILABILITY IS SUBJECT TO THE TERMS AND CONDITIONS SET OUT BELOW.  IF YOU ARE NOT PERMITTED TO VIEW THE INFORMATION ON THIS WEBSITE, OR VIEWING THE INFORMATION WOULD RESULT IN A BREACH OF THOSE TERMS AND CONDITIONS, OR YOU ARE IN ANY DOUBT AS TO WHETHER YOU ARE PERMITTED TO VIEW THE INFORMATION, PLEASE EXIT THIS WEB PAGE.</strong></p>

			        <p><strong>Basis of access</strong></p>
			        <p>Please read this notice carefully - it applies to all persons who view this part of the website and, depending upon who you are and where you live, it may affect your rights. This notice and the information contained herein may be altered or updated from time to time, and should be read carefully each time you visit this part of the website.</p>
			        <p>Strobe reserves the right to amend or update this notice at any time and you should, therefore, read it in full each time you visit the website. In addition, the contents of the website may be amended at any time in whole or in part at the sole discretion of Strobe.</p>
			        <p>For regulatory reasons, we have to ensure you are aware of the appropriate regulations for the country which you are in.  To allow you to view the Information, you have to read the following notices.</p>

			        <p><strong>Overseas persons</strong></p>
			        <p>The information contained herein is not for publication or distribution, directly or indirectly, in or into any jurisdiction where to do so would violate the law of that jurisdiction (a “Restricted Jurisdiction”), and the availability of the Offer to shareholders who are not resident in the United Kingdom may be affected by the laws of relevant jurisdictions.  Persons who are not resident in the United Kingdom should inform themselves of, and observe, any applicable regulatory and legal requirements.</p>
			        <p>Unless otherwise determined by Strobe or required by the Code, and permitted by applicable law and regulation, the Offer will not be made available, directly or indirectly, in or into a Restricted Jurisdiction where to do so would violate the securities laws in that jurisdiction and the Offer is not capable of acceptance from or within a Restricted Jurisdiction except pursuant to an applicable exemption.  The Offer may not be downloaded or accessed by any person either in whole or in part from or within a Restricted Jurisdiction or where to do so would or may constitute a breach of any applicable local laws or regulations.</p>

			        <p><strong>IF YOU ARE NOT PERMITTED TO VIEW THE INFORMATION ON THIS WEBSITE, OR VIEWING THE INFORMATION WOULD RESULT IN A BREACH OF THE ABOVE, OR YOU ARE IN ANY DOUBT AS TO WHETHER YOU ARE PERMITTED TO VIEW THE INFORMATION, PLEASE EXIT THIS WEB PAGE.</strong></p>

			        <p><strong>Forward-looking statements</strong></p>
			        <p>The information and documents in this section of the website may contain forward-looking statements regarding Strobe's or Beam's financial position, business strategy, plans and objectives of management for future operations.  All statements other than statements of historical facts included in any document may be forward-looking statements.  Forward-looking statements also often use words such as “targets”, “plans”, “believes”, “expects”, “aims”, “intends”, “will”, “may”, “anticipates”, “estimates”, “projects”, “should” and words of similar meaning.  By their nature, forward-looking statements involve risk and uncertainty because they relate to future events and circumstances, and readers are cautioned not to place undue reliance on such statements.  The important factors that could cause Beam's and/or Strobe's actual results, performance or achievements to differ materially from those in the forward-looking statements include, among others: the performance of competitors; the impact of legal or other proceedings; and general market and/or economic conditions. </p>

			        <p>These forward-looking statements speak only as of the date of the relevant document(s).  Strobe expressly disclaims any obligation or undertaking to update or revise any forward-looking statement (except to the extent legally required).</p>

			        <p>Unless expressly stated otherwise, no statement contained or referred to in this section of the website is intended to be a profit forecast.</p>

			        <p><strong>Confirmation of understanding and acceptance of disclaimer</strong></p>

			        <p>I have read and understood the disclaimer and terms and conditions set out above.  I understand that it may affect my rights.  I agree to be bound by its terms.  I confirm that I am permitted to proceed to this part of the site.</p></div>
			      <div class="modal-footer">
							<a href="index.php"><button type="button" class="btn btn-secondary">< Back</button></a>
			        <button type="button" class="btn btn-default" data-dismiss="modal">Agree</button>

			      </div>
			  </div>
			</div>
			</div>


			<!-- insert news here! -->

<?php
include 'dashboard/config.php';
// id, newsroom_path, newsroom_desc, newsroom_title, newsroom_type, email, newsroom_datetime
 $sql    = $db->prepare("SELECT * FROM newsroom ORDER BY id desc");
$sql->execute();
while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
// if ($row['newsroom_type']==="%image") {
	$ntype = substr($row['newsroom_type'], 0, 5);
if(strcmp($ntype,'image')==0){ ?>

<div class="container1 darker">
  <img src="img/images/default.png" alt="Avatar" style="border-radius: 50%;float:left;max-width: 60px;width: 100%;margin-right: 20px;">
  <p><?php echo "<h5>John Doe, Engineer</h5>October 31, 2018"; ?></p><br>

    <div class="container1 darker">
    <img src="<?php echo "dashboard/".$row['newsroom_path']; ?>">
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
  <img src="img/images/default.png" alt="Avatar" style="border-radius: 50%;float:left;max-width: 60px;width: 100%;margin-right: 20px;">
  <p><?php echo "<h5>John Doe, Engineer</h5>October 31, 2018"; ?></p><br>
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
		</div>
	</div>
</section>


</body>
<?php include('include/footer.php'); ?>

</html>
<!-- fa-cogs fa-wrench -->
