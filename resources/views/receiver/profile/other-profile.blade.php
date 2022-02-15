
@extends('layouts.receiver')
@section('content')
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<div class="toolbar" id="kt_toolbar">
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">
										Dashboard
										<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
										<small class="text-muted fs-7 fw-bold my-1 ms-1">Profile Edit</small>
									</h1>
								</div>					
							</div>
						</div>

						<div class="post d-flex flex-column-fluid" id="kt_post">
							<div id="kt_content_container" class="container-fluid">
							
							
							<!-- profile header start -->

							<div class="card mb-5 mb-xxl-8">
									<div class="card-body pt-9 pb-0">
										<div class="d-flex flex-wrap flex-sm-nowrap mb-3">
											<div class="me-7 mb-4">
												<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
												
												<img 
												@if($data[0]['image'] != null)
													src="{{asset('provider/images/avatars/').'/'.$data[0]['image']}}"
												@else
													src="{{asset('provider/images/avatars/default.png')}}"
												@endif
												alt="image" />
													<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
												</div>
											</div>

											<div class="flex-grow-1">
												<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
													<div class="d-flex flex-column">
														<div class="d-flex align-items-center mb-2">
															<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">@if($data[0]['first_name'] != null) {{$data[0]['first_name']}} @endif @if($data[0]['last_name'] != null) {{$data[0]['last_name']}} @endif</a>
															<a href="#" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Varified Your Account">
																<span class="svg-icon svg-icon-1 svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																		<path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="#00A3FF" />
																		<path class="permanent" d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
																	</svg>
																</span>
															</a>
														</div>

														<div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
														<span>
																<i class="fa fa-star me-1 text-warning fs-5"></i> 
																<i class="fa fa-star me-1 text-warning fs-5"></i>
																<i class="fa fa-star me-1 text-warning fs-5"></i>
																<i class="fa fa-star me-1 text-warning fs-5"></i>
																<i class="fa fa-star-half-alt me-1 text-warning fs-5"></i>
															</span>
														</div>

														@if(isset($data[0]['experience']) && $data[0]['experience'] != null)
														<div class="d-flex flex-wrap fw-bold fs-6 mb-1 pe-2">
															<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
																<span class="svg-icon svg-icon-4 me-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"></path>
																		<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"></path>
																	</svg>
																</span>
																{{$data[0]['experience']}} years experience
															</a>
														</div>
														@endif

														@if(isset($data[0]['hourly_rate']) && $data[0]['hourly_rate'] != null)
														<div class="d-flex flex-wrap fw-bold fs-6 mb-1 pe-2">
															<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
																<span class="svg-icon svg-icon-4 me-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M21.6 11.2L19.3 8.89998V5.59993C19.3 4.99993 18.9 4.59993 18.3 4.59993H14.9L12.6 2.3C12.2 1.9 11.6 1.9 11.2 2.3L8.9 4.59993H5.6C5 4.59993 4.6 4.99993 4.6 5.59993V8.89998L2.3 11.2C1.9 11.6 1.9 12.1999 2.3 12.5999L4.6 14.9V18.2C4.6 18.8 5 19.2 5.6 19.2H8.9L11.2 21.5C11.6 21.9 12.2 21.9 12.6 21.5L14.9 19.2H18.2C18.8 19.2 19.2 18.8 19.2 18.2V14.9L21.5 12.5999C22 12.1999 22 11.6 21.6 11.2Z" fill="black"/>
																		<path d="M11.3 9.40002C11.3 10.2 11.1 10.9 10.7 11.3C10.3 11.7 9.8 11.9 9.2 11.9C8.8 11.9 8.40001 11.8 8.10001 11.6C7.80001 11.4 7.50001 11.2 7.40001 10.8C7.20001 10.4 7.10001 10 7.10001 9.40002C7.10001 8.80002 7.20001 8.4 7.30001 8C7.40001 7.6 7.7 7.29998 8 7.09998C8.3 6.89998 8.7 6.80005 9.2 6.80005C9.5 6.80005 9.80001 6.9 10.1 7C10.4 7.1 10.6 7.3 10.8 7.5C11 7.7 11.1 8.00005 11.2 8.30005C11.3 8.60005 11.3 9.00002 11.3 9.40002ZM10.1 9.40002C10.1 8.80002 10 8.39998 9.90001 8.09998C9.80001 7.79998 9.6 7.70007 9.2 7.70007C9 7.70007 8.8 7.80002 8.7 7.90002C8.6 8.00002 8.50001 8.2 8.40001 8.5C8.40001 8.7 8.30001 9.10002 8.30001 9.40002C8.30001 9.80002 8.30001 10.1 8.40001 10.4C8.40001 10.6 8.5 10.8 8.7 11C8.8 11.1 9 11.2001 9.2 11.2001C9.5 11.2001 9.70001 11.1 9.90001 10.8C10 10.4 10.1 10 10.1 9.40002ZM14.9 7.80005L9.40001 16.7001C9.30001 16.9001 9.10001 17.1 8.90001 17.1C8.80001 17.1 8.70001 17.1 8.60001 17C8.50001 16.9 8.40001 16.8001 8.40001 16.7001C8.40001 16.6001 8.4 16.5 8.5 16.4L14 7.5C14.1 7.3 14.2 7.19998 14.3 7.09998C14.4 6.99998 14.5 7 14.6 7C14.7 7 14.8 6.99998 14.9 7.09998C15 7.19998 15 7.30002 15 7.40002C15.2 7.30002 15.1 7.50005 14.9 7.80005ZM16.6 14.2001C16.6 15.0001 16.4 15.7 16 16.1C15.6 16.5 15.1 16.7001 14.5 16.7001C14.1 16.7001 13.7 16.6 13.4 16.4C13.1 16.2 12.8 16 12.7 15.6C12.5 15.2 12.4 14.8001 12.4 14.2001C12.4 13.3001 12.6 12.7 12.9 12.3C13.2 11.9 13.7 11.7001 14.5 11.7001C14.8 11.7001 15.1 11.8 15.4 11.9C15.7 12 15.9 12.2 16.1 12.4C16.3 12.6 16.4 12.9001 16.5 13.2001C16.6 13.4001 16.6 13.8001 16.6 14.2001ZM15.4 14.1C15.4 13.5 15.3 13.1 15.2 12.9C15.1 12.6 14.9 12.5 14.5 12.5C14.3 12.5 14.1 12.6001 14 12.7001C13.9 12.8001 13.8 13.0001 13.7 13.2001C13.6 13.4001 13.6 13.8 13.6 14.1C13.6 14.7 13.7 15.1 13.8 15.4C13.9 15.7 14.1 15.8 14.5 15.8C14.8 15.8 15 15.7 15.2 15.4C15.3 15.2 15.4 14.7 15.4 14.1Z" fill="black"/>
																	</svg>
																</span>
																${{$data[0]['hourly_rate']}} /hour
															</a>
														</div>
														@endif

														<div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
															@if($data[0]['address'] != null)
															<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
																<span class="svg-icon svg-icon-4 me-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black"/>
																		<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black"/>
																	</svg>
																</span>
																{{$data[0]['address']}}
															</a>
															@endif

															
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- profile header end -->

								<div class="row g-6 g-xl-9 mb-6 mb-xl-9">
									<div class="col-md-6">
										<div class="card">
											<div class="card-header">
												<div class="card-title fs-3 fw-bolder">
													<h2 class="fw-bolder">About Us</h2>
												</div>										
											</div>

											<div class="card-body pt-5">
												<div class="timeline-label custom-my">
													<div class="timeline-item">
														<div class="timeline-badge">
															<i class="fa fa-genderless text-warning fs-1"></i>
														</div>

														<div class="fw-normal timeline-content text-muted ps-3">Has Car</div>
													</div>

													<div class="timeline-item">
														<div class="timeline-badge">
															<i class="fa fa-genderless text-success fs-1"></i>
														</div>

														<div class="timeline-content d-flex">
															<span class="fw-normal timeline-content text-muted ps-3">Speak Frenc</span>
														</div>
													</div>
												</div>

												<div class="fs-5 fw-bold text-gray-600 pt-10">
													<p class="mb-8">
														ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
													</p>

													<p class="mb-8">
														labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
													</p>

													<p class="mb-8">
														incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
													</p>

													<p class="mb-8">
														<a href="../../demo1/dist/pages/blog/home.html" class="link-info pe-1">Read More</a>
													</p>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="card">
											<div class="card-header">
												<div class="card-title fs-3 fw-bolder">
													<h2 class="fw-bolder">Background Varified</h2>
												</div>										
											</div>

											<div class="card-body pt-5">
												<div class="fs-5 fw-bold text-gray-600">
													<p class="mb-8">
														We encourage parents to conduct their own screenings using the background check tools.
														<br>
														See what each of the badges covered, or learn more about keeping your family safe by visiting the Trust & Safety Center.
														<br>
														We encourage parents to conduct their own screenings using the background check tools. 
													</p>
												</div>

												<div class="row g-6 g-xl-9 mb-6 mb-xl-9">
													<div class="col-md-6">
														<div class="card h-100">
															<div class="card-body d-flex justify-content-center text-center flex-column p-8">
																<a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">
																	<div class="symbol symbol-75px mb-5">
																		<img src="assets/media/svg/files/pdf.svg" alt="">
																	</div>

																	<div class="fs-5 fw-bolder mb-2">Enhanced Criminal</div>
																</a>

																<div class="fs-7 fw-bold text-gray-400">Never run</div>
															</div>
														</div>
													</div>

													<div class="col-md-6">
														<div class="card h-100">
															<div class="card-body d-flex justify-content-center text-center flex-column p-8">
																<a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">
																	<div class="symbol symbol-75px mb-5">
																		<img src="assets/media/svg/files/pdf.svg" alt="">
																	</div>

																	<div class="fs-5 fw-bolder mb-2">Basic Criminal</div>
																</a>

																<div class="fs-7 fw-bold text-gray-400">Expired on 11/05/2020</div>
															</div>
														</div>
													</div>

													<div class="col-md-6">
														<div class="card h-100">
															<div class="card-body d-flex justify-content-center text-center flex-column p-8">
																<a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">
																	<div class="symbol symbol-75px mb-5">
																		<img src="assets/media/svg/files/doc.svg" alt="">
																	</div>

																	<div class="fs-5 fw-bolder mb-2">Vehicle Records</div>
																</a>

																<div class="fs-7 fw-bold text-gray-400">Never run</div>
															</div>
														</div>
													</div>


													<div class="col-md-6">
														<div class="card h-100">
															<div class="card-body d-flex justify-content-center text-center flex-column p-8">
																<a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">
																	<div class="symbol symbol-75px mb-5">
																		<img src="assets/media/svg/files/pdf.svg" alt="">
																	</div>

																	<div class="fs-5 fw-bolder mb-2">First aid certification</div>
																</a>

																<div class="fs-7 fw-bold text-gray-400">Not reported</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="row g-6 g-xl-9 mb-6 mb-xl-9">
									<div class="col-md-12">
										<div class="card">
											<div class="card-header">
												<div class="card-title fs-3 fw-bolder">
													<h2 class="fw-bolder">Ratings & reviews</h2>
												</div>										
											</div>

											<div class="card-body pt-5">
												<div class="row g-6 mb-6 g-xl-9 mb-xl-9">
													<div class="col-md-6 col-xxl-4">
														<div class="card notice d-flex bg-light-info rounded border-info border border-dashed rounded-3">
															<div class="card-body d-flex flex-center flex-column p-9">
																<div class="symbol symbol-65px symbol-circle mb-5">
																	<img src="assets/media//avatars/150-12.jpg" alt="image" />
																	<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-white h-15px w-15px ms-n3 mt-n3"></div>
																</div>

																<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">Chris</a>

																<div class="fw-bold text-gray-400 mb-2">21 Nov 2021</div>

																<span class="mb-6">
																	<i class="fa fa-star me-1 text-warning fs-5"></i> 
																	<i class="fa fa-star me-1 text-warning fs-5"></i>
																	<i class="fa fa-star me-1 text-warning fs-5"></i>
																	<i class="fa fa-star me-1 text-warning fs-5"></i>
																	<i class="fa fa-star-half-alt me-1 text-warning fs-5"></i>
																</span>

																<p class="text-center">
																	Generally available afternoons, evenings, late nights and w After school care availability
																</p>
															</div>
														</div>
													</div>

													<div class="col-md-6 col-xxl-4">
														<div class="card notice d-flex bg-light-info rounded border-info border border-dashed rounded-3">
															<div class="card-body d-flex flex-center flex-column p-9">
																<div class="symbol symbol-65px symbol-circle mb-5">
																	<img src="assets/media//avatars/150-2.jpg" alt="image" />
																	<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-white h-15px w-15px ms-n3 mt-n3"></div>
																</div>

																<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">cJhon</a>

																<div class="fw-bold text-gray-400 mb-2">18 Nov 2021</div>

																<span class="mb-6">
																	<i class="fa fa-star me-1 text-warning fs-5"></i> 
																	<i class="fa fa-star me-1 text-warning fs-5"></i>
																	<i class="fa fa-star me-1 text-warning fs-5"></i>
																	<i class="fa fa-star-half-alt me-1 text-warning fs-5"></i>
																	<i class="far fa-star me-1 text-warning fs-5"></i>
																</span>

																<p class="text-center">
																	Generally available afternoons, evenings, late nights and w After school care availability
																</p>
															</div>
														</div>
													</div>

													<div class="col-md-6 col-xxl-4">
														<div class="card notice d-flex bg-light-info rounded border-info border border-dashed rounded-3">
															<div class="card-body d-flex flex-center flex-column p-9">
																<div class="symbol symbol-65px symbol-circle mb-5">
																	<img src="assets/media//avatars/150-5.jpg" alt="image" />
																	<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-white h-15px w-15px ms-n3 mt-n3"></div>
																</div>

																<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">Bella</a>

																<div class="fw-bold text-gray-400 mb-2">10 Nov 2021</div>

																<span class="mb-6">
																	<i class="fa fa-star me-1 text-warning fs-5"></i> 
																	<i class="fa fa-star me-1 text-warning fs-5"></i>
																	<i class="fa fa-star-half-alt me-1 text-warning fs-5"></i>
																	<i class="far fa-star me-1 text-warning fs-5"></i>
																	<i class="far fa-star me-1 text-warning fs-5"></i>
																</span>

																<p class="text-center">
																	Generally available afternoons, evenings, late nights and w After school care availability
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="row g-6 g-xl-9 mb-6 mb-xl-9">
									<div class="col-md-4">
										<div class="card">
											<div class="card-header">
												<div class="card-title fs-3 fw-bolder">
													<h2 class="fw-bolder">Experience</h2>
												</div>										
											</div>

											<div class="card-body pt-5">
												<div class="fs-5 fw-bold text-gray-600">
													<p class="mb-8">
														Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Recentlyunchanged. Recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. 
													</p>

													<p class="mb-8">
														It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset.
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-4">
										<div class="card">
											<div class="card-header">
												<div class="card-title fs-3 fw-bolder">
													<h2 class="fw-bolder">Education</h2>
												</div>										
											</div>

											<div class="card-body pt-5">
												<div class="fs-5 fw-bold text-gray-600 d-flex nav-tabs pb-8">
													<div class="d-flex align-items-start">
														<span class="svg-icon svg-icon-2x svg-icon-primary d-block me-2">
															<svg xmlns="http://www.w4.org/2000/svg" version="1.0" width="20.000000pt" height="20.000000pt" viewBox="0 0 20.000000 20.000000" preserveAspectRatio="xMidYMid meet">
																<g transform="translate(0.000000,20.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
																<path d="M47 160 c-48 -30 -57 -45 -34 -53 9 -3 9 -7 -2 -20 -8 -10 -10 -24 -6 -34 5 -10 7 -22 6 -28 -1 -5 8 0 21 13 19 19 21 25 10 42 -10 17 -9 22 13 36 14 9 29 14 33 10 4 -4 -1 -12 -11 -17 -23 -13 -22 -26 3 -39 17 -9 30 -6 70 17 28 15 50 31 50 36 0 7 -89 67 -100 67 -3 0 -27 -13 -53 -30z m-7 -95 c0 -8 -7 -15 -15 -15 -8 0 -15 7 -15 15 0 8 7 15 15 15 8 0 15 -7 15 -15z"/>
																<path opacity="0.3" d="M140 65 c-14 -8 -37 -14 -52 -15 -33 0 -36 -15 -8 -30 23 -12 77 10 87 36 8 22 1 24 -27 9z"/>
																</g>
															</svg>
														</span>
														<div class="ps-3">
															<h6 class="fs-4 text-gray-800 fw-bolder mb-0 d-block">Graduation</h6>
															<p class=" m-0">SECRETARIAL SCIENCE LEGAL/PARALEGAL STUDIES</p>
															<span class="fw-bolder fs-6 text-gray-800">From xxxxx University</span>
														</div>															
													</div>
												</div>

												<div class="fs-5 fw-bold text-gray-600 d-flex nav-tabs pb-5 pt-5">
													<div class="d-flex align-items-start">
														<span class="svg-icon svg-icon-2x svg-icon-primary d-block me-2">
															<svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="20.000000pt" height="20.000000pt" viewBox="0 0 20.000000 20.000000" preserveAspectRatio="xMidYMid meet">
																<g transform="translate(0.000000,20.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
																<path d="M47 160 c-48 -30 -57 -45 -34 -53 9 -3 9 -7 -2 -20 -8 -10 -10 -24 -6 -34 5 -10 7 -22 6 -28 -1 -5 8 0 21 13 19 19 21 25 10 42 -10 17 -9 22 13 36 14 9 29 14 33 10 4 -4 -1 -12 -11 -17 -23 -13 -22 -26 3 -39 17 -9 30 -6 70 17 28 15 50 31 50 36 0 7 -89 67 -100 67 -3 0 -27 -13 -53 -30z m-7 -95 c0 -8 -7 -15 -15 -15 -8 0 -15 7 -15 15 0 8 7 15 15 15 8 0 15 -7 15 -15z"/>
																<path opacity="0.3" d="M140 65 c-14 -8 -37 -14 -52 -15 -33 0 -36 -15 -8 -30 23 -12 77 10 87 36 8 22 1 24 -27 9z"/>
																</g>
															</svg>
														</span>
														<div class="ps-3">
															<h6 class="fs-4 text-gray-800 fw-bolder mb-0 d-block">High School</h6>
															<p class=" m-0">SECRETARIAL SCIENCE LEGAL/PARALEGAL STUDIES</p>
															<span class="fw-bolder fs-6 text-gray-800">From xxxxx University</span>
														</div>															
													</div>
												</div>

												<div class="fs-5 fw-bold text-gray-600 d-flex pt-5">
													<div class="d-flex align-items-start">
														<span class="svg-icon svg-icon-2x svg-icon-primary d-block me-2">
															<svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="20.000000pt" height="20.000000pt" viewBox="0 0 20.000000 20.000000" preserveAspectRatio="xMidYMid meet">
																<g transform="translate(0.000000,20.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
																<path d="M47 160 c-48 -30 -57 -45 -34 -53 9 -3 9 -7 -2 -20 -8 -10 -10 -24 -6 -34 5 -10 7 -22 6 -28 -1 -5 8 0 21 13 19 19 21 25 10 42 -10 17 -9 22 13 36 14 9 29 14 33 10 4 -4 -1 -12 -11 -17 -23 -13 -22 -26 3 -39 17 -9 30 -6 70 17 28 15 50 31 50 36 0 7 -89 67 -100 67 -3 0 -27 -13 -53 -30z m-7 -95 c0 -8 -7 -15 -15 -15 -8 0 -15 7 -15 15 0 8 7 15 15 15 8 0 15 -7 15 -15z"/>
																<path opacity="0.3" d="M140 65 c-14 -8 -37 -14 -52 -15 -33 0 -36 -15 -8 -30 23 -12 77 10 87 36 8 22 1 24 -27 9z"/>
																</g>
															</svg>
														</span>
														<div class="ps-3">
															<h6 class="fs-4 text-gray-800 fw-bolder mb-0 d-block">Extra Courses</h6>
															<p class=" m-0">Courses One</p>
															<span class="fw-bolder fs-6 text-gray-800">From xxxxx</span>
															<p class=" m-0">Courses Two</p>
															<span class="fw-bolder fs-6 text-gray-800">From xxxxx</span>
															
														</div>															
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-4">
										<div class="card">
											<div class="card-header">
												<div class="card-title fs-3 fw-bolder">
													<h2 class="fw-bolder">Additional Services</h2>
												</div>										
											</div>

											<div class="card-body pt-5">
												<div class="fs-5 fw-bold text-gray-600 d-flex nav-tabs pb-5">
													<div class="d-flex align-items-start">
														<span class="svg-icon svg-icon-2x svg-icon-primary d-block me-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"></path>
																<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"></path>
															</svg>
														</span>
														<div class="ps-3">
															<h6 class="fs-4 text-gray-800 fw-bolder mb-0 d-block">Service item one</h6>
															<p class=" m-0">Short description here</p>
														</div>															
													</div>
												</div>

												<div class="fs-5 fw-bold text-gray-600 d-flex nav-tabs pb-5 pt-3">
													<div class="d-flex align-items-start">
														<span class="svg-icon svg-icon-2x svg-icon-primary d-block me-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"></path>
																<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"></path>
															</svg>
														</span>
														<div class="ps-3">
															<h6 class="fs-4 text-gray-800 fw-bolder mb-0 d-block">Service item two</h6>
															<p class=" m-0">Short description here</p>
														</div>															
													</div>
												</div>

												<div class="fs-5 fw-bold text-gray-600 d-flex nav-tabs pb-5 pt-3">
													<div class="d-flex align-items-start">
														<span class="svg-icon svg-icon-2x svg-icon-primary d-block me-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"></path>
																<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"></path>
															</svg>
														</span>
														<div class="ps-3">
															<h6 class="fs-4 text-gray-800 fw-bolder mb-0 d-block">Service item three</h6>
															<p class=" m-0">Short description here</p>
														</div>															
													</div>
												</div>

												<div class="fs-5 fw-bold text-gray-600 d-flex nav-tabs pb-5 pt-3">
													<div class="d-flex align-items-start">
														<span class="svg-icon svg-icon-2x svg-icon-primary d-block me-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"></path>
																<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"></path>
															</svg>
														</span>
														<div class="ps-3">
															<h6 class="fs-4 text-gray-800 fw-bolder mb-0 d-block">Service item four</h6>
															<p class=" m-0">Short description here</p>
														</div>															
													</div>
												</div>

												<div class="fs-5 fw-bold text-gray-600 d-flex pt-3">
													<div class="d-flex align-items-start">
														<span class="svg-icon svg-icon-2x svg-icon-primary d-block me-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"></path>
																<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"></path>
															</svg>
														</span>
														<div class="ps-3">
															<h6 class="fs-4 text-gray-800 fw-bolder mb-0 d-block">Service item five</h6>
															<p class=" m-0">Short description here</p>
														</div>															
													</div>
												</div>
											</div>


										</div>
									</div>
								</div>

								<div class="row g-6 g-xl-9">
									<div class="col-md-12">
										<div class="card">
											
												<div class="card-body pt-5 me-5">
													<a href="#" class="btn btn-light-info w-150px me-5">
														<span>Share Profile</span>
													</a>

													<a href="#" class="btn btn-light-primary w-150px me-5">
														<span>Message</span>
													</a>

													<a href="#" class="btn btn-light-danger w-150px">
														<span>Report</span>
													</a>
												</div>										
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					@endsection