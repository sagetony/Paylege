<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">	
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">
				<li class="treeview">
				  <a href="">
					<i data-feather="monitor"></i>
					<span>Dashboard</span>
					<span class="pull-right-container">
					</span>
				  </a>
				 
                </li>
             		<li class="treeview">
						<a href="#">
						<i data-feather="user"></i>
						<span>My Account</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-right pull-right"></i>
						</span>
						</a>
						<ul class="treeview-menu">
						<li><a href="{{ route('profile') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Edit Profile</a></li>
						
						</ul>
                  	</li>
				  <li class="treeview">
					<a href="#">
					  <i data-feather="dollar-sign"></i>
					  <span>My Wallet</span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="{{ route('deposit') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Fund Wallet</a></li>
					  <li><a href=""><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Transfer Funds</a></li>
					  
					</ul>
					
				  </li>
				  <li class="treeview">
					<a href="#">
					  <i data-feather="dollar-sign"></i>
					  <span>Payment Room</span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="{{ route('withdraw') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Offering</a></li>
					  <li><a href=""><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tithe</a></li>
					  <li><a href=""><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Donations</a></li>
						  
					</ul>
				  </li>
				  <li class="treeview">
					<a href="#">
					  <i data-feather="refresh-ccw"></i>
					  <span>Trading Room</span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>
					<ul class="treeview-menu">
						<li><a href=""><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Buy</a></li>
					  <li><a href=""><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sell</a></li>					  
					</ul>
				  </li>
				  
				  
				<li class="treeview">
				  <a href="#">
					<i data-feather="pie-chart"></i>
					<span>Transaction History</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
				<li><a href="{{ route('deposithistory') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Deposit History</a></li> 
					<li><a href=""><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Collection History</a></li> 
					<li><a href=""><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Withdraw History</a></li>
						
				  </ul>
				</li> 
				
				
				
				
                  <li class="">
                    <a href="{{ route('support') }}">
                      <i data-feather="bar-chart-2"></i>
                      <span>Support</span>
                      
                    </a>
                    
                  </li> 
				<li class="">
				  <a href="{{ route('logout') }}">
					<i data-feather="lock"></i>
					<span>Logout</span>
					
				  </a>
				 
				</li>
				 	     
			  </ul>
			  
			 
		  </div>
		</div>
    </section>
  </aside> 