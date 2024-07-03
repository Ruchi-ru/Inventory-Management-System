	<div class="dashboard_sidebar" id="dashboard_sidebar">
			<h3 class="dashboard_logo" id="dashboard_logo">Inventory System</h3>
			<div class="dashboard_sidebar_user">
				<img src="images/admin1.png" alt="user Image." id="userImage"/>
				<span><?= $user['first_name'].' '.$user['last_name']?></span>
			</div>
			<div class="dashboards_sidebar_menus">
				<ul class="dashboard_menu_lists">
					<!--class="menuActive"-->
					<li class="liMainMenu">
						<a href="./dashboard.php"><i class="fa fa-dashboard"></i><span class="menuText"> Dashboard</span></a>
					</li>
					<li class="liMainMenu">
						<a href="javascript:void(0);" class="showHideSubMenu">
							<i class="fa fa-tag showHideSubMenu" ></i>
							<span class="menuText showHideSubMenu" >Product</span>
							<i class="fa fa-angle-left mainMenuIconArrow showHideSubMenu" ></i>
						</a>
						<ul class="subMenus"> 
							<li><a class="subMenuLink" href="./product-view.php" ><i class="fa fa-circle-o"></i>View Product</a></li>
							<li><a class="subMenuLink" href="./product-add.php" ><i class="fa fa-circle-o"></i>Add Product</a></li>
						</ul>
					</li>
					</li>
					<li class="liMainMenu">
						<a href="javascript:void(0);" class="showHideSubMenu">
							<i class="fa fa-truck showHideSubMenu" ></i>
							<span class="menuText showHideSubMenu" >Supplier</span>
							<i class="fa fa-angle-left mainMenuIconArrow showHideSubMenu" ></i>
						</a>
						<ul class="subMenus"> 
							<li><a class="subMenuLink" href="#" ><i class="fa fa-circle-o"></i>View Supplier</a></li>
							<li><a class="subMenuLink" href="#" ><i class="fa fa-circle-o"></i>Add Supplier</a></li>
						</ul>
					</li>
					<li class="liMainMenu showHideSubMenu" >
						<a href="javascript:void(0);" class="showHideSubMenu">
							<i class="fa fa-user-plus showHideSubMenu" ></i>
							<span class="menuText showHideSubMenu" >User</span>
							<i class="fa fa-angle-left mainMenuIconArrow showHideSubMenu" ></i>
						</a>
						<ul class="subMenus"> 
							<li><a class="subMenuLink" href="./users-view.php" ><i class="fa fa-circle-o"></i>View Users</a></li>
							<li><a class="subMenuLink" href="./users-add.php" ><i class="fa fa-circle-o"></i>Add User</a></li>
						</ul>
					</li>
	
				</ul>
			</div>
		</div>