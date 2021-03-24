<div class="main-header" data-background-color="blue">
	<!-- Logo Header -->
	<div class="logo-header">
		<a href="index.php" class="logo">
			<img src="assets/img/logoazzara.svg" alt="navbar brand" class="navbar-brand">
  	</a>
	
    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon">
				<i class="fa fa-bars"></i>
			</span>
		</button>
	
    <button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
		<div class="navbar-minimize">
			<button class="btn btn-minimize btn-rounded">
				<i class="fa fa-bars"></i>
			</button>
		</div>
	</div>
	<!-- End Logo Header -->

	<!-- Navbar Header -->
	<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue">
		<div class="container-fluid">
			<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
				<li class="nav-item toggle-nav-search hidden-caret">
					<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
						<i class="fa fa-search"></i>
					</a>
				</li>

        <li class="nav-item dropdown hidden-caret">
					<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-bell"></i>
						<span class="notification">4</span>
					</a>
				</li>

        <li class="nav-item dropdown hidden-caret">
					<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
						<div class="avatar-sm">
							<img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
					</a>
				</li>
			</ul>
		</div>
	</nav>
	<!-- End Navbar -->
</div>

<!-- Sidebar -->
<div class="sidebar">
	<div class="sidebar-background"></div>
  	<div class="sidebar-wrapper scrollbar-inner">
			<div class="sidebar-content">
				<div class="user">
					<div class="avatar-sm float-left mr-2">
						<img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
					</div>
	
          <div class="info">
						<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
							<span>
		  					Denna Dwi C
	  						<span class="user-level">Administrator</span>
							</span>
						</a>
			  		<div class="clearfix"></div>
					</div>
				</div>
			
        <ul class="nav">
					<li class="nav-item active">
						<a href="index.php">
							<i class="fas fa-home"></i>
							<p>Dashboard</p>
						</a>
					</li>
	
          <li class="nav-section">
						<span class="sidebar-mini-icon">
							<i class="fa fa-ellipsis-h"></i>
						</span>
						<h4 class="text-section">Main Menu</h4>
					</li>

          <li class="nav-item">
						<a href="workorderlist.php">
							<i class="fas fa-clipboard-list"></i>
							<p>Work Order List</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- End Sidebar -->