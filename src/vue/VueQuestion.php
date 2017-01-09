<html>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
	include 'header.php';
?>

<body>
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">
  <!-- The Grid -->
  <div class="w3-row-padding">
    <!-- Right Column -->
    <div class="w3-twothird">
		<div class="w3-container w3-card-2 w3-white w3-margin-bottom">
			<h2 class="w3-text-grey w3-padding-16"><i class="w3-margin-right"></i>Vos questions-réponses :</h2>
			 
			 <?php 
			 
				 foreach ($questions as $question): ?>
				 
					<div class="w3-container">
					  <h5 class="w3-opacity"><b>Question - <?= $question->getIntitule() ?></b></h5>
					  <p>A - Lorem ipsum dolor sit amet.</p>
					  <p>B - Praesentium magnam consectetur vel in deserunt.</p>
					  <p>C - Aspernatur est reprehenderit sunt hic. </p>
					  <p>D - Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
					  <h6 class="w3-text-teal">Thème <span class="w3-tag w3-teal w3-round">Programmation Web</span></h6>
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








