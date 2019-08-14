<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<a href="javascript:;"><img src="assets/img/user-13.jpg" alt="" /></a>
						</div>
						<div class="info">
							Sean Ngu
							<small>Landlord</small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="has-sub active">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-laptop"></i>
						    <span>LANDLORD</span>
					    </a>
						<ul class="sub-menu">
						    <li class="<?= $page=='' ? 'active':''; ?>"><a href="./">Dashboard </a></li>
						    <li class="<?= $page=='properties' ? 'active':''; ?>"><a href="?v=properties">My Properties</a></li>
						    <li class="<?= $page=='renters' ? 'active':''; ?>"><a href="?v=renters">My Tenants</a></li>
						    <li class="<?= $page=='rents' ? 'active':''; ?>"><a href="?v=rents">Rent Payments</a></li>
						    <li class="<?= $page=='support' ? 'active':''; ?>"><a href="?v=support">Support</a></li>
						</ul>
					</li>
					
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->