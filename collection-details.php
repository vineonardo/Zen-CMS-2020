<?php require '_header.php';?>
<div class="uk-grid uk-grid-collapse uk-grid-match">
	<div class="uk-width-auto@s uk-width-1-1 uk-visible@s sidebar toggle">
		<?php require '_sidenav.php';?>
	</div>
	<div class="uk-width-expand@s uk-width-1-1 main_content" uk-height-viewport style="overflow: hidden;">
		<div class="article-content uk-flex uk-flex-column uk-flex-between">
			<div class="article-nav">
				<!-- Top nav -->
				<div class="uk-card uk-card-default uk-padding-small">
					<div class="uk-flex uk-flex-left uk-flex-middle">
						<a class="toggle uk-margin-small-right uk-link-reset" uk-toggle="target: .toggle" hidden>
					        <span uk-icon="icon:arrow-right;ratio:1.25"></span>
					    </a>
						<h1 class="uk-h3 uk-text-uppercase uk-text-bold uk-margin-remove">Collection Details</h1>	
					</div>
					<hr class="uk-hr uk-margin-small" />
					<div class="uk-flex uk-flex-between uk-flex-middle">
						<div class="w15 uk-text-bold uk-h5 uk-margin-remove">
							<span class="uk-text-muted uk-text-uppercase uk-margin-small-right">Collection ID</span>
							<span class="uk-text-bold uk-text-33">32411352</span>
						</div>
						<div class="w15 uk-text-bold uk-h5 uk-margin-remove">
							<span class="uk-text-muted uk-text-uppercase uk-margin-small-right">Template</span>
							<span class="uk-text-bold uk-text-33">Home Page V1</span>
						</div>
						<div class="w30"></div>
						<div class="w40 uk-flex uk-flex-middle uk-flex-row uk-flex-right">
							
							<a href="#" class="uk-text-bold uk-h5 uk-margin-remove-vertical uk-text-muted uk-text-uppercase uk-margin-small-right uk-flex uk-flex-middle"><span uk-icon="icon:info;ratio:1.0" class="uk-margin-small-right"></span><span>Properties</span></a>
							<div class="uk-text-bold uk-h5 uk-margin-remove-vertical uk-text-33 uk-text-uppercase">
								<a href="" class="uk-button uk-border-pill uk-button-bordered uk-button-default"><span uk-icon="desktop" class="uk-margin-small-right"></span> Preview</a>
							</div>	
						</div>
					</div>
					<hr class="uk-hr uk-margin-small" />
					<div class="uk-flex uk-flex-between uk-flex-middle">
						<div class="w30">
							<ul class="tabs-custom uk-subnav uk-subnav-pill" uk-switcher="connect: #articleSwitcher; animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
								<li><a href="#">Basic</a></li>
								<li><a href="#">Configuration</a></li>
							</ul>
						</div>
						<div class="w70"></div>
					</div>
				</div>
				<!-- Top nav ends -->
			</div><!-- article-nav -->
			<div class="article-body" style="height: 72vh; overflow: hidden; margin-top: -20px">
				<div class="uk-container-fluid">
					<div class="uk-card uk-card-default uk-card-body" style="height: 73vh; overflow-y: scroll;">
						<ul id="articleSwitcher" class="uk-switcher">
							<li>
								<h2 class="uk-h3 uk-margin pb10 uk-border-bottom">Basic Information</h2>
								<form>
									<div class="uk-margin">
										<label class="uk-h4 uk-margin-small uk-display-block">Name</label>	
										<input type="text" class="uk-input w60" tabindex="1" placeholder="Set collection name here" />
									</div>
									<div class="uk-margin uk-margin-medium-bottom">
										<label class="uk-h4 uk-margin-small uk-display-block">Landing URL</label>	
										<input type="url" class="uk-input w70" tabindex="1" placeholder="" value="https://xd.adobe.com/view/24bc202a-6142-4b9d-66f9-45b793a1b6c8-528d/screen/597ddc8b-5af4-43d4-a9e5-f621f1e0e333/Edit-Collection-Basic-Page/" disabled />
									</div>

									<div class="spacer"></div>
									<h2 class="uk-h2 uk-margin pb10 uk-border-bottom">Metadata</h2>

									<div class="uk-margin">
										<label class="uk-h4 uk-margin-small">Meta Title</label>	
										<div class="uk-margin-small-top">
											<input type="text" class="uk-input w70" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />
										</div>		
									</div>
									<div class="uk-margin">
										<label class="uk-h4 uk-margin-small">Meta Description</label>	
										<div class="uk-margin-small-top">
											<textarea type="text" class="uk-textarea w70" rows="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</textarea>
										</div>		
									</div>
									<div class="uk-margin">
										<label class="uk-h4 uk-margin-small">Keywords</label>	
										<div class="uk-margin-small-top">
											<input type="text" class="uk-input w70" value="Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing elit, sed, do, eiusmod, tempor, incididunt, ut, labore, et, dolore, magna, aliqua" />
										</div>		
									</div>
									
								</form>
							</li>
							<li>
								<div class="uk-grid-small uk-grid-divider" uk-grid>
									<div class="uk-width-2-5">
										<div class="uk-flex uk-flex-middle uk-flex-between uk-border-bottom">
											<div><h2 class="uk-h4 uk-margin-remove uk-text-muted pb10 uk-text-uppercase">Widgets Panel</h2></div>
											<div class="uk-margin-small-bottom">
												<button class="uk-button uk-button-small uk-button-default" type="button">Show all <span uk-icon="icon:chevron-down"></span></button>
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
										</div>
										<div class="uk-margin-top">
											<ul class="output-list">
												<li class="uk-active uk-grid uk-grid-collapse uk-grid-match uk-margin-bottom uk-box-shadow-small">
													<div class="w10 uk-background-muted uk-flex uk-flex-middle uk-flex-center uk-text-bold uk-text-center"><span class="uk-h4 uk-margin-remove">1</span></div>
													<div class="w90">
														<div class="uk-padding-small">
															<a href="#" class="uk-link-reset uk-text-bold uk-h5 uk-margin-bottom uk-margin-remove-top">Regular day ATF version 1</a>

															<div class="uk-flex uk-flex-between uk-flex-bottom">
																<div><a href="#" class="uk-text-small uk-text-success">Enabled</a></div>
																<div><a href="#" class="uk-button uk-button-small uk-button-bordered uk-button-primary">Edit</a></div>
															</div>
														</div>
													</div>
												</li>
												<li class="uk-grid uk-grid-collapse uk-grid-match uk-margin-bottom uk-box-shadow-small">
													<div class="w10 uk-background-muted uk-flex uk-flex-middle uk-flex-center uk-text-bold uk-text-center"><span class="uk-h4 uk-margin-remove">2</span></div>
													<div class="w90">
														<div class="uk-padding-small">
															<a href="#" class="uk-link-reset uk-text-bold uk-h5 uk-margin-bottom uk-margin-remove-top">Regular day ATF version 1</a>

															<div class="uk-flex uk-flex-between uk-flex-bottom">
																<div><a href="#" class="uk-text-small uk-text-muted">Disabled</a></div>
																<div><a href="#" class="uk-button uk-button-small uk-button-bordered uk-button-primary">Edit</a></div>
															</div>
														</div>
													</div>
												</li>
												<li class="uk-grid uk-grid-collapse uk-grid-match uk-margin-bottom uk-box-shadow-small">
													<div class="w10 uk-background-muted uk-flex uk-flex-middle uk-flex-center uk-text-bold uk-text-center"><span class="uk-h4 uk-margin-remove">3</span></div>
													<div class="w90">
														<div class="uk-padding-small">
															<a href="#" class="uk-link-reset uk-text-bold uk-h5 uk-margin-bottom uk-margin-remove-top">Regular day ATF version 1</a>

															<div class="uk-flex uk-flex-between uk-flex-bottom">
																<div><a href="#" class="uk-text-small uk-text-success">Enabled</a></div>
																<div><a href="#" class="uk-button uk-button-small uk-button-bordered uk-button-primary">Edit</a></div>
															</div>
														</div>
													</div>
												</li>
												<li class="uk-grid uk-grid-collapse uk-grid-match uk-margin-bottom uk-box-shadow-small">
													<div class="w10 uk-background-muted uk-flex uk-flex-middle uk-flex-center uk-text-bold uk-text-center"><span class="uk-h4 uk-margin-remove">4</span></div>
													<div class="w90">
														<div class="uk-padding-small">
															<a href="#" class="uk-link-reset uk-text-bold uk-h5 uk-margin-bottom uk-margin-remove-top">Regular day ATF version 1</a>

															<div class="uk-flex uk-flex-between uk-flex-bottom">
																<div><a href="#" class="uk-text-small uk-text-muted">Disabled</a></div>
																<div><a href="#" class="uk-button uk-button-small uk-button-bordered uk-button-primary">Edit</a></div>
															</div>
														</div>
													</div>
												</li>
												<li class="uk-grid uk-grid-collapse uk-grid-match uk-margin-bottom uk-box-shadow-small">
													<div class="w10 uk-background-muted uk-flex uk-flex-middle uk-flex-center uk-text-bold uk-text-center"><span class="uk-h4 uk-margin-remove">5</span></div>
													<div class="w90">
														<div class="uk-padding-small">
															<a href="#" class="uk-link-reset uk-text-bold uk-h5 uk-margin-bottom uk-margin-remove-top">Regular day ATF version 1</a>

															<div class="uk-flex uk-flex-between uk-flex-bottom">
																<div><a href="#" class="uk-text-small uk-text-success">Enabled</a></div>
																<div><a href="#" class="uk-button uk-button-small uk-button-bordered uk-button-primary">Edit</a></div>
															</div>
														</div>
													</div>
												</li>
												<li class="uk-grid uk-grid-collapse uk-grid-match uk-margin-bottom uk-box-shadow-small">
													<div class="w10 uk-background-muted uk-flex uk-flex-middle uk-flex-center uk-text-bold uk-text-center"><span class="uk-h4 uk-margin-remove">6</span></div>
													<div class="w90">
														<div class="uk-padding-small">
															<a href="#" class="uk-link-reset uk-text-bold uk-h5 uk-margin-bottom uk-margin-remove-top">Regular day ATF version 1</a>

															<div class="uk-flex uk-flex-between uk-flex-bottom">
																<div><a href="#" class="uk-text-small uk-text-muted">Disabled</a></div>
																<div><a href="#" class="uk-button uk-button-small uk-button-bordered uk-button-primary">Edit</a></div>
															</div>
														</div>
													</div>
												</li>
												<li class="uk-grid uk-grid-collapse uk-grid-match uk-margin-bottom uk-box-shadow-small">
													<div class="w10 uk-background-muted uk-flex uk-flex-middle uk-flex-center uk-text-bold uk-text-center"><span class="uk-h4 uk-margin-remove">7</span></div>
													<div class="w90">
														<div class="uk-padding-small">
															<a href="#" class="uk-link-reset uk-text-bold uk-h5 uk-margin-bottom uk-margin-remove-top">Regular day ATF version 1</a>

															<div class="uk-flex uk-flex-between uk-flex-bottom">
																<div><a href="#" class="uk-text-small uk-text-success">Enabled</a></div>
																<div><a href="#" class="uk-button uk-button-small uk-button-bordered uk-button-primary">Edit</a></div>
															</div>
														</div>
													</div>
												</li>
												<li class="uk-grid uk-grid-collapse uk-grid-match uk-margin-bottom uk-box-shadow-small">
													<div class="w10 uk-background-muted uk-flex uk-flex-middle uk-flex-center uk-text-bold uk-text-center"><span class="uk-h4 uk-margin-remove">8</span></div>
													<div class="w90">
														<div class="uk-padding-small">
															<a href="#" class="uk-link-reset uk-text-bold uk-h5 uk-margin-bottom uk-margin-remove-top">Regular day ATF version 1</a>

															<div class="uk-flex uk-flex-between uk-flex-bottom">
																<div><a href="#" class="uk-text-small uk-text-muted">Disabled</a></div>
																<div><a href="#" class="uk-button uk-button-small uk-button-bordered uk-button-primary">Edit</a></div>
															</div>
														</div>
													</div>
												</li>
												<li class="uk-grid uk-grid-collapse uk-grid-match uk-margin-bottom uk-box-shadow-small">
													<div class="w10 uk-background-muted uk-flex uk-flex-middle uk-flex-center uk-text-bold uk-text-center"><span class="uk-h4 uk-margin-remove">9</span></div>
													<div class="w90">
														<div class="uk-padding-small">
															<a href="#" class="uk-link-reset uk-text-bold uk-h5 uk-margin-bottom uk-margin-remove-top">Regular day ATF version 1</a>

															<div class="uk-flex uk-flex-between uk-flex-bottom">
																<div><a href="#" class="uk-text-small uk-text-success">Enabled</a></div>
																<div><a href="#" class="uk-button uk-button-small uk-button-bordered uk-button-primary">Edit</a></div>
															</div>
														</div>
													</div>
												</li>
												<li class="uk-grid uk-grid-collapse uk-grid-match uk-margin-bottom uk-box-shadow-small">
													<div class="w10 uk-background-muted uk-flex uk-flex-middle uk-flex-center uk-text-bold uk-text-center"><span class="uk-h4 uk-margin-remove">10</span></div>
													<div class="w90">
														<div class="uk-padding-small">
															<a href="#" class="uk-link-reset uk-text-bold uk-h5 uk-margin-bottom uk-margin-remove-top">Regular day ATF version 1</a>

															<div class="uk-flex uk-flex-between uk-flex-bottom">
																<div><a href="#" class="uk-text-small uk-text-muted">Disabled</a></div>
																<div><a href="#" class="uk-button uk-button-small uk-button-bordered uk-button-primary">Edit</a></div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="uk-width-3-5">
										<h2 class="uk-h4 uk-margin-remove uk-text-muted pb10 uk-text-uppercase uk-border-bottom">Configure Widget</h2>	
										<div class="uk-margin">
											<h3 class="uk-h4">Regular Day ATF Version 1</h3>
											<div class="uk-width-1-1 uk-flex uk-flex-middle uk-margin-top">
												<div class="uk-margin-small-right uk-text-muted uk-text-bold">Status</div>
												<label class="uk-switch uk-switch-small" for="default-2">
										          <input type="checkbox" id="default-2" checked>
										          <div class="uk-switch-slider"></div>
										        </label>
											</div>
										</div>
										<div class="uk-margin w60">
											<div class="uk-margin-small-bottom"><label class="uk-text-meta uk-text-bold">Sorter 1</label></div>
											<select class="uk-select">
												<option>Home Page ATF - 234</option>
											</select>
										</div>
										<div class="uk-margin w60">
											<div class="uk-margin-small-bottom"><label class="uk-text-meta uk-text-bold">Sorter 2</label></div>
											<select class="uk-select">
												<option>Home Page More News - 837</option>
											</select>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div><!-- uk-card -->
				</div><!-- uk-container -->	
			</div><!-- article-body -->
			<div class="article-footer">
				<div class="actions-toolbar-bottom uk-flex uk-flex-between uk-flex-middle">
					<div class="uk-margin-left">
						<button type="button" class="uk-button uk-button-danger" uk-toggle="target:#modal-cancel">Cancel</button>
					</div>
					<div class="uk-margin-left">
						<button type="button" class="uk-button uk-button-success uk-margin-right" uk-toggle="target:#toast-save; animation: uk-animation-slide-right">Save</button>
					</div>
				</div>
				
				<!-- uk-model -->
				<div id="modal-cancel" uk-modal>
				    <div class="uk-modal-dialog uk-modal-body uk-position-relative uk-width-large">
				        <button class="uk-modal-close uk-position-top-right uk-position-small" type="button" uk-close></button>

				        <h4 class="uk-h5">Are you sure you want to discard the changes?</h4>
				        <p class="uk-text-meta">All the changes done on the collection, since the last saved version, will be discarded if yes is selected.</p>

				        <div class="uk-grid uk-grid-small uk-margin-small">
				        	<div class="uk-width-3-5">
				        		<button class="uk-button uk-button-danger w100">Yes, cancel</button>
				        	</div>
				        	<div class="uk-width-2-5">
				        		<button class="uk-button uk-button-default w100 uk-modal-close">No</button>
				        	</div>
				        </div>
				    </div>
				</div>
				<!-- end model -->

				<!-- Toast uk-model -->
				<div id="toast-save" class="uk-toast uk-toast-success uk-background-white uk-width-large uk-box-shadow-large uk-padding-small" hidden>
					<div class="uk-position-relative">
						<button class="uk-position-top-right" type="button" uk-close uk-toggle="target:#toast-save; animation: uk-animation-slide-right"></button>
				        <h4 class="uk-h4 uk-text-uppercase uk-margin-remove uk-margin-small-bottom">Success</h4>
				        <p class="uk-text-meta">The changes to this collection have been saved.</p>	
					</div>
				</div>
				<!-- end model -->

			</div><!-- article-footer -->
		</div><!-- inner div -->
	</div><!-- uk-width-expand -->
</div><!-- main-layout -->



<?php require '_footer.php';?>