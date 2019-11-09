<!-- Breadcrumb -->
<!-- 	<div class="container">
	<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
		<div class="f2-s-1 p-r-30 m-tb-6">
			<a href="index.html" class="breadcrumb-item f1-s-3 cl9">
				Home 
			</a>

			<span class="breadcrumb-item f1-s-3 cl9">
				Blog
			</span>
		</div>

		<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
			<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
			<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
				<i class="zmdi zmdi-search"></i>
			</button>
		</div>
	</div>
</div> -->

	<!-- Page heading -->
	<div class="container p-t-4 p-b-40 p-tb-50">
		<h2 class="f1-l-1 cl2">
			<?php echo $this->m_kategori->getSubByID($id_subkategori)->subkategori_nama ?>
		</h2>
	</div>

	<!-- Post -->
	<section class="bg0 p-b-55">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-80">
					<div class="p-r-10 p-r-0-sr991">
						<div class="m-t--40 p-b-40">
							<?php foreach (array_slice($artikel, 0,6) as $k) { ?>
							<!-- Item post -->
							<div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
								<a href="<?php echo site_url('Artikel/detail/'.$k->slug) ?>" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
									<img style="height: 500px;width: 500px" src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
								</a>

								<div class="size-w-9 w-full-sr575 m-b-25">
									<h5 class="p-b-12">
										<a href="<?php echo site_url('Artikel/detail/'.$k->slug) ?>" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
											<?php echo $k->judul ?> 
										</a>
									</h5>

									<div class="cl8 p-b-18">
										

										<span class="f1-s-3">
											<?php //$d=strtotime($k->tanggal_dibuat);
												//echo date("M-d", $d); ?>
										</span>
									</div>

									<p class="f1-s-1 cl6 p-b-24">
										<?php 	echo substr($k->isi,60,110); ?>
									</p>

									<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-1 cl9 hov-cl10 trans-03">
										Read More
										<i class="m-l-2 fa fa-long-arrow-alt-right"></i>
									</a>
								</div>
							</div>
							<?php } ?>

							</div>

						<a href="#" class="flex-c-c size-a-13 bo-all-1 bocl11 f1-m-6 cl6 hov-btn1 trans-03">
							Load More
						</a>
					</div>
				</div>

				<div class="col-md-10 col-lg-4 p-b-80">
					<div class="p-l-10 p-rl-0-sr991">							


						<!--  -->
						<div class="flex-c-s p-b-50">
							<a href="#">
								<img class="max-w-full" src="<?php echo base_url(); ?>assets/template/images/icons/sidebar-ads.jpg" alt="IMG">
							</a>
						</div>
						
						<!-- Tag -->
<!-- 						<div>
	<div class="how2 how2-cl4 flex-s-c m-b-30">
		<h3 class="f1-m-2 cl3 tab01-title">
			Tags
		</h3>
	</div>

	<div class="flex-wr-s-s m-rl--5">
		<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
			Fashion
		</a>

		<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
			Lifestyle
		</a>

		<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
			Denim
		</a>

		<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
			Streetstyle
		</a>

		<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
			Crafts
		</a>

		<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
			Magazine
		</a>

		<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
			News
		</a>

		<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
			Blogs
		</a>
	</div>	
</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>