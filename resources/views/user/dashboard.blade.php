<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.png">

    <title> User Dashboard</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="assets/css/vendors_css.css">
	<!--amcharts -->
	<link href="www.amcharts.com/lib/3/plugins/export/export.css" rel="stylesheet" type="text/css" /> 
	  
	<!-- Style-->  
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/skin_color.css">
<body class="hold-transition light-skin sidebar-mini theme-warning fixed">
	
    <div class="wrapper">
        
      <header class="main-header">
        <div class="d-flex align-items-center logo-box justify-content-start">	
            <!-- Logo -->
            <a href="" class="logo">
              <!-- logo-->
              <div class="logo-mini w-30">
                  <span class="dark-logo"><img src="assets/images/logo.png'" alt="logo"></span>
              </div>
              <div class="logo-lg">
                  <span class="light-logo"><img src="assets/images/logo.png'" alt="logo" ></span>
                  <span class="dark-logo"><img src="assets/images/logo.png'" alt="logo"></span>
              </div>
            </a>	
        </div>  
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <div class="app-menu">
            <ul class="header-megamenu nav">
                <li class="btn-group nav-item">
                    <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
                        <i data-feather="align-left"></i>
                    </a>
                </li>
               
            </ul> 
          </div>
            
          <div class="navbar-custom-menu r-side">
            <ul class="nav navbar-nav">		  
                <li class="btn-group d-lg-inline-flex d-none">
                    <div class="app-menu">
                        <div class="search-bx mx-5">
                            <form>
                                <div class="input-group">
                                  <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                  <div class="input-group-append">
                                    <button class="btn" type="submit" id="button-addon3"><i data-feather="search"></i></button>
                                  </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
                <li class="btn-group nav-item d-lg-inline-flex d-none">
                    <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen btn-primary-light" title="Full Screen">
                        <i data-feather="maximize"></i>
                    </a>
                </li>
              <!-- Notifications -->
             
              
              <!-- User Account-->
              <li class="dropdown user user-menu">
                <a href="#" class="waves-effect waves-light dropdown-toggle btn-primary-light" data-bs-toggle="dropdown" title="User">
                    <i data-feather="user"></i>
                </a>
                <ul class="dropdown-menu animated flipInX">
                  <li class="user-body">
                     <a class="dropdown-item" href=""> <i class="ti-user text-muted me-2"></i> Profile</a>
                     <a class="dropdown-item" href=""> <i class="ti-wallet text-muted me-2"></i> My Wallet</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href=""><i class="ti-lock text-muted me-2"></i> Logout</a>
                  </li>
                </ul>
              </li>	
              
              <!-- Control Sidebar Toggle Button -->
              
                
            </ul>
          </div>
        </nav>
      </header>
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">		
            <div class="row">
                <div class="col-xl-12 col-md-12 col-lg-12">
                    <div class=" overflow-hidden bg-transparent card-crypto-scroll shadow-none">
                        <div class="js-conveyor-example">
                        <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script><div id="coinmarketcap-widget-marquee" coins="1,1027,825,1839,52,2010" currency="USD" theme="light" transparent="true" show-symbol-logo="true" width="1000000"></div>
                            
                        </div>
                    </div>
                </div>
            </div>	
			<div class="row">	
				<div class="col-12">
					<div class="box">
						<div class="box-body">
							<div class="row justify-content-between">
								 <div class="col-xxxl-4 col-xl-5 col-12">
									<div class="p-10">
										<h5 class="text-uppercase fw-600">My Wallet Balance</h5>
										<h1 class="fw-700 text-dark mt-20">$45000 </h1>
										
									</div>
								</div> 

								<div class="col-xxxl-12 col-xl-12 col-12">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-12">
											<div class="box bg-warning bg-brick-dark rounded30 mb-md-30 mt-30 mb-0">
												<div class="box-body">
													<div>
														<i class="cc BTC text-white" title="BTC"></i> 
														<h4>Total Deposit</h4>
													</div>
													<div class="mt-100">
														<h3 class="fw-600">$2000 </h3>
														
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-12">
											<div class="box bg-primary bg-brick-dark rounded30 mb-md-30 mt-30 mb-0">
												<div class="box-body">
													<div>
														<i class="cc XRP text-white" title="XRP"></i> 
														<h4>Offering</h4>
													</div>
													<div class="mt-100">
														<h3 class="fw-600"> $1200</h3>
														
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-12">
											<div class="box bg-info bg-brick-dark rounded30 mb-md-30 mt-30 mb-0">
												<div class="box-body">
													<div>
														<i class="cc USDT text-white" title="USDT"></i>
														<h4>Tithe</h4>
													</div>
													<div class="mt-100">
														<h3 class="fw-600">$100</h3>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-12">
											<div class="box bg-danger bg-brick-dark rounded30 mb-md-30 mt-30 mb-0">
												<div class="box-body">
													<div>
														<i class="cc SDC text-white" title="SDC"></i> 
														<h4>Withdraw</h4>
													</div>
													<div class="mt-100">
														<h3 class="fw-600">$0 </h3>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				</div>
				<div class="col-xxxl-9 col-xl-8 col-12">
					<div class="box bg-transparent no-shadow">
						<div class="box-header">
							<h4 class="box-title">Cryptocurrency Markets (Trend-Following)</h4>
						</div>
						<div class="box-body">

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text"></span></a> </div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
    {
    "width": "1000",
    "height": "490",
    "defaultColumn": "moving_averages",
    "screener_type": "crypto_mkt",
    "displayCurrency": "USD",
    "colorTheme": "light",
    "locale": "en",
    "isTransparent": true
  }
    </script>
  </div>
  <!-- TradingView Widget END -->					</div>
					</div>
				</div>
		
				<div class="col-xl-8 col-12">
                    <!-- TradingView Widget BEGIN -->
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright"><a href="" rel="noopener" target="_blank"><span class="blue-text"></span></a></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
    {
    "feedMode": "market",
    "market": "crypto",
    "colorTheme": "light",
    "isTransparent": false,
    "displayMode": "regular",
    "width": 450,
    "height": 800,
    "locale": "en"
  }
    </script>
  </div>
  <!-- TradingView Widget END -->
<!-- TradingView Widget END -->
					
					
				</div>
				
			
			</div>
        </section>
        <section class="content">
			<div class="row">
			  <div class="col-lg-12 col-12">
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Latest Transactions</h4>
					</div>
					<div class="box-body">
						<div class="table-responsive">
							<table class="table no-margin table-hover">
							  <thead>					
								<tr class="bg-dark">
								  <th>Transaction ID</th>
								  <th>Amount</th>
								  <th>Payment Method</th>
								  <th>Coin/Currency</th>
								  <th>Time</th>
								  <th>Status</th>
								</tr>
							  </thead>
							 
							  <tbody>
								<tr>
								  <td>
									<a href="#" class="text-primary hover-primary">
									  2223sdf2324234
									</a>
									
								  </td>
								  <td>$1000</td>
								<td>Cryptocurrency</td>
								<td>BTC</td>

								  <td>
									<time>23/4/22</time>
								  </td>
								  <td>CONFIRM</td>
								</tr>
							   <tr>
								  <td>
									<a href="#" class="text-primary hover-primary">
									  6723sdf2324234
									</a>
									
								  </td>
								  <td>$7000</td>
								<td>PayStack</td>
								<td>NGN</td>

								  <td>
									<time>30/4/22</time>
								  </td>
								  <td>CONFIRM</td>
								</tr>
							
							  </tbody>
	
							</table>
						</div>
					</div>
				  </div>
			  </div>
			  
		  </div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
<footer class="main-footer">
    
	  &copy; 2022 <a href="">Paylege</a>. All Rights Reserved.
  </footer>

  
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
	

	
	
	<!-- Page Content overlay -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="https://use.fontawesome.com/58fc6dfa37.js"></script>
<!-- Vendor JS -->
<script src="assets/js/vendors.min.js"></script>
<script src="assets/js/pages/chat-popup.js"></script>
<script src="assets/icons/feather-icons/feather.min.js"></script>	

<script src="assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
<script src="www.amcharts.com/lib/4/core.js"></script>
<script src="www.amcharts.com/lib/4/charts.js"></script>
<script src="www.amcharts.com/lib/4/themes/animated.js"></script>
<script src="assets/vendor_components/Web-Ticker-master/jquery.webticker.min.js"></script>	

<!-- Crypto Admin App -->
<script src="assets/js/template.js"></script>
<script src="assets/js/pages/dashboard5.js"></script>


</body>

</html>