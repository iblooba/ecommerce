<!-- NAVBAR -->
<nav class="navbar navbar-main navbar-default nav-V2" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index-v3.html"><img src="img/logo.png" alt="logo"></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown active">
					<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
					<ul class="dropdown-menu dropdown-menu-left">
						<li><a href="<?php echo e(url('/home/show')); ?>">หน้าแรกมีข้อมูล</a></li>
						<li><a href="index-v2.html">Home Classic</a></li>
						<li class="active"><a href="index-v3.html">Home Deals</a></li>
					</ul>
				</li>
				<li class="dropdown megaDropMenu">
					<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true" aria-expanded="false">Shop</b></a>
					<ul class="dropdown-menu row">
						<li class="col-sm-3 col-xs-9">
							<ul class="list-unstyled">
								<li>Products Grid View</li>
								<li><a href="product-grid-left-sidebar.html">Products Sidebar Left</a></li>

							</ul>
						</li>

						<li class="col-sm-3 col-xs-9">
							<ul class="list-unstyled">
								<li>Checkout</li>
								<li><a href="checkout-step-1.html">Step 1 - Address</a></li>

							</ul>
						</li>

					</ul>
				</li>
				<li class="dropdown">
					<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">pages</a>
					<ul class="dropdown-menu dropdown-menu-left">
						<li><a href="about-us.html">About Us</a></li>

					</ul>
				</li>
			
			</ul>
		</div><!-- /.navbar-collapse -->

		<div class="dropdown cart-dropdown">
			<a href="cart-page.html" class="dropdown-toggle shop-cart" data-toggle="dropdown">
				<i class="fa fa-shopping-cart"></i>
				<span class="badge">3</span>
			</a>
			<ul class="dropdown-menu dropdown-menu-right">
				<li>Item(s) in your cart</li>
				<li>
					<a href="single-product.html">
						<div class="media">
							<img class="media-left media-object" src="img/home/cart-items/cart-item-01.jpg" alt="cart-Image">
							<div class="media-body">
								<h5 class="media-heading">INCIDIDUNT UT <br><span>2 X $199</span></h5>
							</div>
						</div>
					</a>
				</li>
				<li>
					<a href="single-product.html">
						<div class="media">
							<img class="media-left media-object" src="img/home/cart-items/cart-item-01.jpg" alt="cart-Image">
							<div class="media-body">
								<h5 class="media-heading">INCIDIDUNT UT <br><span>2 X $199</span></h5>
							</div>
						</div>
					</a>
				</li>
				<li>
					<div class="btn-group" role="group" aria-label="...">
						<button type="button" class="btn btn-default" onclick="location.href='cart-page.html';">Shopping Cart</button>
						<button type="button" class="btn btn-default" onclick="location.href='checkout-step-1.html';">Checkout</button>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>
