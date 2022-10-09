   
<div class="hero-wrap img" style="background-image: url(images/mpp.jpg);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row d-md-flex no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-10 d-flex align-items-center ftco-animate">
				<div class="text text-center pt-5 mt-md-5">
					
					<h1 class="mb-5">Selamat Datang Di Mall Pelayanan Batang</h1>
					<div class="ftco-counter ftco-no-pt ftco-no-pb">
						<div class="row">
							<div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
								<div class="block-18">	
									<div class="text d-flex">
										<div class="icon mr-2">
											<span class="flaticon-worldwide"></span>
										</div>
										
										<a href="visitor.php">
										<div class="desc text-left">
										
											<strong class="number" data-number="hari">0</strong>
											<span>Hari ini</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
								<div class="block-18 text-center">
									<div class="text d-flex">
										<div class="icon mr-2">
											<span class="flaticon-visitor"></span>
										</div>
										<div class="desc text-left">
											<strong class="number" data-number="bulan">0</strong>
											<span>Bulan ini</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
								<div class="block-18 text-center">
									<div class="text d-flex">
										<div class="icon mr-2">
											<span class="flaticon-resume"></span>
										</div>
										<div class="desc text-left">
											<strong class="number" data-number="total">0</strong>
											<span>Total</span>
										</div>
									</div>
								</div>
							</div>
								</a>
						</div>
					</div>
					<div class="ftco-search my-md-5">
						<div class="row">
							<div class="col-md-12 nav-link-wrap">
								<div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
									<a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Pencarian</a>



								</div>
							</div>
							<div class="col-md-12 tab-wrap">

								<div class="tab-content p-4" id="v-pills-tabContent">

									<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
										<form action="#" class="search-job">
											<div class="row no-gutters">


												<div class="col-md mr-md-8">
													<div class="form-group">
														<div class="form-field">
															<div class="icon"><span class="icon-map-marker"></span></div>
															<input type="text" class="form-control" placeholder="Pencarian">
														</div>
													</div>
												</div>
												<div class="col-md mr-md-2">
													<div class="form-group">
														<div class="form-field">
															<button type="submit" class="form-control btn btn-primary">Cari</button>
														</div>	
													</div>
												</div>
											</div>
										</form>
									</div>

									<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
										<form action="#" class="search-job">
											<div class="row">
												<div class="col-md">
													<div class="form-group">
														<div class="form-field">
															<div class="icon"><span class="icon-user"></span></div>
															<input type="text" class="form-control" placeholder="eg. Adam Scott">
														</div>
													</div>
												</div>
												<div class="col-md">
													<div class="form-group">
														<div class="form-field">
															<div class="select-wrap">
																<div class="icon"><span class="ion-ios-arrow-down"></span></div>
																<select name="" id="" class="form-control">
																	<option value="">Category</option>
																	<option value="">Full Time</option>
																	<option value="">Part Time</option>
																	<option value="">Freelance</option>
																	<option value="">Internship</option>
																	<option value="">Temporary</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md">
													<div class="form-group">
														<div class="form-field">
															<div class="icon"><span class="icon-map-marker"></span></div>
															<input type="text" class="form-control" placeholder="Location">
														</div>
													</div>
												</div>
												<div class="col-md">
													<div class="form-group">
														<div class="form-field">
															<button type="submit" class="form-control btn btn-primary">Search</button>
														</div>
													</div>
												</div>
											</div>
										</form>
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



<section class="ftco-section ftco-no-pt ftco-no-pb">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="category-wrap">
					<div class="row no-gutters">
						<?php   
						include 'config.php';
						$query = "SELECT * FROM layanan";
						$hasil_query = mysqli_query($koneksi, $query);
						while ($row=mysqli_fetch_assoc($hasil_query)) 
						{
							?>
							<div class="col-md-2">
								<div class="top-category text-center no-border-left">

									<?php echo "<img src='images/".$row['logo_layanan']."' style=width:100px; height:100px;>" ?>
									<h3><a href="index.php?p=layanan&id_layanan=<?php echo $row['id_layanan'];?>"><?php echo $row['nama_layanan'];?></a></h3>

								</div>
							</div>
							<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>