<?php
	echo '<nav class="teal">
			<div class="nav-wrapper head-container">
				<a href="#" class="brand-logo">
					<a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
					<a href="/"><img id="logo-main" src="assets/images/logo-bps.png"></a>
					<a id="title" >Knowledge Worker Competency Plan</a>
					<a id="sub-title">User</a>
				</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="monitor.php">Admin</a></li>
					<li><a href="profile.php">User</a></li>
					<li><a href="">Help</a></li>
				</ul>
			</div>
		</nav>

		<ul id="slide-out" class="side-nav">
			<li>
				<div class="userView">
					<img class="background" src="assets/images/office.jpg"/>
					<a href="#!user"><img class="circle" src="assets/images/images.png"></a>
					<a href="#!name"><span class="white-text name">Admin</span></a>
					<a href="#!email"><span class="white-text email">obama@bps.go.id</span></a>
				</div>
			</li>
			<li>
				<a class="subheader">Main Menu</a>
			</li>
			<li><a href="profile.php"><i class="material-icons">perm_identity</i>Profile</a></li>
			<li><div class="divider"></div></li>
			<li><a href="tesmenejemen.php"><i class="material-icons">assignment</i>Test</a></li>
			<li><div class="divider"></div></li>
			<li><a href="evaluasi.php"><i class="material-icons">assignment_ind</i>Subordinate Evaluation</a></li>
			<li><div class="divider"></div></li>
			<li><a class="subheader">Addition Menu</a></li>
			<li><a href="#!"><i class="material-icons">live_help</i>Help</a></li>
		</ul>';
?>