	<!-- Headline -->
	<div class="container">
		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8" style="margin-top: 15px">
			<div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
				
			</div>

			<!-- <div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
				<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
				<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
					<i class="zmdi zmdi-search"></i>
				</button>
			</div> -->
		</div>
	</div>
		

	<!-- Post -->
	<section class="bg0 p-t-15">
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
												<a href="<?php echo site_url('Artikel/detail/'.$k->slug) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('Artikel/detail/'.$k->slug) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $k->judul?>  
														</a>
													</h5>

													<span class="cl8">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?> 
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3"></span>
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
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img style="width: 100px;height: 70px" src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3"> 
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
											<?php $artikel = $this->m_artikel->getPopularBySubVer2('1');
											foreach (array_slice($artikel, 0,1) as $k) { ?> 
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('Artikel/detail/'.$this->m_artikel->getMostPopularBySub('1')->id) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3">
															 <?php $d=strtotime($k->tanggal_dibuat);
																	echo date("M-d", $d); ?>
														</span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
											$artikel = $this->m_artikel->getPopularBySubVer2('1');
											foreach (array_slice($artikel, 1,3) as $k) {  ?>
											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3">
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
											<?php 
											$artikel = $this->m_artikel->getPopularBySubVer2('2');
											foreach (array_slice($artikel, 0,1) as $k) { ?>
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('Artikel/detail/'.$this->m_artikel->getMostPopularBySub('2')->id) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3"></span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php $artikel = $this->m_artikel->getPopularBySubVer2('2');
											foreach (array_slice($artikel, 1,3) as $k) {  ?>
											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3"></span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>
									</div>
								</div>

								<!-- Konservasi - Energi -->
								<div class="tab-pane fade" id="tab1-4" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
											$artikel = $this->m_artikel->getPopularBySubVer2('3');
											foreach (array_slice($artikel, 0,1) as $k) { ?>
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('Artikel/detail/'.$this->m_artikel->getMostPopularBySub('3')->id) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3"></span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
											$artikel = $this->m_artikel->getPopularBySubVer2('3');
											foreach (array_slice($artikel, 1,3) as $k) { ?>
											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3"></span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>
									</div>
								</div>

								<!-- Listrik - Energi -->
								<div class="tab-pane fade" id="tab1-5" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
											$artikel = $this->m_artikel->getPopularBySubVer2('4');
											foreach (array_slice($artikel, 0,1) as $k) { ?>
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3"></span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php  $artikel = $this->m_artikel->getPopularBySubVer2('4');
											foreach (array_slice($artikel, 1,3) as $k) { ?>
											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3"></span>
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
										<a class="nav-link" data-toggle="tab" href="#tab2-5" role="tab">Infrastruktur</a>
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
											<?php $popularByKategori = $this->m_artikel->getPopularByKategoriVer2('2');
												foreach (array_slice($popularByKategori, 0,1) as $k) { ?>
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $k->judul?>  
														</a>
													</h5>

													<span class="cl8">
														<a href="<?php echo site_url('Artikel/detail/'.$this->m_artikel->getMostPopularByKategori('2')->id) ?>" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?> 
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3">
														</span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php $popularByKategori = $this->m_artikel->getPopularByKategoriVer2('2');
												foreach (array_slice($popularByKategori, 1,3) as $k) { ?>
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img style="width: 100px;height: 70px" src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3">
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
											<?php  $artikel = $this->m_artikel->getPopularBySubVer2('11');
											foreach (array_slice($artikel, 0,1) as $k) { ?>
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3">
															 
														</span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php  $artikel = $this->m_artikel->getPopularBySubVer2('11');
											foreach (array_slice($artikel, 1,3) as $k) { ?>
											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3">
															 
														</span>
													</span>
												</div>
											</div>
										<?php } ?>
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
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3">
															 
														</span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
											$artikel = $this->m_artikel->getPopularBySubVer2('6');
											foreach (array_slice($artikel, 1,3) as $k) { ?>
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3">
															 
														</span>
													</span>
												</div>
											</div>
											<?php } ?>
										</div>
									</div>
								</div>

								<!-- transportasi - jasa -->
								<div class="tab-pane fade" id="tab2-4" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
											$artikel = $this->m_artikel->getPopularBySubVer2('12');
											foreach (array_slice($artikel, 0,1) as $k) { ?>
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3">
															 
														</span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
											$artikel = $this->m_artikel->getPopularBySubVer2('12');
											foreach (array_slice($artikel, 1,3) as $k) { ?>
											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->foto ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3">
															 
														</span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>
									</div>
								</div>
								<!-- Infrastruktur - jasa -->
								<div class="tab-pane fade" id="tab2-5" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
											$artikel = $this->m_artikel->getPopularBySubVer2('13');
											foreach (array_slice($artikel, 0,1) as $k) { ?>
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('Artikel/detail/'.$this->m_artikel->getMostPopularBySub('11')->id) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3">
															 
														</span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php $artikel = $this->m_artikel->getPopularBySubVer2('13');
											foreach (array_slice($artikel, 1,3) as $k) { ?>
											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3">
															 
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

						<!-- industri -->
						<div class="tab01 p-b-20">
							<div class="tab01-head how2 how2-cl3 bocl12 flex-s-c m-r-10 m-r-0-sr991">
								<!-- Brand tab -->
								<h3 class="f1-m-2 cl14 tab01-title">
									Industri
								</h3>

								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<!-- <li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#tab3-1" role="tab">All</a>
									</li>
									
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab3-2" role="tab">Aviasi</a>
									</li>
									
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab3-3" role="tab">Perkapalan</a>
									</li> -->

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
										<a class="nav-link" data-toggle="tab" href="#tab3-7" role="tab">Elektronik</a>
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
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="wrap-pic-w hov1 trans-03">
													<img style="width: 320px;height: 190px" src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $k->judul ?> 
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3">
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
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img style="width: 100px;height: 80px" src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3">
														</span>
													</span>
												</div>
											</div>
											<?php } ?>
											</div>
									</div>
								</div>

								<!-- aviasi - industri -->
								<!-- <div class="tab-pane fade" id="tab3-2" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											Item post	
											<div class="m-b-30">
												<a href="<?php //echo site_url('artikel/detail/'.$k->id) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php //echo base_url(); ?>assets/template/images/post-15.jpg" alt="IMG">
												</a>
								
												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															You wish lorem ipsum dolor sit amet consectetur 
														</a>
													</h5>
								
													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															Hotels
														</a>
								
														  <span class="f1-s-3 m-rl-3">
															
														</span>
								
														<span class="f1-s-3">
															Feb 18
														</span>
													</span>
												</div>
											</div>
										</div>
								
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											Item post	
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/template/images/post-16.jpg" alt="IMG">
												</a>
								
												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															Donec metus orci, malesuada et lectus vitae
														</a>
													</h5>
								
													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															Beachs
														</a>
								
														  <span class="f1-s-3 m-rl-3">
															
														</span>
								
														<span class="f1-s-3">
															Feb 17
														</span>
													</span>
												</div>
											</div>
											
											Item post
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/template/images/post-17.jpg" alt="IMG">
												</a>
								
												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															Donec metus orci, malesuada et lectus vitae
														</a>
													</h5>
								
													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															Flight
														</a>
								
														  <span class="f1-s-3 m-rl-3">
															
														</span>
								
														<span class="f1-s-3">
															Feb 16
														</span>
													</span>
												</div>
											</div>
								
											Item post
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/template/images/post-18.jpg" alt="IMG">
												</a>
								
												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															Donec metus orci, malesuada et lectus vitae
														</a>
													</h5>
								
													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															Culture
														</a>
								
														  <span class="f1-s-3 m-rl-3">
															
														</span>
								
														<span class="f1-s-3">
															Feb 12
														</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div> -->

								<!-- Perkapalan- industri -->
								<!-- <div class="tab-pane fade" id="tab3-3" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											Item post	
											<div class="m-b-30">
												<a href="<?php //echo site_url('artikel/detail/'.$k->id) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php //echo base_url(); ?>assets/images/artikel/noimage.png" alt="IMG">
												</a>
								
												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php //echo site_url('artikel/detail/'.$k->id) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															lorem ipsum dolor amet
														</a>
													</h5>
								
													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															Perkapalan
														</a>
								
														  <span class="f1-s-3 m-rl-3">
															
														</span>
								
														<span class="f1-s-3">
															Feb 18
														</span>
													</span>
												</div>
											</div>
										</div>
								
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											Item post	
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php //echo site_url('artikel/detail/'.$k->id) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php //echo base_url(); ?>assets/images/artikel/noimage.png" alt="IMG">
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
															
														</span>
								
														<span class="f1-s-3">
															Feb 17
														</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div> -->

								<!-- Militer - Industri -->
								<div class="tab-pane fade" id="tab3-4" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php $artikel = $this->m_artikel->getPopularBySubVer2('8');
											foreach (array_slice($artikel, 0,1) as $k) { ?>
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3">
														</span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php $artikel = $this->m_artikel->getPopularBySubVer2('8');
											foreach (array_slice($artikel, 1,3) as $k) { ?>
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/template/images/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3">
															  
														</span>
													</span>
												</div>
											</div>
										<?php } ?>
											
										</div>
									</div>
								</div>

								<!-- pertanian - industri -->
								<div class="tab-pane fade" id="tab3-5" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php $artikel = $this->m_artikel->getPopularBySubVer2('9');
											foreach (array_slice($artikel, 0,1) as $k) { ?>
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3">
															  
														</span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php $artikel = $this->m_artikel->getPopularBySubVer2('9');
											foreach (array_slice($artikel, 1,3) as $k) { ?>
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3">
															  
														</span>
													</span>
												</div>
											</div>
											<?php } ?>
										</div>
									</div>
								</div>
								<!-- makanan - industri -->
								<div class="tab-pane fade" id="tab3-6" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php $artikel = $this->m_artikel->getPopularBySubVer2('10');
											foreach (array_slice($artikel, 0,1) as $k) { ?>
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3">
															  
														</span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php $artikel = $this->m_artikel->getPopularBySubVer2('10');
											foreach (array_slice($artikel, 1,3) as $k) { ?>
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3">
															  
														</span>
													</span>
												</div>
											</div>
											<?php } ?>
										</div>
									</div>
								</div>
								<!-- Elektronik - industri -->
								<div class="tab-pane fade" id="tab3-7" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php $artikel = $this->m_artikel->getPopularBySubVer2('14');
											foreach (array_slice($artikel, 0,1) as $k) { ?>
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3">
															  
														</span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php $artikel = $this->m_artikel->getPopularBySubVer2('14');
											foreach (array_slice($artikel, 1,3) as $k) { ?>
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3">
															  
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

						<!-- TIK -->
						<div class="tab01 p-b-20">
							<div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
								<!-- Brand tab -->
								<h3 class="f1-m-2 cl12 tab01-title">
									Teknologi dan Informasi
								</h3>

								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#tab4-1" role="tab">All</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab4-2" role="tab">Telekomunikasi</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab4-3" role="tab">Siber</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab4-4" role="tab">Gadget</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab4-5" role="tab">Hardware</a>
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
								<a href="<?php echo site_url('Artikel/kategori/5') ?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
									View all
									<i class="fs-12 m-l-5 fa fa-caret-right"></i>
								</a>
							</div>
								

							<!-- Tab panes TIK -->
							<div class="tab-content p-t-35">
								<!-- - -->
								<div class="tab-pane fade show active" id="tab4-1" role="tabpanel">
									<div class="row">
										<?php $popularByKategori = $this->m_artikel->getPopularByKategoriVer2('5');
										foreach (array_slice($popularByKategori, 0,1) as $k) { ?>
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="<?php echo site_url('Artikel/detail/'.$k->slug) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('Artikel/detail/'.$k->slug) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $k->judul?>  
														</a>
													</h5>

													<span class="cl8">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?> 
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3"></span>
													</span>
												</div>
											</div>
										</div>
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php } 
											$popularByKategori = $this->m_artikel->getPopularByKategoriVer2('5');
											foreach (array_slice($popularByKategori, 1,3) as $k) {?>
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img style="width: 100px;height: 70px" src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3"> 
														</span>
													</span>
												</div>
											</div>
											<?php } ?>
										</div>
									</div>
								</div>

								<!-- Telekomunikasi - TIK -->
								<div class="tab-pane fade" id="tab4-2" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php $artikel = $this->m_artikel->getPopularBySubVer2('17');
											foreach (array_slice($artikel, 0,1) as $k) { ?> 
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('Artikel/detail/'.$k->slug) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3">
															 
														</span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
											$artikel = $this->m_artikel->getPopularBySubVer2('17');
											foreach (array_slice($artikel, 1,3) as $k) {  ?>
											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3"></span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>
									</div>
								</div>

								<!-- Siber - TIK -->
								<div class="tab-pane fade" id="tab4-3" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
											$artikel = $this->m_artikel->getPopularBySubVer2('18');
											foreach (array_slice($artikel, 0,1) as $k) { ?>
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('Artikel/detail/'.$this->m_artikel->getMostPopularBySub('2')->id) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3"></span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php $artikel = $this->m_artikel->getPopularBySubVer2('18');
											foreach (array_slice($artikel, 1,3) as $k) {  ?>
											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3"></span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>
									</div>
								</div>

								<!-- Gadget - TIK -->
								<div class="tab-pane fade" id="tab4-4" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
											$artikel = $this->m_artikel->getPopularBySubVer2('19');
											foreach (array_slice($artikel, 0,1) as $k) { ?>
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('Artikel/detail/'.$this->m_artikel->getMostPopularBySub('3')->id) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3"></span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
											$artikel = $this->m_artikel->getPopularBySubVer2('19');
											foreach (array_slice($artikel, 1,3) as $k) { ?>
											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3"></span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>
									</div>
								</div>

								<!-- Hardware - TIK -->
								<div class="tab-pane fade" id="tab4-5" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php 
											$artikel = $this->m_artikel->getPopularBySubVer2('20');
											foreach (array_slice($artikel, 0,1) as $k) { ?>
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3"></span>
													</span>
												</div>
											</div>
										<?php } ?>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php  $artikel = $this->m_artikel->getPopularBySubVer2('20');
											foreach (array_slice($artikel, 1,3) as $k) { ?>
											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url(); ?>assets/images/artikel/<?php echo $k->foto ?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo site_url('artikel/detail/'.$k->slug) ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $k->judul ?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $this->m_kategori->getSubByID($k->id_subkategori)->subkategori_nama ?>
														</a>

														  <span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3"></span>
													</span>
												</div>
											</div>
										<?php } ?>
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
									<a href="https://www.facebook.com/teknonomi/" class="size-a-8 flex-c-c borad-3 size-a-8 bg-facebook fs-16 cl0 hov-cl0">
										<span class="fab fa-facebook-f"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										

										<a href="https://www.facebook.com/teknonomi/" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											Teknonomi Media
										</a>
									</div>
								</li>

								<li class="flex-wr-sb-c p-b-20">
									<a href="https://twitter.com/teknonomi1" class="size-a-8 flex-c-c borad-3 size-a-8 bg-twitter fs-16 cl0 hov-cl0">
										<span class="fab fa-twitter"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										

										<a href="https://twitter.com/teknonomi1" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											@teknonomi1
										</a>
									</div>
								</li>

								<li class="flex-wr-sb-c p-b-20">
									<a href="https://twitter.com/teknonomi1" class="size-a-8 flex-c-c borad-3 size-a-8 bg-twitter fs-16 cl0 hov-cl0" style="background-color: black">
										<span class="fab fa-instagram"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										

										<a href="https://www.instagram.com/teknonomi/?hl=id" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											@teknonomi
										</a>
									</div>
								</li>


								<li class="flex-wr-sb-c p-b-20">
									<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-youtube fs-16 cl0 hov-cl0">
										<span class="fab fa-youtube"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											Teknonomi Media
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
	<div class="container" style="margin-bottom: 15px">
		<div class="flex-c-c">
			<a href="#">
				<img class="max-w-full" src="<?php echo base_url(); ?>assets/template/images/icons/banner-ad.jpg" alt="IMG">
			</a>
		</div>
	</div>

<!-- Latest
	<section class="bg0 p-t-60 p-b-35">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-20">
					<div class="how2 how2-cl4 flex-s-c m-r-10 m-r-0-sr991">
						<h3 class="f1-m-2 cl3 tab01-title">
							Video
						</h3>
					</div>

					<div class="row p-t-35">
						<div class="col-sm-6 p-r-25 p-r-15-sr991">
							Item latest	
							<div class="m-b-45">
								<iframe width="460" height="315" src="https://www.youtube.com/embed/bzE3OQx2xAk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>

					</div>
				</div>

				<div class="col-md-10 col-lg-4">
				</div>
			</div>
		</div>
	</section> -->
