<nav class="navbar navbar-default navbar-fixed-top">
		<!--logo-->

		<div class="col-md-3">
			<div class="navbar-header">
			<a href=""class="navbar-brand"><img src="thirdparties/images/logo.png" width="50"/></a>
			<a href="form.php"><span class="blue-text">iDEAR</span>  Concept</a>
		</div>		
		</div>
		<ul class="nav navbar-nav">
			<li class="active"><a href="">Home</a></li>
			<?php
				if(!isset($_SESSION['username'])){
					echo "<li><a href='#' onclick='loadSignUp();'>Sign up</a></li>";
				}
			?>
			<li><a href='contact.php'>Contact us</a></li>
			<li><a href=''>Read Manual</a></li>
			<li><a href='all_posts.php'>All Posts</a></li>
			<?php 
				if(isset($_SESSION['username'])){
				 echo "<li><a href='logout.php'>Log out</a></li>";
				}

			?>

		</ul>
		
		<form action="" search_result.php method='GET' class='form' id="search_form">
		<div class="form-inline">
			<input type="text" name="item" id="search_field_id" placeholder="Enter firstname or lastname or username" class=" form-control">
			<button type="submit" name="search" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-search"></i>
			</button> 
		</div>
	
</form>
</nav>