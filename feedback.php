<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
</head>
<body>

<div class="feedbackimage">

<?php
include_once 'head.php';
?>

<div class="container feedback">
 	<div class="row">
 		<div class="col-xs-3"> 			
 		</div>

 		<div class="col-xs-12 col-md-8 col-lg-6">
 			<section class="feedback-container">
				<div class="feedback-wrapper">
					<h2>Your feedback is important for us to improve our services</h2>
					<div class="feedback-form">
						<form  action="includedfiles/feedbackdb.php"  method="POST" >
							<div class="col-xs-12">
								<input type="text" name="likeordislike" placeholder="Tell us what you like and dislike in our website"><br>
							</div>

							<div class="col-xs-12 ">
							<input type="text" name="improve" placeholder="Tell us how can we improve"><br>
							</div>
							<button type="submit" name="submit">Submit</button>
						</form>
					</div>
				</div>	 
			</section>
 		</div>
 		<div class="col-xs-3">
		</div>
	</div>
</div>	 
	
<?php
include_once 'footer.php';
?>
</div>

</body>
</html>