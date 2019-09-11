<?php error_reporting(0) ?>

<body class="animsition">
	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="topbar">
				<div class="content-topbar container h-100">
					<div class="left-topbar">

						<a href="<?php echo site_url('About') ?>" class="left-topbar-item">
							About
						</a>

						<a href="#" class="left-topbar-item">
							Contact
						</a>

						<a href="<?php echo site_url('ADM') ?>" class="left-topbar-item">
							Log in
						</a>
					</div>

					<!-- <div class="right-topbar">
						<a href="https://www.facebook.com/teknonomi/">
							<i class="fab fa-facebook-f"></i>
						</a>
					
						<a href="https://twitter.com/teknonomi1">
							<i class="fab fa-twitter"></i>
						</a>
					
						<a href="https://www.instagram.com/teknonomi/?hl=id">
							<i class="fab fa-instagram"></i>
						</a>
					</div> -->
				</div>
			</div>

			<!-- Header Mobile -->
			<div class="wrap-header-mobile">
				<!-- Logo moblie -->		
				<div class="logo-mobile">
					<a href="index.html"><img style="width: 60%" src="<?php echo base_url(); ?>assets/template/images/icons/teknonomi.bmp" alt="IMG-LOGO"></a>
				</div>

				<!-- Button show menu -->
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>

			<!-- Menu Mobile -->
			<div class="menu-mobile">
				<ul class="topbar-mobile">
					<li class="left-topbar">
					</li>

					<li class="left-topbar">
						<a href="<?php echo site_url('About') ?>" class="left-topbar-item">
							About
						</a>

						<a href="#" class="left-topbar-item">
							Contact
						</a>

						<a href="<?php echo site_url('ADM') ?>" class="left-topbar-item">
							Log in
						</a>
					</li>

					<li class="right-topbar">
						<a href="#">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>

						<a href="#">
							<span class="fab fa-youtube"></span>
						</a>
					</li>
				</ul>

				<ul class="main-menu-m">
					<li>
						<a href="<?php echo site_url('Artikel') ?>">Beranda</a>
					</li>

					<li>
						<a href="<?php echo site_url('Artikel') ?>">Video</a>
					</li>
					
					<?php 
						foreach ($kategori as $k) {
						?>
					<li>
						<a href="<?php echo site_url('Artikel/kategori/'.$k->kategori_id) ?>"><?php echo $k->kategori_nama; ?></a>
						<ul class="sub-menu-m">
							<?php 
							if ($k->kategori_nama == 'Perspektif') {
										break;
									}
							$sub = $this->m_kategori->getSubByKategori($k->kategori_id);
							foreach ($sub as $s ) {							 ?>
							<li><a href="<?php echo site_url('Artikel/subkategori/'.$s->subkategori_id) ?>"><?php echo $s->subkategori_nama ?></a></li>
						<?php } ?>
						</ul>
						<span class="arrow-main-menu-m">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
					</li>
				<?php } ?>
				</ul>
			</div>
			
			<!--  -->
			<div class="wrap-logo container">
				<!-- Logo desktop -->		
				<div class="logo">
					<a href="index.html"><img src="<?php echo base_url(); ?>assets/template/images/icons/teknonomi.bmp" alt="LOGO"></a>
				</div>	

				<!-- Banner -->
				<div class="banner-header">
					<a href="#"><img src="<?php echo base_url(); ?>assets/template/images/icons/banner-ad.jpg" alt="IMG"></a>
				</div>
			</div>	
			
			<!--  -->
			<div class="wrap-main-nav">
				<div class="main-nav">
					<!-- Menu desktop -->
					<nav class="menu-desktop">
						<a class="logo-stick" href="index.html">
							<img src="<?php echo base_url(); ?>assets/template/images/icons/teknonomi.bmp" alt="LOGO">
						</a>

						<ul class="main-menu">
							<li class="">
								<a href="<?php echo site_url('Artikel') ?>">Beranda</a>
							</li>
							<li>
								<a href="#">Video</a>
							</li>
							<?php foreach ($kategori as $k) { ?>
							<li>
								<a href="<?php echo site_url('Artikel/kategori/'.$k->kategori_id) ?>"><?php echo $k->kategori_nama; ?></a>
								<ul class="sub-menu">
									<?php 
									if ($k->kategori_nama == 'Perspektif') {
										break;
									}
									$sub = $this->m_kategori->getSubByKategori($k->kategori_id);
									foreach ($sub as $s ) {
									 ?>
									<li><a href="<?php echo site_url('Artikel/subkategori/'.$s->subkategori_id) ?>"><?php echo $s->subkategori_nama ?></a></li>
								<?php } ?>
								</ul>
							</li>
						<?php } ?>
							
						</ul>
					</nav>
				</div>
			</div>	
		</div>
	</header>