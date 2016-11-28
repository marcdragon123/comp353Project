<?php session_start();
	include 'backend/dbconnection.php' ;
	include 'backend/dbFunctions.php';
  if(!isset($_SESSION['user'])) { ?>

<div class="top-bar top-barHeightWidth mustard-bg">
	<div class="top-bar-left mustard-bg">
		<ul class="dropdown menu mustard-bg" data-dropdown-menu>
			<li class="menu-text mustard-bg ">SUBER</li>
			<li class="radius50 mustard-bg">
				<p class ="radius50">
			powered by the DREAMTEAM
				</p>

			</li>
		</ul>
	</div>
	<div class="top-bar-right">
		<ul class="menu mustard-bg">
			<!-- <li><input type="search" placeholder="Search"></li>
			<li><button type="button" class="button">Search</button></li> -->
			
			<li class="radius50 mustard-bg"><a class ="mustard-bg" href='register.php'>Register</a></li>
			<li class="radius50 mustard-bg"><a href ='index.php'>Log In</a></li>
		</ul>
	</div>
</div>

<?php } else { ?>


	<div class="top-bar top-barHeightWidth mustard-bg">
		<div class="top-bar-left mustard-bg">
			<ul class="dropdown menu mustard-bg" data-dropdown-menu>
				<li class="menu-text mustard-bg ">SUBER</li>
				<li class="radius50 mustard-bg">
					<p class ="radius50">
				powered by the DREAMTEAM
					</p>

				</li>
			</ul>
		</div>
		<div class="top-bar-right">
			<ul class="menu mustard-bg">
				<!-- <li><input type="search" placeholder="Search"></li>
				<li><button type="button" class="button">Search</button></li> -->
				<li class="radius50 mustard-bg"><a class ="mustard-bg inboxButton" >Inbox</a></li>
			<li class="radius50 mustard-bg"><a class ="mustard-bg profileButton" >My Profile</a></li>
				
				<li class="radius50 mustard-bg"> <a href="backend/logout.php" >Log out</a> </li>
			</ul>
		</div>
	</div>




<?php } ?>
