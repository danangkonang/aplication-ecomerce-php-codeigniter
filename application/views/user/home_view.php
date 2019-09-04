<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Divisima | eCommerce Template</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-horizon/0.1.1/bootstrap-horizon.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"/>
	<!-- corousel -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.corousel.css"/>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css"/>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.produk.css"/>
	
	<title>ecomerce</title>
	
	
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="nama-toko col-lg-2 col-md-3 text-center text-lg-left">
						<!-- logo -->
						<a href="./index.html" class="site-logo mt-2">
							<span class="h4">sepia mart</span>
						</a>
					</div>
					<div class="form-pencarian col-xl-6 col-lg-5 col-md-6">
						<form class="header-search-form">
							<input type="text" placeholder="Search ...." id="pencarian">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5 col-md-3">
						
						<span class="icon-logo ">
								<i class="fas fa-2x fa-h-square"></i>
						</span>
							
						<div class="user-panel mt-2">
							
							<div class="up-item pencarian">
								<a href="<?= site_url('produk/pencarian') ?>">
								<i class="fa fa-search"></i>
								</a>
							</div>
							
							<?php if( $this->session->userdata('id')){ ?>
							<div class="up-item">
								<div class="shopping-card">
									<a href="<?php echo site_url('user') ?>">
									<i class="far fa-user notifikasi-profil"></i>
									<!--span>10</span-->
									</a>
								</div>
							</div>
							<?php } ?>
							
							<div class="up-item">
								<div class="shopping-card">
									<a href="<?php echo site_url('keranjang') ?>">
									<i class="fas fa-shopping-bag notifikasi-keranjang"></i>
									<!--span>0</span-->
									</a>
								</div>
							</div>
							
							<div class="up-item menu-toggle" id="menu-toggle">
								<i class="fa fa-bars"></i>
								<!--a href="#">Sign</a-> In or <-a href="#">Create Account<-/a-->
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</header>
	<!-- Header section end -->
	<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav"><!--667-->
					<!-- NAV -->
					<ul class="main-nav nav-337 navbar-nav-337">
						<li class="active"><a href="#">Home</a></li>
						<li class=""><a href="<?= site_url('produk/paling_laku') ?>">Paling laku</a></li>
						<li><a href="#">Kategori</a></li>
						<li><a href="#">Bantuan</a></li>
						<?php if($this->session->userdata('level')== 1){
						echo '
						<li><a href="'.site_url('admin').'">admin</a></li>';
						} ?>
						<?php  if($this->session->userdata('id')){
						echo '<li><a href="'.site_url('logout').'">Logout</a></li>';
							} else{
						echo '<li><a href="'.site_url('login').'">Login</a></li>';
						} ?>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
		
		<div class="clearfix"></div>
		
		<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="<?php echo base_url() ?>/assets/images/corousel/bg.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>marhaban ya</span>
							<h2>romadhon</h2>
							<!--p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p-->
							<!--a href="#" class="site-btn sb-line">DISCOVER</a-->
							<!--a href="#" class="site-btn sb-white">ADD TO CART</a-->
						</div>
					</div>
					<!--div class="offer-card text-white">
						<span>from</span>
						<h2>$29</h2>
						<p>SHOP NOW</p>
					</div-->
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="<?php echo base_url() ?>/assets/images/corousel/bg-2.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-info">
							<!--span>ayo</span-->
							<h2 class="text-info">ayo mudik</h2>
							<!--p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p-->
							<!--a href="#" class="site-btn sb-line">DISCOVER</a-->
							<!--a href="#" class="site-btn sb-white">ADD TO CART</a-->
						</div>
					</div>
					<!--div class="offer-card text-white">
						<span>from</span>
						<h2>$29</h2>
						<p>SHOP NOW</p>
					</div-->
				</div>
			</div>
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<!-- Hero section end -->
		
	
		
	<!--produk terbaru-->
    <div class="container-fluid mt-3" id="hasil"></div>
    <!--produk produk-terlaris-->
    <div class="container-fluid" id="produk-terlaris"></div>
    
    <div class="container-fluid">
       <div class="row">
		<div class="col-6">
			<p class="text-left text-dark font-weight-bold">
			untuk anda
			</p>
		</div>
		<div class="col-6">
			<p class="text-right text-info pl-2 font-weight-bold">
			selengkapnya
			</p>
		</div>
	</div>
	</div>
		
	
    <!--produk all-produk-->
    <div class="container-fluid" id="all-produk"></div>
    <!--message-->
        
    <div class="container-fluid text-center" id="load_data_message" ></div>
    
    
    
    
    <!-- Footer section -->
	<section class="footer-section">
		
		<div class="social-links-warp">
			<div class="container">
				
				<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> danang</p>

			</div>
		</div>
	</section>
	<!-- Footer section end -->
    
	<!--====== Javascripts & Jquery ======-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
	<!-- corousel -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>
	<?php if($this->session->userdata('id')){ ?>
		<script src="<?php echo base_url('assets/js/cek.notifikasi.js')?>" ></script>
	<?php } ?>
	<script>
		var url = "<?php echo site_url()?>";
	
        $('#menu-toggle').on('click', function () {
            $('#responsive-nav').toggleClass('active');
            
        });
	
        $(document).ready(function(){
            load_terbaru();
            load_terlaris();
            load_all();
        });
	
	function load_terbaru(){
		$.ajax({
			url: url+"product/new_products",
			success:function(response) {
				$('#hasil').html(response);
				}
			});
		}
		
	function load_terlaris(){
		$.ajax({
			url: url+"product/booming_products",
			success:function(response) {
				$('#produk-terlaris').html(response);
				}
			});
		}
		
	function load_all(){
		var limit = 6;
		var start = 0;
		var action = 'inactive';
		
		function lazzy_loader(){
			//$('#load_data_message').html('<div class="loader2"></div>');
			$('#load_data_message').html('<i class="fas fa-sync-alt fa-spin"></i>');
			}
		
		lazzy_loader(limit);
		
		function load_data(limit, start){
			$.ajax({
				url: url+"product/get_products"+limit+'/'+start,
				success:function(data) {
					if(data == '<div class="row"></div>'){
						//$('#load_data_message').html('<footer class="py-5 bg-dark"><div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p></div></footer>');
						$('#load_data_message').addClass('d-none');
						action = 'active';
						}else{
							$('#all-produk').append(data);
							$('#load_data_message').html("");
							action = 'inactive';
							}
						}
				});
			}
			
		if(action == 'inactive') {
			action = 'active';
			load_data(limit, start);
			}
		
		$(window).scroll(function(){
			if($(window).scrollTop() + $(window).height() > $("#all-produk").height() && action == 'inactive'){
				lazzy_loader();
				action = 'active';
				start = start + limit;
				setTimeout(function(){
					load_data(limit, start);
					}, 1000);
				}
			});
			
		}
		
	$(function(){
            $("#pencarian").autocomplete({
                minLength: 1,
                delay : 400,
                source: function(request, response) { 

                    jQuery.ajax({
                       url:      "http://localhost:8080/ecomerce/produk/cari_barang",
                       data:    {
                                    keyword : request.term
                                },
                       dataType: "json",
                       success: function(data){
                            response(data);
                        }   
                    })
                },
                select:  function(e, ui){
                    var na = ui.item.nama;
                    $("#pencarian").val(na);
                    
                    return false;
                }
            })
            .data( "ui-autocomplete" )._renderItem = function( ul, item ) {
               return $( "<li>" )
               .append( "<a>" + item.nama + "</a>" )
               .appendTo( ul );
            };
        });
        

	</script>

	</body>
</html>
