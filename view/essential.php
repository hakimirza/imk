<?php
	session_start();
	if(!(isset($_SESSION['nip']) && isset($_SESSION['iduser']))){
		header("Location: index.php");
		die();
	}
	include "controller/DBConnect.php";
	$sql = 'SELECT * FROM user WHERE nip = "'.$_SESSION['nip'].'";';
	$retval = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
	$status = "";
	if ($row['idjabatan'] > 1) {
		$status = "User";
		$msg = '<ul id="slide-out" class="side-nav">
					<li>
						<div class="userView">
							<img class="background" src="assets/images/office.jpg"/>
							<a href="#!user"><img class="circle" src="assets/images/profile/'.$row['image'].'"></a>
							<a href="#!name"><span class="white-text name">'.$row['nama'].'</span></a>
							<a href="#!email"><span class="white-text email">'.$row['email'].'</span></a>
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
					<li><a href="help.php"><i class="material-icons">live_help</i>Help</a></li>
					<li><a href="profile.php"><i class="material-icons">perm_identity</i>My profile</a></li>
				</ul>';
	}
	else {
		$status = "Admin";
		$msg = '<ul id="slide-out" class="side-nav">
					<li>
						<div class="userView">
							<img class="background" src="assets/images/office.jpg"/>
							<a href="#!user"><img class="circle" src="assets/images/profile/'.$row['image'].'"></a>
							<a href="#!name"><span class="white-text name">'.$row['nama'].'</span></a>
							<a href="#!email"><span class="white-text email">'.$row['email'].'</span></a>
						</div>
					</li>
					<li>
						<a class="subheader">Main Menu</a>
					</li>
					<li><a href="monitor.php"><i class="material-icons">airplay</i>Monitoring</a></li>
					<li><div class="divider"></div></li>
					<li><a href="daftar-dimensi.php"><i class="material-icons">mode_edit</i>Edit Dimension</a></li>
					<li><div class="divider"></div></li>
					<li>
						<ul class="collapsible collapsible-according" style="padding-left:15px">
							<li>
								<a class="collapsible collapsible-header"><i class="material-icons">playlist_add</i>Test Management</a>
								<div class="collapsible-body">
									<ul style="padding-left:40px">
										<li><a href="buatsoal.php">Create Test</a></li>
										<li><a href="monitoring_tes.php">Edit Test</a></li>
										<li><a href="monitoring_nilai.php">Edit Score</a></li>
									</ul>
								</div>
							</li>
						</ul>
					</li>
					<li><div class="divider"></div></li>
					<li>
						<ul class="collapsible collapsible-according" style="padding-left:15px">
							<li>
								<a class="collapsible collapsible-header"><i class="material-icons">perm_identity</i>User Management</a>
								<div class="collapsible-body">
									<ul style="padding-left:40px">
										<li><a href="daftar-user.php">Users</a></li>
										<li><a href="jabatan-management.php">Position Management</a></li>
										<li><a href="register-user.php">User Register</a></li>
									</ul>
								</div>
							</li>
						</ul>
					</li>
					<li><div class="divider"></div></li>
					<li><a class="subheader">Addition Menu</a></li>
					<li><a href="help.php"><i class="material-icons">live_help</i>Help</a></li>
					<li><a href="profile.php"><i class="material-icons">perm_identity</i>My profile</a></li>
				</ul>';
	}
	echo '<nav class="teal">
			<div class="nav-wrapper head-container">
				<a href="#" class="brand-logo">
					<a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
					<img id="logo-main" src="assets/images/logo-bps.png">
					<a id="title" >Knowledge Worker Competency Plan</a>
					<a id="sub-title">'.$status.'</a>
				</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="profile.php">'.$row['nama'].'</a></li>
					<li><a href="controller/logout.php">Logout</a></li>
				</ul>
			</div>
		</nav>'.$msg;
?>