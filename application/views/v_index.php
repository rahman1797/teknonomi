	<!-- Headline -->
	<div class="container">
		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
				<span class="text-uppercase cl2 p-r-8">
					Trending Now:
				</span>

				<span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown" data-out="fadeOutDown">
					<span class="dis-inline-block slide100-txt-item animated visible-false">
						Teknonomi Under Construction
					</span>
					
					<span class="dis-inline-block slide100-txt-item animated visible-false">
						Teknonomi Under Construction
					</span>

					<span class="dis-inline-block slide100-txt-item animated visible-false">
						Teknonomi Under Construction
					</span>
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
		
	<!-- Feature post -->
	<section class="bg0">
		<div class="container">
			<div class="row m-rl--1">
				<?php foreach (array_slice($mostpopular, 0,1) as $k) { ?>
				<div class="col-md-6 p-rl-1 p-b-2">
					<div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url(<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>);">
						<a href="<?php echo site_url('artikel/detail/'.$this->m_artikel->getMostPopular()->id) ?>" class="dis-block how1-child1 trans-03"></a>

						<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
							<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
								<?php echo  $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
							</a>

							<h3 class="how1-child2 m-t-14 m-b-10">
								<a href="<?php echo site_url('artikel/detail/'.$this->m_artikel->getArtikelByID('1')->id) ?>" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
									<?php echo $k->judul ?>
								</a>
							</h3>

							<span class="how1-child2">
								<span class="f1-s-4 cl11">
									<?php echo $k->penulis ?>
								</span>

								<span class="f1-s-3 cl11 m-rl-3">
									<i class="far fa-eye"> <?php echo $k->viewers ?></i>
								</span>

								<span class="f1-s-3 cl11">
									<i class="far fa-calendar-alt"> <?php echo $k->tanggal_dibuat ?></i>
								</span>
							</span>
						</div>
					</div>
				</div>
			<?php } 
			?>
				<div class="col-md-6 p-rl-1">
					<div class="row m-rl--1">
						<?php foreach (array_slice($mostpopular, 1,1) as $k) { ?>
						<div class="col-12 p-rl-1 p-b-2">
							<div class="bg-img1 size-a-4 how1 pos-relative" style="background-image: url(<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>);">
								<a href="<?php echo site_url('artikel/detail/'.$this->m_artikel->getArtikelByID('2')->id) ?>l" class="dis-block how1-child1 trans-03"></a>

								<div class="flex-col-e-s s-full p-rl-25 p-tb-24">
									<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
										<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
									</a>

									<h3 class="how1-child2 m-t-14">
										<a href="<?php echo site_url('artikel/detail/'.$k->id) ?>" class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03">
											<?php echo $k->judul ?>
										</a>
									</h3>
								</div>
							</div>
						</div>
						<?php }
						foreach (array_slice($mostpopular, 2,2) as $k) {
						?>
						<div class="col-sm-6 p-rl-1 p-b-2">
							<div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url(<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>);">
								<a href="<?php echo site_url('artikel/detail/'.$k->id) ?>" class="dis-block how1-child1 trans-03"></a>

								<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
									<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
										<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
									</a>

									<h3 class="how1-child2 m-t-14">
										<a href="<?php echo site_url('artikel/detail/'.$k->id) ?>" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
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
	<section class="bg0 p-t-70">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8">
					<div class="p-b-20">
						<!-- Energi -->
						<div class="tab01 p-b-20">
							<div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
								<!-- Brand tab -->
								<h3 class="f1-m-2 cl12 tab01-title">
									Energi
								</h3>

								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#tab1-1" role="tab">All</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab1-2" role="tab">Migas</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab1-3" role="tab">EBT</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab1-4" role="tab">Konservasi</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab1-5" role="tab">Listrik</a>
									</li>

									<li class="nav-item-more dropdown dis-none">
										<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
											<i class="fa fa-ellipsis-h"></i>
										</a>

										<ul class="dropdown-menu">
											
										</ul>
									</li>
								</ul>

								<!--  -->
								<a href="<?php echo site_url('Artikel/kategori/1') ?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
									View all
									<i class="fs-12 m-l-5 fa fa-caret-right"></i>
								</a>
							</div>
								

							<!-- Tab panes Energi -->
							<div class="tab-content p-t-35">
								<!-- - -->
								<div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
									<div class="row">
										<?php $popularByKategori = $this->m_artikel->getPopularByKategoriVer2('1');
										foreach (array_slice($popularByKategori, 0,1) as $k) { ?>
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="<?php echo site_url('Artikel/detail/'.$k->id) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('Artikel/detail/'.$k->id) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $k->judul?>  
														</a>
													</h5>

													<span class="cl8">
														<a href="<?php echo site_url('Artikel/detail/'.$k->id) ?>" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?> 
														</a>

														<span class="f1-s-3 m-rl-3">
															<i class="far fa-eye"> <?php echo $k->viewers ?> </i>
														</span>

														<span class="f1-s-3">
															<i class="far fa-calendar-alt"> <?php echo $k->tanggal_dibuat ?> </i>
														</span>
													</span>
												</div>
											</div>
										</div>
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php } 
											$popularByKategori = $this->m_artikel->getPopularByKategoriVer2('1');
											foreach (array_slice($popularByKategori, 1,3) as $k) {?>
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo site_url('Artikel/detail/'.$k->id) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img style="width: 100px;height: 70px" src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('Artikel/detail/'.$k->id) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														<span class="f1-s-3 m-rl-3">
															<i class="far fa-eye"> <?php echo $k->viewers ?></i>
														</span>

														<span class="f1-s-3">
															<i class="far fa-calendar-alt"> <?php echo $k->tanggal_dibuat ?></i>
														</span>
													</span>
												</div>
											</div>
											<?php } ?>
										</div>
									</div>
								</div>

								<!-- Migas - Energi -->
								<div class="tab-pane fade" id="tab1-2" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $this->m_artikel->getMostPopularBySub('1')->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('Artikel/detail/'.$this->m_artikel->getMostPopularBySub('1')->id) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $this->m_artikel->getMostPopularBySub('1')->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($this->m_artikel->getMostPopularBySub('1')->id_subkategori)->subkategori_nama ?>
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 18
														</span>
													</span>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
											$maxviewers = $this->m_artikel->getMostPopularBySub('1')->viewers;
											$popularBySub = $this->m_artikel->getPopularBySub('1',$maxviewers);
											foreach (array_slice($popularBySub, 0,2) as $k) { ?>
											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('Artikel/detail/'.$k->id) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 12
														</span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>
									</div>
								</div>

								<!-- EBT - Energi -->
								<div class="tab-pane fade" id="tab1-3" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $this->m_artikel->getMostPopularBySub('2')->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('Artikel/detail/'.$this->m_artikel->getMostPopularBySub('2')->id) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $this->m_artikel->getMostPopularBySub('2')->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($this->m_artikel->getMostPopularBySub('2')->id_subkategori)->subkategori_nama ?>
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 18
														</span>
													</span>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/noimage.png" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
															Donec metus orci, malesuada et lectus vitae
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															Celebrity
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 12
														</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Konservasi - Energi -->
								<div class="tab-pane fade" id="tab1-4" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $this->m_artikel->getMostPopularBySub('3')->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('Artikel/detail/'.$this->m_artikel->getMostPopularBySub('3')->id) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $this->m_artikel->getMostPopularBySub('2')->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($this->m_artikel->getMostPopularBySub('3')->id_subkategori)->subkategori_nama ?>
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 18
														</span>
													</span>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/noimage.png" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
															Donec metus orci, malesuada et lectus vitae
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															Celebrity
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 12
														</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Listrik - Energi -->
								<div class="tab-pane fade" id="tab1-5" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $this->m_artikel->getMostPopularBySub('4')->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('Artikel/detail/'.$this->m_artikel->getMostPopularBySub('4')->id) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $this->m_artikel->getMostPopularBySub('1')->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($this->m_artikel->getMostPopularBySub('4')->id_subkategori)->subkategori_nama ?>
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 18
														</span>
													</span>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
											$maxviewers = $this->m_artikel->getMostPopularBySub('4')->viewers;
											$popularBySub = $this->m_artikel->getPopularBySub('4',$maxviewers);
											foreach (array_slice($popularBySub, 0,2) as $k) { ?>
											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('Artikel/detail/'.$k->id) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 12
														</span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>
									</div>
								</div>

							</div>
						</div>

						<!-- Jasa -->
						<div class="tab01 p-b-20">
							<div class="tab01-head how2 how2-cl2 bocl12 flex-s-c m-r-10 m-r-0-sr991">
								<!-- Brand tab -->
								<h3 class="f1-m-2 cl13 tab01-title">
									Jasa
								</h3>

								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#tab2-1" role="tab">All</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab2-2" role="tab">Keuangan</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab2-3" role="tab">Medis</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab2-4" role="tab">Transportasi</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab2-5" role="tab">Logistik</a>
									</li>

									<li class="nav-item-more dropdown dis-none">
										<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
											<i class="fa fa-ellipsis-h"></i>
										</a>

										<ul class="dropdown-menu">
											
										</ul>
									</li>
								</ul>

								<!--  -->
								<a href="<?php echo site_url('Artikel/kategori/2') ?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
									View all
									<i class="fs-12 m-l-5 fa fa-caret-right"></i>
								</a>
							</div>
								

							<!-- Tab panes Jasa-->
							<div class="tab-content p-t-35">
								<!-- most popular jasa -->
								<div class="tab-pane fade show active" id="tab2-1" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="<?php echo site_url('Artikel/detail/'.$this->m_artikel->getMostPopularByKategori('2')->id) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $this->m_artikel->getMostPopularByKategori('2')->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('Artikel/detail/'.$this->m_artikel->getMostPopularByKategori('2')->id) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $this->m_artikel->getMostPopularByKategori('2')->judul?>  
														</a>
													</h5>

													<span class="cl8">
														<a href="<?php echo site_url('Artikel/detail/'.$this->m_artikel->getMostPopularByKategori('2')->id) ?>" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($this->m_artikel->getMostPopularByKategori('2')->id_subkategori)->subkategori_nama ?> 
														</a>

														<span class="f1-s-3 m-rl-3">
															<i class="far fa-eye"> <?php echo $this->m_artikel->getMostPopularByKategori('2')->viewers ?> </i>
														</span>

														<span class="f1-s-3">
															<i class="far fa-calendar-alt"> <?php echo $this->m_artikel->getMostPopularByKategori('2')->tanggal_dibuat ?> </i>
														</span>
													</span>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
											$maxviewers = $this->m_artikel->getMostPopularByKategori('2')->viewers;
											$popularByKategori = $this->m_artikel->getPopularByKategori('2',$maxviewers);
											foreach (array_slice($popularByKategori, 0,3) as $k) {
											?>
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo site_url('Artikel/detail/'.$k->id) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img style="width: 100px;height: 70px" src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('Artikel/detail/'.$k->id) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														<span class="f1-s-3 m-rl-3">
															<i class="far fa-eye"> <?php echo $k->viewers ?></i>
														</span>

														<span class="f1-s-3">
															<i class="far fa-calendar-alt"> <?php echo $k->tanggal_dibuat ?></i>
														</span>
													</span>
												</div>
											</div>
											<?php } ?>
										</div>
									</div>
								</div>

								<!-- keuangan - jasa -->
								<div class="tab-pane fade" id="tab2-2" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $this->m_artikel->getMostPopularBySub('11')->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('Artikel/detail/'.$this->m_artikel->getMostPopularBySub('11')->id) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $this->m_artikel->getMostPopularBySub('11')->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($this->m_artikel->getMostPopularBySub('11')->id_subkategori)->subkategori_nama ?>
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 18
														</span>
													</span>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/noimage.png" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
															Donec metus orci, malesuada et lectus vitae
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															Celebrity
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 12
														</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- medis - jasa -->
								<div class="tab-pane fade" id="tab2-3" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
											$artikel = $this->m_artikel->getPopularBySubVer2('6');
											foreach (array_slice($artikel, 0,1) as $k) { ?>
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 18
														</span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/noimage.png" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
															Donec metus orci, malesuada et lectus vitae
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															Medis
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 17
														</span>
													</span>
												</div>
											</div>
											
										</div>
									</div>
								</div>

								<!-- transportasi - jasa -->
								<div class="tab-pane fade" id="tab2-4" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $this->m_artikel->getMostPopularBySub('12')->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('Artikel/detail/'.$this->m_artikel->getMostPopularBySub('12')->id) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $this->m_artikel->getMostPopularBySub('12')->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($this->m_artikel->getMostPopularBySub('12')->id_subkategori)->subkategori_nama ?>
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 18
														</span>
													</span>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/noimage.png" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
															Donec metus orci, malesuada et lectus vitae
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															Celebrity
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 12
														</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- logistik - jasa -->
								<div class="tab-pane fade" id="tab2-5" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $this->m_artikel->getMostPopularBySub('13')->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('Artikel/detail/'.$this->m_artikel->getMostPopularBySub('11')->id) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $this->m_artikel->getMostPopularBySub('13')->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($this->m_artikel->getMostPopularBySub('13')->id_subkategori)->subkategori_nama ?>
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 18
														</span>
													</span>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/noimage.png" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
															Donec metus orci, malesuada et lectus vitae
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															Celebrity
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 12
														</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Industri -->
						<div class="tab01 p-b-20">
							<div class="tab01-head how2 how2-cl3 bocl12 flex-s-c m-r-10 m-r-0-sr991">
								<!-- Brand tab -->
								<h3 class="f1-m-2 cl14 tab01-title">
									Industri
								</h3>

								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#tab3-1" role="tab">All</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab3-2" role="tab">Aviasi</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab3-3" role="tab">Kapal</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab3-4" role="tab">Militer</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab3-5" role="tab">Pertanian</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab3-6" role="tab">Makanan</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab3-7" role="tab">Pelumas</a>
									</li>

									<li class="nav-item-more dropdown dis-none">
										<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
											<i class="fa fa-ellipsis-h"></i>
										</a>

										<ul class="dropdown-menu">
											
										</ul>
									</li>
								</ul>

								<!--  -->
								<a href="<?php echo site_url('Artikel/kategori/3') ?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
									View all
									<i class="fs-12 m-l-5 fa fa-caret-right"></i>
								</a>
							</div>
								

							<!-- Tab panes -->
							<div class="tab-content p-t-35">
								<!-- most popuplar industri -->
								<div class="tab-pane fade show active" id="tab3-1" role="tabpanel">
									<div class="row">
										<?php 
										$artikel = $this->m_artikel->getPopularByKategoriVer2('3');
										foreach (array_slice($artikel, 0,1) as $k) { ?>
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
													<img style="width: 320px;height: 190px" src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->id) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $k->judul ?> 
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														<span class="f1-s-3 m-rl-3">
															<i class="far fa-eye"> <?php echo $k->viewers ?></i>
														</span>

														<span class="f1-s-3">
															<i class="far fa-calendar-alt"> Feb 18</i>
														</span>
													</span>
												</div>
											</div>
										</div>
										<?php } ?>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
											$artikel = $this->m_artikel->getPopularByKategoriVer2('3');
											foreach (array_slice($artikel, 1,3) as $k) { ?>
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->id) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img style="width: 100px;height: 80px" src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->id) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 17
														</span>
													</span>
												</div>
											</div>
											<?php } ?>
											</div>
									</div>
								</div>

								<!-- - -->
								<div class="tab-pane fade" id="tab3-2" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/template/images/post-15.jpg" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
															You wish lorem ipsum dolor sit amet consectetur 
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															Hotels
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 18
														</span>
													</span>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/template/images/post-16.jpg" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
															Donec metus orci, malesuada et lectus vitae
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															Beachs
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 17
														</span>
													</span>
												</div>
											</div>
											
											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/template/images/post-17.jpg" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
															Donec metus orci, malesuada et lectus vitae
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															Flight
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 16
														</span>
													</span>
												</div>
											</div>

											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/template/images/post-18.jpg" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
															Donec metus orci, malesuada et lectus vitae
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															Culture
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 12
														</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- kapal- industri -->
								<div class="tab-pane fade" id="tab3-3" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/noimage.png" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
															lorem ipsum dolor amet
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															Kapal
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 18
														</span>
													</span>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/template/images/noimage.jpg" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="#" class="f1-s-5 cl3 hov-cl10 trans-03">
															Donec metus orci, malesuada et lectus vitae
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															Medis
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 17
														</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- - -->
								<div class="tab-pane fade" id="tab3-4" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/template/images/post-17.jpg" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
															You wish lorem ipsum dolor sit amet consectetur 
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															Hotels
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 18
														</span>
													</span>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/template/images/post-18.jpg" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
															Donec metus orci, malesuada et lectus vitae
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															Beachs
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 17
														</span>
													</span>
												</div>
											</div>
											
											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/template/images/post-14.jpg" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
															Donec metus orci, malesuada et lectus vitae
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															Flight
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 16
														</span>
													</span>
												</div>
											</div>

											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/template/images/post-15.jpg" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
															Donec metus orci, malesuada et lectus vitae
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															Culture
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 12
														</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- - -->
								<div class="tab-pane fade" id="tab3-5" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/template/images/post-18.jpg" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
															You wish lorem ipsum dolor sit amet consectetur 
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															Hotels
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 18
														</span>
													</span>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/template/images/post-17.jpg" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
															Donec metus orci, malesuada et lectus vitae
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															Beachs
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 17
														</span>
													</span>
												</div>
											</div>
											
											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/template/images/post-16.jpg" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
															Donec metus orci, malesuada et lectus vitae
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															Flight
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 16
														</span>
													</span>
												</div>
											</div>

											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/template/images/post-15.jpg" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
															Donec metus orci, malesuada et lectus vitae
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															Culture
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															Feb 12
														</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-10 col-lg-4">
					<div class="p-l-10 p-rl-0-sr991 p-b-20">
						<!--  -->
						<div>
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


						<!--  -->
						<div class="flex-c-s p-t-8">
							<a href="#">
								<img class="max-w-full" src="<?php echo base_url(); ?>assets/template/images/icons/sidebar-ads.jpg" alt="IMG">
							</a>
						</div>
						
						<!--  -->
						<div class="p-t-50">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Stay Connected
								</h3>
							</div>

							<ul class="p-t-35">
								<li class="flex-wr-sb-c p-b-20">
									<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-facebook fs-16 cl0 hov-cl0">
										<span class="fab fa-facebook-f"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										<span class="f1-s-8 cl3 p-r-20">
											
										</span>

										<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											
										</a>
									</div>
								</li>

								<li class="flex-wr-sb-c p-b-20">
									<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-twitter fs-16 cl0 hov-cl0">
										<span class="fab fa-twitter"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										<span class="f1-s-8 cl3 p-r-20">
											
										</span>

										<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											
										</a>
									</div>
								</li>

								<li class="flex-wr-sb-c p-b-20">
									<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-youtube fs-16 cl0 hov-cl0">
										<span class="fab fa-youtube"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										<span class="f1-s-8 cl3 p-r-20">
											
										</span>

										<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											
										</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Banner -->
	<div class="container">
		<div class="flex-c-c">
			<a href="#">
				<img class="max-w-full" src="<?php echo base_url(); ?>assets/template/images/icons/banner-ad.jpg" alt="IMG">
			</a>
		</div>
	</div>

	<!-- Latest -->
	<section class="bg0 p-t-60 p-b-35">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-20">
					<div class="how2 how2-cl4 flex-s-c m-r-10 m-r-0-sr991">
						<h3 class="f1-m-2 cl3 tab01-title">
							Recent Articles
						</h3>
					</div>

					<div class="row p-t-35">
						<?php foreach(array_slice($recent, 0, 4) as $a ) { ?>
						<div class="col-sm-6 p-r-25 p-r-15-sr991">
							<!-- Item latest -->	
							<div class="m-b-45">
								<a href="<?php echo site_url('artikel/detail/'.$a->id) ?>" class="wrap-pic-w hov1 trans-03">
									<img style="width: 300px;height: 200px" src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $a->foto ?>" alt="IMG">
								</a>

								<div class="p-t-16">
									<h5 class="p-b-5">
										<a href="<?php echo site_url('artikel/detail/'.$a->id) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
											<?php echo $a->judul ?>
										</a>
									</h5>

									<span class="cl8">
										<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
											oleh <?php echo $a->penulis ?>
										</a>

										<span class="f1-s-3 m-rl-3">
											-
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
					</div>

				<div class="col-md-10 col-lg-4">
					<div class="p-l-10 p-rl-0-sr991 p-b-20">
						<!-- Video -->
						<div class="p-b-55">
							<div class="how2 how2-cl4 flex-s-c m-b-35">
								<h3 class="f1-m-2 cl3 tab01-title">
									Featured Video
								</h3>
							</div>

							<div>
								<div class="wrap-pic-w pos-relative">
									<img src="<?php echo base_url(); ?>assets/template/images/video-01.jpg" alt="IMG">

									<button class="s-full ab-t-l flex-c-c fs-32 cl0 hov-cl10 trans-03" data-toggle="modal" data-target="#modal-video-01">
										<span class="fab fa-youtube"></span>
									</button>
								</div>

								<div class="p-tb-16 p-rl-25 bg3">
									<h5 class="p-b-5">
										<a href="#" class="f1-m-3 cl0 hov-cl10 trans-03">
											Music lorem ipsum dolor sit amet consectetur 
										</a>
									</h5>

									<span class="cl15">
										<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
											by John Alvarado
										</a>

										<span class="f1-s-3 m-rl-3">
											-
										</span>

										<span class="f1-s-3">
											Feb 18
										</span>
									</span>
								</div>
							</div>	
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
