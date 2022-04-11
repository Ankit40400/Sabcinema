<html>
    <head>
        <?php
		include_once 'head.php';
		?>
	<title>Request Page</title>
    </head>
<body>

<div class="demand-page">

	<div class="container-fluid">
	
	<div class="row">
		<div class="col-lg-3 col-md-3 col-xs-0">
		</div>
		
		<div class="col-xs-12 col-lg-6 col-md-6">
			<div class="main-demand">
				<section class="demand-container">
				<h1>Tell us the name of movie or web series which you want</h1>
				<h2>Demand  page</h2>
				<div class="demand-form">
					<form  action="includedfiles/demanddb.php"  method="POST" >
					<input type="text" name="username" placeholder="name of movies and series"><br>
					<button  style="margin-top: 6px; margin-bottom: 6px;" type="submit" name="submit">Submit</button>
				</form>
				</div>
				</section>
			</div>	 
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-xs-0">
	</div>
	
	</div>
			
	<?php
	include_once 'footer.php';
	?>

</div>
	
</body>
</html>