	<!-- Breadcrumb -->
	<div class="container">
		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="index.html" class="breadcrumb-item f1-s-3 cl9">
					Beranda
				</a>

				<a href="category-02.html" class="breadcrumb-item f1-s-3 cl9">
					Category
				</a>

				<span class="breadcrumb-item f1-s-3 cl9">
					Energi
				</span>
			</div>

			<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
				<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
				<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
					<i class="zmdi zmdi-search"></i>
				</button>
			</div>
		</div>
	</div>

	<!-- Page heading -->
	<div class="container p-t-4 p-b-40">
		<h2 class="f1-l-1 cl2">
			<?php echo $this->m_kategori->getKategoriByID($id_kategori)->kategori_nama ?>
		</h2>
	</div>
		
	<!-- Feature post -->
	<section class="bg0">
		<div class="container">
			<div class="row m-rl--1">
				<div class="col-md-6 p-rl-1 p-b-2">
					<?php foreach (array_slice($artikel, 0,1) as $k) { ?>
					<div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url(<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>);">
						<a href="<?php echo site_url('Artikel/detail/'.$k->id) ?>" class="dis-block how1-child1 trans-03"></a>

						<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
							<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
								<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
							</a>

							<h3 class="how1-child2 m-t-14 m-b-10">
								<a href="<?php echo site_url('Artikel/detail/'.$k->id) ?>" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
									<?php echo $k->judul ?>
								</a>
							</h3>

							<span class="how1-child2">
								<span class="f1-s-4 cl11">
									<?php echo $k->penulis ?>
								</span>

								<span class="f1-s-3 cl11 m-rl-3">
									-
								</span>

								<span class="f1-s-3 cl11">
									Feb 16
								</span>
							</span>
						</div>
					</div>
				<?php } ?>
				</div>

				<div class="col-md-6 p-rl-1">
					<div class="row m-rl--1">
						<?php foreach (array_slice($artikel, 2,4) as $k) { ?>
						<div class="col-sm-6 p-rl-1 p-b-2">
							<div class="bg-img1 size-a-14 how1 pos-relative" style="background-image: url(<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>);">
								<a href="<?php echo site_url('Artikel/detail/'.$k->id) ?>" class="dis-block how1-child1 trans-03"></a>

								<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
									<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
										<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
									</a>

									<h3 class="how1-child2 m-t-14">
										<a href="blog-detail-01.html" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
											<?php echo $k->judul ?>
										</a>
									</h3>
								</div>
							</div>
						</div>
					<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Post -->
	<section class="bg0 p-t-70 p-b-55">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-80">
					<div class="row">
						<?php foreach (array_slice($artikel, 6) as $k) { ?>
						<div class="col-sm-6 p-r-25 p-r-15-sr991">
							<!-- Item latest -->	
							<div class="m-b-45">
								<a href="<?php echo site_url('Artikel/detail/'.$k->id) ?>l" class="wrap-pic-w hov1 trans-03">
									<img style="width: 350px;height: 200px" src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
								</a>

								<div class="p-t-16">
									<h5 class="p-b-5">
										<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
											<?php echo $k->judul ?>
										</a>
									</h5>

									<span class="cl8">
										<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
											by <?php echo $k->penulis ?>
										</a>

										<span class="f1-s-3 m-rl-3">
											<i class="far fa-eye"> <?php echo $k->viewers ?></i>
										</span>

										<span class="f1-s-3">
											Feb 18
										</span>
									</span>
								</div>
							</div>
						</div>
					<?php } ?>
					</div>

					<!-- Pagination -->
					<!-- <div class="flex-wr-s-c m-rl--7 p-t-15">
						<a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active">1</a>
						<a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7">2</a>
					</div> -->
				</div>

				<div class="col-md-10 col-lg-4 p-b-80">
					<div class="p-l-10 p-rl-0-sr991">							

						<!-- Most Popular -->
						<div class="p-b-23">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Most Popular
								</h3>
							</div>

							<ul class="p-t-35">
								<?php $no = 1;
								 foreach(array_slice($popular, 0, 4) as $a ) { ?>
									<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										<?php
										echo $no;
											$no++;
										 ?>
									</div>

									<a href="<?php echo site_url('Artikel/detail/'.$a->id) ?>" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										<?php echo $a->judul; ?>
									</a>
								</li>
								<?php } ?>
								
							</ul>
						</div>

						<!--  -->
						<div class="flex-c-s p-b-50">
							<a href="#">
								<img class="max-w-full" src="<?php echo base_url(); ?>assets/template/images/icons/sidebar-ads.jpg" alt="IMG">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>