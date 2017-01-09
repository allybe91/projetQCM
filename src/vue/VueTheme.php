<html>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
	include 'header.php';
	//print_r( $reponse);
?>

<body>
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">
  <!-- The Grid -->
  <div class="w3-row-padding">
    <!-- Right Column -->
    <div class="w3-twothird">
		<div class="w3-container w3-card-2 w3-white">
		<h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Themes</h2>
		 <?php 
		 foreach ($themes as $theme): ?>
				<div class="w3-container">
				  <h6 class="w3-opacity"><b><?= $theme->getLibelle() ?></b></h6>
				  <h5 class="w3-text-teal">... questions  </h5>
				  <hr>
			</div>
        <?php endforeach; ?>
      </div>
    <!-- End Right Column -->
    </div>
  <!-- End Grid -->
  </div>
  <!-- End Page Container -->
</div>
</body>

</html>








