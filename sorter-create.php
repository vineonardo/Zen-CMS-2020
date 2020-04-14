<?php require '_header.php';?>
<div class="uk-grid uk-grid-collapse uk-grid-match">
	<div class="uk-width-auto@s uk-width-1-1 uk-visible@s sidebar toggle">
		<?php require '_sidenav.php';?>
	</div>
	<div class="uk-width-expand@s uk-width-1-1 main_content">
		<div class="sorter-content">
			<!-- Top nav -->
			<div class="uk-card uk-card-default uk-padding-small sorter-nav">
				<div class="uk-flex uk-flex-left uk-flex-middle">
					<a class="toggle uk-margin-small-right uk-link-reset" uk-toggle="target: .toggle" hidden>
				        <span uk-icon="icon:arrow-right;ratio:1.25"></span>
				    </a>
					<h1 class="uk-h3 uk-text-uppercase uk-text-bold uk-margin-remove">Sorter Details</h1>	
				</div>
				<hr class="uk-hr uk-margin-small" />
				<div class="uk-flex uk-flex-between uk-flex-middle">
					<div class="uk-text-bold uk-h4 uk-margin-remove">
						<span class="uk-text-muted uk-text-uppercase">Sorter ID</span>
						<span class="uk-text-normal uk-text-italic">blank</span>
					</div>
					<div class="uk-text-right">
						<a href="" class="uk-link-reset">
							<span class="uk-margin-small-right" uk-icon="icon:info;ratio:1.2"></span><span class="uk-text-bold uk-h4 uk-margin-remove uk-text-uppercase">Properties</span>
						</a>
					</div>
				</div>
			</div>
			<!-- Top nav ends -->
			<div class="sorter-body">
				<div class="uk-container uk-margin-large-top">
					<div class="uk-card uk-card-default uk-card-body">
						<h3 class="uk-h3">Basic Information</h3>
						<hr class="uk-hr uk-margin-small" />
						<div class="uk-form">
							<div class="uk-margin">
								<label class="uk-text-bold">Name</label>
								<div class="uk-margin-small">
									<input type="text" class="uk-input uk-width-large" tabindex="1" placeholder="Insert Sorter Name">	
								</div>
							</div>
							<div class="uk-margin">
								<label class="uk-text-bold">Display Name</label>
								<div class="uk-margin-small">
									<input type="text" class="uk-input uk-width-large" tabindex="2" placeholder="Insert Sorter Display Name for front-end">	
								</div>
							</div>
							<div class="uk-margin">
								<label class="uk-text-bold">Leading URL</label>
								<div class="uk-margin-small">
									<input type="text" class="uk-input uk-width-xlarge" tabindex="3" placeholder="Insert Sorter Loading URL" />	
								</div>
							</div>
						</div>

						<hr class="uk-hr uk-margin-medium-top" />

						<div class="uk-flex uk-flex-between uk-flex-middle">
							<h3 class="uk-h3">Feed Configuration</h3>
							<div class="uk-flex uk-flex-middle">
								<span class="uk-margin-right uk-h4 uk-margin-remove-top uk-margin-remove-bottom">Sorter Type</span>
								<span>
									<select class="uk-select">
										<option>Automatic</option>
										<option>Manual</option>
									</select>
								</span>
							</div>	
						</div>
						<hr class="uk-hr uk-margin-small" />
						<div class="uk-margin-medium-top uk-margin-bottom">
							<!-- search -->
							<div class="uk-margin">
								<form class="uk-search uk-search-default uk-width-1-1 uk-flex uk-flex-row">
									<div class="uk-width-expand uk-position-relative">
										<span uk-search-icon></span>
									    <input class="uk-search-input uk-border-radius-no-right" type="search" placeholder="Search...">
									</div>
									<div class="uk-width-auto search-button-wrap">
										<button class="uk-button uk-button-default uk-border-radius-no-left" type="submit">Search</button>
									</div>
								</form>	
							</div>

							<!-- filters -->

							<div class="uk-margin-medium uk-flex uk-flex-row uk-flex-between">
								<div><strong>Filter by</strong></div>
								<div>
									<button class="uk-button uk-button-small uk-button-default" type="button">Sections <span uk-icon="icon:chevron-down"></span></button>
									<div uk-dropdown>
									    <ul class="uk-nav uk-dropdown-nav">
									        <li class="uk-active"><a href="#">Active</a></li>
									        <li><a href="#">Item</a></li>
									        <li class="uk-nav-header">Header</li>
									        <li><a href="#">Item</a></li>
									        <li><a href="#">Item</a></li>
									        <li class="uk-nav-divider"></li>
									        <li><a href="#">Item</a></li>
									    </ul>
									</div>
								</div>
								<div>
									<button class="uk-button uk-button-small uk-button-default" type="button">Tags <span uk-icon="icon:chevron-down"></span></button>
									<div uk-dropdown>
									    <ul class="uk-nav uk-dropdown-nav">
									        <li class="uk-active"><a href="#">Active</a></li>
									        <li><a href="#">Item</a></li>
									        <li class="uk-nav-header">Header</li>
									        <li><a href="#">Item</a></li>
									        <li><a href="#">Item</a></li>
									        <li class="uk-nav-divider"></li>
									        <li><a href="#">Item</a></li>
									    </ul>
									</div>
								</div>
								<div>
									<button class="uk-button uk-button-small uk-button-default" type="button">Article Type <span uk-icon="icon:chevron-down"></span></button>
									<div uk-dropdown>
									    <ul class="uk-nav uk-dropdown-nav">
									        <li class="uk-active"><a href="#">Active</a></li>
									        <li><a href="#">Item</a></li>
									        <li class="uk-nav-header">Header</li>
									        <li><a href="#">Item</a></li>
									        <li><a href="#">Item</a></li>
									        <li class="uk-nav-divider"></li>
									        <li><a href="#">Item</a></li>
									    </ul>
									</div>
								</div>
								<div>
									<button class="uk-button uk-button-small uk-button-default" type="button">Dates <span uk-icon="icon:chevron-down"></span></button>
									<div uk-dropdown>
									    <ul class="uk-nav uk-dropdown-nav">
									        <li class="uk-active"><a href="#">Active</a></li>
									        <li><a href="#">Item</a></li>
									        <li class="uk-nav-header">Header</li>
									        <li><a href="#">Item</a></li>
									        <li><a href="#">Item</a></li>
									        <li class="uk-nav-divider"></li>
									        <li><a href="#">Item</a></li>
									    </ul>
									</div>
								</div>
								<div>
									<button class="uk-button uk-button-small uk-button-default" type="button">Author <span uk-icon="icon:chevron-down"></span></button>
									<div uk-dropdown>
									    <ul class="uk-nav uk-dropdown-nav">
									        <li class="uk-active"><a href="#">Active</a></li>
									        <li><a href="#">Item</a></li>
									        <li class="uk-nav-header">Header</li>
									        <li><a href="#">Item</a></li>
									        <li><a href="#">Item</a></li>
									        <li class="uk-nav-divider"></li>
									        <li><a href="#">Item</a></li>
									    </ul>
									</div>
								</div>
								<div>
									<button class="uk-button uk-button-small uk-button-default" type="button">More filters <span uk-icon="icon:chevron-down"></span></button>
									<div uk-dropdown>
									    <ul class="uk-nav uk-dropdown-nav">
									        <li class="uk-active"><a href="#">Active</a></li>
									        <li><a href="#">Item</a></li>
									        <li class="uk-nav-header">Header</li>
									        <li><a href="#">Item</a></li>
									        <li><a href="#">Item</a></li>
									        <li class="uk-nav-divider"></li>
									        <li><a href="#">Item</a></li>
									    </ul>
									</div>
								</div>
								<div>
									<a href="#" class="uk-link-reset uk-text-small uk-text-uppercase clear-link">
										<span class="uk-margin-small-right">Clear all</span>
										<span uk-icon="icon:minus-circle;ratio:0.7"></span></a>
								</div>
							</div>
							
							<hr class="uk-hr" />

							<div class="uk-grid uk-grid-small uk-grid-divider uk-grid-match">
								<div class="uk-width-2-3">
									<h3 class="uk-h4 uk-padding-small uk-margin-small uk-text-uppercase uk-text-center">Applied Filters</h3>
									<hr class="uk-hr uk-margin-small" />
								</div>
								<div class="uk-width-1-3">
									<h3 class="uk-h4 uk-padding-small uk-margin-small uk-text-uppercase uk-text-center">Feed Output</h3>
									<hr class="uk-hr uk-margin-small" />
								</div>

								<div class="uk-width-1-3 uk-margin-small-top">
									<div class="uk-text-center uk-margin-large-top uk-text-meta uk-text-bold uk-text-uppercase">No filters applied.</div>
								</div>
								<div class="uk-width-1-3 uk-margin-small-top">
									<div class="uk-text-center uk-margin-large-top uk-text-meta uk-text-bold uk-text-uppercase">No articles to select manually.</div>
								</div>
								<div class="uk-width-1-3 uk-margin-small-top">
									<ul class="output-list">
										<li class="uk-grid uk-grid-collapse uk-grid-match uk-margin-bottom uk-box-shadow-small">
											<div class="w10 uk-background-sky uk-flex uk-flex-middle uk-flex-center uk-text-bold uk-text-center"><span class="uk-h4 uk-margin-remove">1</span></div>
											<div class="w90">
												<div class="uk-padding-small">
													<a href="#" class="uk-link-reset uk-text-bold uk-h5 uk-margin-bottom uk-margin-remove-top">IIT Mumbai 'gag' on protests</a>

													<div class="uk-flex uk-flex-between uk-flex-bottom">
														<div><a href="#" class="uk-text-small uk-text-primary">Education</a></div>
														<div><a href="#" class="uk-button uk-button-small uk-button-bordered uk-button-primary">PIN</a></div>
													</div>
													<hr class="uk-hr uk-margin-small"/>
													<div class="uk-flex uk-flex-between uk-flex-bottom uk-text-small">
														<div><span uk-icon="icon:quote-right;ratio:0.9" class="uk-margin-small-right"></span><span class="uk-text-bold">34523523</span></div>
														<div><span uk-icon="icon:clock;ratio:0.9" class="uk-margin-small-right"></span><span>30-01-20 03:41 AM</span></div>
													</div>
												</div>
											</div>
										</li>

										<li class="uk-grid uk-grid-collapse uk-grid-match uk-margin-bottom uk-box-shadow-small">
											<div class="w10 uk-background-sky uk-flex uk-flex-middle uk-flex-center uk-text-bold uk-text-center"><span class="uk-h4 uk-margin-remove">2</span></div>
											<div class="w90">
												<div class="uk-padding-small">
													<a href="#" class="uk-link-reset uk-text-bold uk-h5 uk-margin-bottom uk-margin-remove-top">Kangana Runout makes another narcist movie, Rangoli says it deserves oscar</a>

													<div class="uk-flex uk-flex-between uk-flex-bottom">
														<div><a href="#" class="uk-text-small uk-text-primary">Entertainment</a></div>
														<div><a href="#" class="uk-button uk-button-small uk-button-bordered uk-button-primary">PIN</a></div>
													</div>
													<hr class="uk-hr uk-margin-small"/>
													<div class="uk-flex uk-flex-between uk-flex-bottom uk-text-small">
														<div><span uk-icon="icon:quote-right;ratio:0.9" class="uk-margin-small-right"></span><span class="uk-text-bold">34523523</span></div>
														<div><span uk-icon="icon:clock;ratio:0.9" class="uk-margin-small-right"></span><span>30-01-20 03:41 AM</span></div>
													</div>
												</div>
											</div>
										</li>

										<li class="uk-grid uk-grid-collapse uk-grid-match uk-margin-bottom uk-box-shadow-small">
											<div class="w10 uk-background-sky uk-flex uk-flex-middle uk-flex-center uk-text-bold uk-text-center"><span class="uk-h4 uk-margin-remove">1</span></div>
											<div class="w90">
												<div class="uk-padding-small">
													<a href="#" class="uk-link-reset uk-text-bold uk-h5 uk-margin-bottom uk-margin-remove-top">IIT Mumbai 'gag' on protests</a>

													<div class="uk-flex uk-flex-between uk-flex-bottom">
														<div><a href="#" class="uk-text-small uk-text-primary">Education</a></div>
														<div><a href="#" class="uk-button uk-button-small uk-button-bordered uk-button-primary">PIN</a></div>
													</div>
													<hr class="uk-hr uk-margin-small"/>
													<div class="uk-flex uk-flex-between uk-flex-bottom uk-text-small">
														<div><span uk-icon="icon:quote-right;ratio:0.9" class="uk-margin-small-right"></span><span class="uk-text-bold">34523523</span></div>
														<div><span uk-icon="icon:clock;ratio:0.9" class="uk-margin-small-right"></span><span>30-01-20 03:41 AM</span></div>
													</div>
												</div>
											</div>
										</li>

										<li class="uk-grid uk-grid-collapse uk-grid-match uk-margin-bottom uk-box-shadow-small">
											<div class="w10 uk-background-sky uk-flex uk-flex-middle uk-flex-center uk-text-bold uk-text-center"><span class="uk-h4 uk-margin-remove">2</span></div>
											<div class="w90">
												<div class="uk-padding-small">
													<a href="#" class="uk-link-reset uk-text-bold uk-h5 uk-margin-bottom uk-margin-remove-top">Kangana Runout makes another narcist movie, Rangoli says it deserves oscar</a>

													<div class="uk-flex uk-flex-between uk-flex-bottom">
														<div><a href="#" class="uk-text-small uk-text-primary">Entertainment</a></div>
														<div><a href="#" class="uk-button uk-button-small uk-button-bordered uk-button-primary">PIN</a></div>
													</div>
													<hr class="uk-hr uk-margin-small"/>
													<div class="uk-flex uk-flex-between uk-flex-bottom uk-text-small">
														<div><span uk-icon="icon:quote-right;ratio:0.9" class="uk-margin-small-right"></span><span class="uk-text-bold">34523523</span></div>
														<div><span uk-icon="icon:clock;ratio:0.9" class="uk-margin-small-right"></span><span>30-01-20 03:41 AM</span></div>
													</div>
												</div>
											</div>
										</li>

										<li class="uk-grid uk-grid-collapse uk-grid-match uk-margin-bottom uk-box-shadow-small">
											<div class="w10 uk-background-sky uk-flex uk-flex-middle uk-flex-center uk-text-bold uk-text-center"><span class="uk-h4 uk-margin-remove">1</span></div>
											<div class="w90">
												<div class="uk-padding-small">
													<a href="#" class="uk-link-reset uk-text-bold uk-h5 uk-margin-bottom uk-margin-remove-top">IIT Mumbai 'gag' on protests</a>

													<div class="uk-flex uk-flex-between uk-flex-bottom">
														<div><a href="#" class="uk-text-small uk-text-primary">Education</a></div>
														<div><a href="#" class="uk-button uk-button-small uk-button-bordered uk-button-primary">PIN</a></div>
													</div>
													<hr class="uk-hr uk-margin-small"/>
													<div class="uk-flex uk-flex-between uk-flex-bottom uk-text-small">
														<div><span uk-icon="icon:quote-right;ratio:0.9" class="uk-margin-small-right"></span><span class="uk-text-bold">34523523</span></div>
														<div><span uk-icon="icon:clock;ratio:0.9" class="uk-margin-small-right"></span><span>30-01-20 03:41 AM</span></div>
													</div>
												</div>
											</div>
										</li>

										<li class="uk-grid uk-grid-collapse uk-grid-match uk-margin-bottom uk-box-shadow-small">
											<div class="w10 uk-background-sky uk-flex uk-flex-middle uk-flex-center uk-text-bold uk-text-center"><span class="uk-h4 uk-margin-remove">2</span></div>
											<div class="w90">
												<div class="uk-padding-small">
													<a href="#" class="uk-link-reset uk-text-bold uk-h5 uk-margin-bottom uk-margin-remove-top">Kangana Runout makes another narcist movie, Rangoli says it deserves oscar</a>

													<div class="uk-flex uk-flex-between uk-flex-bottom">
														<div><a href="#" class="uk-text-small uk-text-primary">Entertainment</a></div>
														<div><a href="#" class="uk-button uk-button-small uk-button-bordered uk-button-primary">PIN</a></div>
													</div>
													<hr class="uk-hr uk-margin-small"/>
													<div class="uk-flex uk-flex-between uk-flex-bottom uk-text-small">
														<div><span uk-icon="icon:quote-right;ratio:0.9" class="uk-margin-small-right"></span><span class="uk-text-bold">34523523</span></div>
														<div><span uk-icon="icon:clock;ratio:0.9" class="uk-margin-small-right"></span><span>30-01-20 03:41 AM</span></div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div><!-- uk-card -->
				</div><!-- uk-container -->	
			</div><!-- sorter-body -->
			<!-- bottom-toolbar -->
			<div class="actions-toolbar-bottom uk-flex uk-flex-between uk-flex-middle" style="height: 50px; padding-top: 10px">
				<div class="uk-margin-left">
					<button type="button" class="uk-button uk-button-large uk-button-danger">Delete</button>
				</div>
				<div class="uk-margin-right">
					<button type="button" class="uk-button uk-button-large uk-button-default uk-margin-right">Cancel</button>
					<button type="button" class="uk-button uk-button-large uk-button-success">Save</button>
				</div>
			</div>
		</div><!-- inner div -->
	</div><!-- uk-width-expand -->
</div><!-- main-layout -->

<?php require '_footer.php';?>