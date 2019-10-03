<!-- Breadcrumb -->
	<div class="container">
		<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<!-- <a href="index.html" class="breadcrumb-item f1-s-3 cl9">
					Home 
				</a>
				
				<a href="blog-list-01.html" class="breadcrumb-item f1-s-3 cl9">
					Blog 
				</a>
				
				<span class="breadcrumb-item f1-s-3 cl9">
					 Nulla non interdum metus non laoreet nisi tellus eget aliquam lorem pellentesque
				</span> -->
			</div>

			<!-- <div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
				<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
				<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
					<i class="zmdi zmdi-search"></i>
				</button>
			</div> -->
		</div>
	</div>

	<!-- Content -->
	<section class="bg0 p-b-140 p-t-10">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-30">
					<div class="p-r-10 p-r-0-sr991">
						<!-- Blog Detail -->
						<div class="p-b-70">
							<a href="#" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
								<?php echo $this->m_kategori->getSubByID($detail->id_subkategori)->subkategori_nama ?>
							</a>

							<h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
								<?php echo $detail->judul ?>
							</h3>
							
							<div class="flex-wr-s-s p-b-40">
								<span class="f1-s-3 cl8 m-r-15">
									<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
									</a>

									<span class="m-rl-3">-</span>

									<span>
										<!-- <?php //echo $detail->tanggal_dibuat ?> -->
									</span>
								</span>
							</div>

							<div class="wrap-pic-max-w p-b-30">
								<img style="width: 100%" src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $detail->foto ?>" alt="IMG">
							</div>

							<?php echo $detail->isi ?>

							<!-- <p class="f1-s-11 cl6 p-b-25" style="text-align: justify;">
							</p> -->
							<!-- Share -->
							<div class="flex-s-s mt-20">
								<span class="f1-s-12 cl5 p-t-1 m-r-15">
									Share:
								</span>
								
								<div class="flex-wr-s-s size-w-0">
									<a href="#" class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-facebook-f m-r-7"></i>
										Facebook
									</a>

									<a href="#" class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-twitter m-r-7"></i>
										Twitter
									</a>
								</div>
							</div>
						</div>

					</div>
				</div>
				
				<!-- Sidebar -->
				<div class="col-md-10 col-lg-4 p-b-30">
					<div class="p-l-10 p-rl-0-sr991 p-t-70">						

					</div>
				</div>
			</div>
		</div>
	</section>