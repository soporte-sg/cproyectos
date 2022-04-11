<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <link href=<?php echo $path."menu/menu.css"?> rel="stylesheet"> -->



<?php
    // echo $this->Html->script('menujs/menu.js');
?>

    <script src=<?php echo $path."menu/menu.js" ?>></script>
    

    <?php echo $this->Html->script('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js'); ?>
	<?php echo $this->Html->script('https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js'); ?>
	<?php echo $this->Html->script('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js'); ?>
    

</head>
<body>


<header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">BBBootstrap</span> </a>
                <div class="nav_list"> <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a> <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Messages</span> </a> <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span> </a> <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a> <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a> </div>
            </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
<!-- 
menusito     -->
<div class='dashboard'>

		<div class='dashboard-app'>
			<header class='row justify-content-between dashboard-toolbar'>
				
				<a href="#!" class=" col-4 justify-content-start menu-toggle">HOLU</a>
				<span class="col-4 justify-content-end nombre"><?php echo ucwords($nombres) ?></span>
			</header>
			<div class='dashboard-content'>
				<div class='container'>
					<?php echo $this->Session->flash(); ?>

					<?php echo $this->fetch('content'); ?>


				</div>
			</div>
		</div>
		<div class="dashboard-nav">
			<header><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a><a href="#" class="brand-logo"><i class="fas fa-anchor"></i> <span>BRAND</span></a></header>



			<nav class="dashboard-nav-list"><a href="#" class="dashboard-nav-item"><i class="fas fa-home"></i>
					Home </a><a href="#" class="dashboard-nav-item active"><i class="fas fa-tachometer-alt"></i> dashboard
				</a><a href="#" class="dashboard-nav-item"><i class="fas fa-file-upload"></i> Upload </a>
				<div class='dashboard-nav-dropdown'><a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-photo-video"></i> Media </a>
					<div class='dashboard-nav-dropdown-menu'><a href="#" class="dashboard-nav-dropdown-item">All</a><a href="#" class="dashboard-nav-dropdown-item">Recent</a><a href="#" class="dashboard-nav-dropdown-item">Images</a><a href="#" class="dashboard-nav-dropdown-item">Video</a></div>
				</div>
				<div class='dashboard-nav-dropdown'><a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-users"></i> Users </a>
					<div class='dashboard-nav-dropdown-menu'><a href="#" class="dashboard-nav-dropdown-item">All</a><a href="#" class="dashboard-nav-dropdown-item">Subscribed</a><a href="#" class="dashboard-nav-dropdown-item">Non-subscribed</a><a href="#" class="dashboard-nav-dropdown-item">Banned</a><a href="#" class="dashboard-nav-dropdown-item">New</a></div>
				</div>
				<div class='dashboard-nav-dropdown'><a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-money-check-alt"></i> Payments </a>
					<div class='dashboard-nav-dropdown-menu'><a href="#" class="dashboard-nav-dropdown-item">All</a><a href="#" class="dashboard-nav-dropdown-item">Recent</a><a href="#" class="dashboard-nav-dropdown-item"> Projections</a>
					</div>
				</div>
				<a href="#" class="dashboard-nav-item"><i class="fas fa-cogs"></i> Settings </a><a href="#" class="dashboard-nav-item"><i class="fas fa-user"></i> Profile </a>
				<div class="nav-item-divider"></div>
				<a href="#" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
			</nav>
		</div>

	</div>
    
</body>
</html>

