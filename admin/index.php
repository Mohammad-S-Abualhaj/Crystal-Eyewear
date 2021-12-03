<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<?php include_once 'layouts/head.php'; ?>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed  aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Aside-->
			<?php include_once 'layouts/aside.php'; ?>
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Header-->
				<?php include_once 'layouts/header.php'; ?>

				<!--end::Header-->

				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!--begin::Post-->
					<div class="post d-flex flex-column-fluid" id="kt_post">
						<!--begin::Container-->
						<div id="kt_content_container" class="container-xxl">
							<!--begin::Row-->
							<!--begin::Row-->
							<div class="row g-5 g-xl-8">
								<!--begin::Col-->
								<div class="col-xl-4">
									<!--begin::Mixed Widget 5-->
									<div class="card card-xxl-stretch mb-xl-8">
										<!--begin::Beader-->
										<div class="card-header border-0 py-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder fs-3 mb-1">Trends</span>
												<span class="text-muted fw-bold fs-7">Latest trends</span>
											</h3>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body d-flex flex-column">
											<!--begin::Chart-->
											<div class="mixed-widget-5-chart card-rounded-top" data-kt-chart-color="success" style="height: 150px"></div>
											<!--end::Chart-->
											<!--begin::Items-->
											<div class="mt-5">
												<!--begin::Item-->
												<div class="d-flex flex-stack mb-5">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Symbol-->
														<div class="symbol symbol-50px me-3">
															<div class="symbol-label bg-light">
																<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50" alt="" />
															</div>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div>
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top Authors</a>
															<div class="fs-7 text-muted fw-bold mt-1">Ricky Hunt, Sandra Trepp</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<div class="badge badge-light fw-bold py-4 px-3">+82$</div>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack mb-5">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Symbol-->
														<div class="symbol symbol-50px me-3">
															<div class="symbol-label bg-light">
																<img src="assets/media/svg/brand-logos/figma-1.svg" class="h-50" alt="" />
															</div>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div>
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top Sales</a>
															<div class="fs-7 text-muted fw-bold mt-1">PitStop Emails</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<div class="badge badge-light fw-bold py-4 px-3">+82$</div>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Symbol-->
														<div class="symbol symbol-50px me-3">
															<div class="symbol-label bg-light">
																<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50" alt="" />
															</div>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="py-1">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top Engagement</a>
															<div class="fs-7 text-muted fw-bold mt-1">KT.com</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<div class="badge badge-light fw-bold py-4 px-3">+82$</div>
													<!--end::Label-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Items-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Mixed Widget 5-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-8">
									<!--begin::Tables Widget 5-->
									<div class="card card-xxl-stretch mb-5 mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder fs-3 mb-1">Latest Products</span>
												<span class="text-muted mt-1 fw-bold fs-7">More than 400 new products</span>
											</h3>
											<div class="card-toolbar">
												<ul class="nav">
													<li class="nav-item">
														<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-dark active fw-bolder px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">Month</a>
													</li>
													<li class="nav-item">
														<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-dark fw-bolder px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">Week</a>
													</li>
													<li class="nav-item">
														<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-dark fw-bolder px-4" data-bs-toggle="tab" href="#kt_table_widget_5_tab_3">Day</a>
													</li>
												</ul>
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body py-3">
											<div class="tab-content">
												<!--begin::Tap pane-->
												<div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
															<!--begin::Table head-->
															<thead>
																<tr class="border-0">
																	<th class="p-0 w-50px"></th>
																	<th class="p-0 min-w-150px"></th>
																	<th class="p-0 min-w-140px"></th>
																	<th class="p-0 min-w-110px"></th>
																	<th class="p-0 min-w-50px"></th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																<tr>
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
																		<span class="text-muted fw-bold d-block">Movie Creator</span>
																	</td>
																	<td class="text-end text-muted fw-bold">React, HTML</td>
																	<td class="text-end">
																		<span class="badge badge-light-success">Approved</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular Authors</a>
																		<span class="text-muted fw-bold d-block">Most Successful</span>
																	</td>
																	<td class="text-end text-muted fw-bold">Python, MySQL</td>
																	<td class="text-end">
																		<span class="badge badge-light-warning">In Progress</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New Users</a>
																		<span class="text-muted fw-bold d-block">Awesome Users</span>
																	</td>
																	<td class="text-end text-muted fw-bold">Laravel,Metronic</td>
																	<td class="text-end">
																		<span class="badge badge-light-primary">Success</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
																		<span class="text-muted fw-bold d-block">Movie Creator</span>
																	</td>
																	<td class="text-end text-muted fw-bold">AngularJS, C#</td>
																	<td class="text-end">
																		<span class="badge badge-light-danger">Rejected</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller Theme</a>
																		<span class="text-muted fw-bold d-block">Best Customers</span>
																	</td>
																	<td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
																	<td class="text-end">
																		<span class="badge badge-light-warning">In Progress</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
															</tbody>
															<!--end::Table body-->
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_table_widget_5_tab_2">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
															<!--begin::Table head-->
															<thead>
																<tr class="border-0">
																	<th class="p-0 w-50px"></th>
																	<th class="p-0 min-w-150px"></th>
																	<th class="p-0 min-w-140px"></th>
																	<th class="p-0 min-w-110px"></th>
																	<th class="p-0 min-w-50px"></th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																<tr>
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
																		<span class="text-muted fw-bold d-block">Movie Creator</span>
																	</td>
																	<td class="text-end text-muted fw-bold">React, HTML</td>
																	<td class="text-end">
																		<span class="badge badge-light-success">Approved</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular Authors</a>
																		<span class="text-muted fw-bold d-block">Most Successful</span>
																	</td>
																	<td class="text-end text-muted fw-bold">Python, MySQL</td>
																	<td class="text-end">
																		<span class="badge badge-light-warning">In Progress</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
																		<span class="text-muted fw-bold d-block">Movie Creator</span>
																	</td>
																	<td class="text-end text-muted fw-bold">AngularJS, C#</td>
																	<td class="text-end">
																		<span class="badge badge-light-danger">Rejected</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
															</tbody>
															<!--end::Table body-->
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_table_widget_5_tab_3">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
															<!--begin::Table head-->
															<thead>
																<tr class="border-0">
																	<th class="p-0 w-50px"></th>
																	<th class="p-0 min-w-150px"></th>
																	<th class="p-0 min-w-140px"></th>
																	<th class="p-0 min-w-110px"></th>
																	<th class="p-0 min-w-50px"></th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																<tr>
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller Theme</a>
																		<span class="text-muted fw-bold d-block">Best Customers</span>
																	</td>
																	<td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
																	<td class="text-end">
																		<span class="badge badge-light-warning">In Progress</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
																		<span class="text-muted fw-bold d-block">Movie Creator</span>
																	</td>
																	<td class="text-end text-muted fw-bold">AngularJS, C#</td>
																	<td class="text-end">
																		<span class="badge badge-light-danger">Rejected</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New Users</a>
																		<span class="text-muted fw-bold d-block">Awesome Users</span>
																	</td>
																	<td class="text-end text-muted fw-bold">Laravel,Metronic</td>
																	<td class="text-end">
																		<span class="badge badge-light-primary">Success</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular Authors</a>
																		<span class="text-muted fw-bold d-block">Most Successful</span>
																	</td>
																	<td class="text-end text-muted fw-bold">Python, MySQL</td>
																	<td class="text-end">
																		<span class="badge badge-light-warning">In Progress</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
															</tbody>
															<!--end::Table body-->
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end::Tap pane-->
											</div>
										</div>
										<!--end::Body-->
									</div>
									<!--end::Tables Widget 5-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Post-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Root-->
	<!--begin::Javascript-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
    <span class="svg-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
            <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
        </svg>
    </span>
    <!--end::Svg Icon-->
</div>
<script>
    var hostUrl = "assets/";
</script>
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="assets/js/custom/widgets.js"></script>
<!--end::Page Custom Javascript-->	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>