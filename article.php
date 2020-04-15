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
						<h1 class="uk-h3 uk-text-uppercase uk-text-bold uk-margin-remove">Article Details</h1>	
					</div>
					<hr class="uk-hr uk-margin-small" />
					<div class="uk-flex uk-flex-between uk-flex-middle">
						<div class="w15 uk-text-bold uk-h5 uk-margin-remove">
							<span class="uk-text-muted uk-text-uppercase uk-margin-small-right">Article ID</span>
							<span class="uk-text-bold uk-text-33">32411352</span>
						</div>
						<div class="w15 uk-text-bold uk-h5 uk-margin-remove">
							<span class="uk-text-muted uk-text-uppercase uk-margin-small-right">Section</span>
							<span class="uk-text-bold uk-text-33">Blank</span>
						</div>
						<div class="w30"></div>
						<div class="w40 uk-flex uk-flex-middle uk-flex-row uk-flex-right">
							
							<div class="uk-text-bold uk-h5 uk-margin-remove-vertical uk-text-muted uk-text-uppercase uk-margin-small-right">Assigned to</div>
							<div class="uk-text-bold uk-h5 uk-margin-remove-vertical uk-text-33 uk-text-uppercase">
								<a href="" class="uk-button uk-border-pill uk-button-bordered uk-button-default">Anjan</a><span class="uk-margin-small-left">+2</span>
							</div>	
							<div class="w5"><!-- spacer --></div>
							<button class="uk-button uk-button-default uk-background-muted">Draft</button>
							<div class="w5"><!-- spacer --></div>
							<span uk-icon="icon:pencil;ratio:1.5"></span>
							<span class="uk-text-bold uk-h5 uk-margin-remove-vertical uk-text-muted uk-text-uppercase uk-margin-small-left">Editing</span>
						</div>
					</div>
					<hr class="uk-hr uk-margin-small" />
					<div class="uk-flex uk-flex-between uk-flex-middle">
						<div class="w30">
							<ul class="tabs-custom uk-subnav uk-subnav-pill" uk-switcher="connect: #articleSwitcher; animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
								<li><a href="#">Content</a></li>
								<li><a href="#">More Information</a></li>
							</ul>
						</div>
						<div class="w30"></div>
						<div class="w40 uk-flex uk-flex-middle uk-flex-right uk-flex-row">
							<div class="uk-margin-right">
								<div class="uk-text-bold uk-h5 uk-margin-remove-vertical uk-text-33 uk-text-uppercase">
									<a href="" class="uk-button uk-border-pill uk-button-bordered uk-button-default"><span uk-icon="icon:forward;ratio:1.0;" class="uk-margin-small-right"></span> Preview</a>
								</div>		
							</div>
							
							<div class="uk-margin-right">
								<button class="uk-button uk-button-default" type="button"><span class="uk-margin-small-right" uk-icon="icon:check;ratio:0.65"></span> Assign To</button>
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
								<button class="uk-button uk-button-default uk-background-muted" type="button">More <span class="uk-margin-small-left" uk-icon="icon:chevron-down;ratio:0.65"></span></button>
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
					</div>
				</div>
				<!-- Top nav ends -->
			</div><!-- article-nav -->
			<div class="article-body" style="height: 72vh; overflow: hidden; margin-top: -20px">
				<div class="uk-container-fluid">
					<div class="uk-grid uk-grid-small uk-grid-match">
						<div class="uk-width-3-4" style="height:72vh; overflow-y: auto; overflow-x: hidden;">
							<div class="uk-card uk-card-default uk-card-body">
								<ul id="articleSwitcher" class="uk-switcher">
									<li>
										<form>
											<div class="uk-margin">
												<div class="uk-flex uk-flex-middle uk-flex-between">
													<label class="uk-h4 uk-margin-small">Headline *</label>	
													<span class="uk-text-small">0/200</span>
												</div>
												<input type="text" class="uk-input" tabindex="1" placeholder="Set article headline here" />
											</div>
											<div class="uk-margin">
												<div class="uk-flex uk-flex-middle uk-flex-between">
													<label class="uk-h4 uk-margin-small">Display Headline</label>	
													<span class="uk-text-small">0/200</span>
												</div>
												<input type="text" class="uk-input" tabindex="1" placeholder="Set article display headline here" />
											</div>
											<div class="uk-margin">
												<div class="uk-flex uk-flex-middle uk-flex-between">
													<label class="uk-h4 uk-margin-small">Strap</label>	
													<span class="uk-text-small">0/200</span>
												</div>
												<input type="text" class="uk-input" tabindex="1" placeholder="Set article strap here" />
											</div>
											<div class="uk-margin">
												<div class="uk-flex uk-flex-middle uk-flex-between">
													<label class="uk-h4 uk-margin-small">Kicker *</label>	
													<span class="uk-text-small">0/200</span>
												</div>
												<input type="text" class="uk-input" tabindex="1" placeholder="Set article kicker here" />
											</div>
											<div class="uk-margin-medium">
												<label class="uk-h4 uk-margin-small">Lead Image</label>	
												<div class="uk-grid uk-grid-small uk-margin-small-top">
													<div class="uk-width-2-3">
														<div class="w100 uk-height-medium lead-image"></div>
													</div>
													<div class="uk-width-1-3">
														<div class="uk-margin-small">
															<button class="uk-button uk-button-default">New Image</button>
														</div>
														<div>
															<button class="uk-button uk-button-default" disabled>Edit Image</button>
														</div>														
													</div>
												</div>
											</div>
											<div class="uk-margin"><!-- if disabled, add uk-text-muted class to label -->
												<div class="uk-flex uk-flex-middle uk-flex-between">
													<label class="uk-h4 uk-margin-small uk-text-muted">Caption</label>	
													<span class="uk-text-small">0/140</span>
												</div>
												<input type="text" class="uk-input" tabindex="1" placeholder="Add image caption here" disabled/>
											</div>
											<div class="uk-margin">
												<div class="uk-flex uk-flex-middle uk-flex-between">
													<label class="uk-h4 uk-margin-small uk-text-muted">Image Attribution</label>	
													<span class="uk-text-small">0/140</span>
												</div>
												<input type="text" class="uk-input" tabindex="1" placeholder="Add image attribution here" disabled/>
											</div>

											<div class="uk-margin uk-margin-medium-top">
												<label class="uk-h4 uk-margin-small">Author</label>	
												<div class="uk-text-meta">First author will be the primary author.</div>
												<div class="uk-grid uk-grid-small uk-margin-small-top">
													<div class="uk-width-2-3">
														<select class="uk-select w100"></select>
													</div>
													<div class="uk-width-1-3">
														<div class="uk-margin-small">
															<button class="uk-button uk-button-default">Add New Author</button>
														</div>
													</div>
													<div class="uk-width-1-1 uk-flex uk-flex-middle uk-margin-top">
														<div class="uk-margin-small-right uk-text-bold">Show Primary Author Image </div>
														<label class="uk-switch uk-switch-small" for="default-2">
												          <input type="checkbox" id="default-2" checked>
												          <div class="uk-switch-slider"></div>
												        </label>
													</div>
												</div>
											</div>

											<div class="uk-margin">
												<label class="uk-h4 uk-margin-small">Location</label>	
												<div class="uk-grid uk-grid-small uk-margin-small-top">
													<div class="uk-width-2-3">
														<select class="uk-select w100"></select>
													</div>
													<div class="uk-width-1-3">
														<div class="uk-margin-small">
															<button class="uk-button uk-button-default">Add New Location</button>
														</div>
													</div>
												</div>
											</div>
											<div class="uk-margin-medium">
												<label class="uk-h4">Article Body</label>
												<hr class="uk-hr"/>
												<div class="uk-flex uk-flex-between">
													<div class="uk-text-bold uk-text-muted">Text</div>
													<div>
														<ul class="uk-iconnav">
														    <li class="uk-margin-right"><a href="#" uk-icon="icon: chevron-down"></a></li>
														    <li class="uk-margin-right"><a href="#" uk-icon="icon: chevron-up"></a></li>
														    <li><a href="#" uk-icon="icon: minus-circle"></a></li>
														</ul>
													</div>
												</div>
												<hr class="uk-hr"/>
												<textarea cols="30" rows="7" class="uk-textarea" placeholder="Add article body here"></textarea>
												<div class="uk-flex uk-flex-between uk-margin-top">
													<div class="text-icons w70">
														<!-- https://icongr.am/material/format-header-1.svg -->
														<ul class="uk-iconnav w90 uk-flex uk-flex-between rtf-controls">
															<li><a href="#">
																<img src="https://icongr.am/material/format-size.svg?color=666666" uk-svg width="24" />
															</a></li>
															<li><a href="#">
																<img src="https://icongr.am/material/format-font.svg?color=666666" uk-svg width="24" />
															</a></li>
															<li><a href="#">
																<img src="https://icongr.am/material/image.svg?color=666666" uk-svg width="24" />
															</a></li>
															<li><a href="#">
																<img src="https://icongr.am/material/bookmark-multiple.svg?color=666666" uk-svg width="24" />
															</a></li>
															<li><a href="#">
																<img src="https://icongr.am/material/share-variant.svg?color=666666" uk-svg width="24" />
															</a></li>
															<li><a href="#">
																<img src="https://icongr.am/material/youtube.svg?color=666666" uk-svg width="24" />
															</a></li>
															<li><a href="#">
																<img src="https://icongr.am/material/format-quote-open.svg?color=666666" uk-svg width="30" />
															</a></li>
															<li><a href="#">
																<img src="https://icongr.am/material/code-tags.svg?color=666666" uk-svg width="30" />
															</a></li>
															<li><a href="#">
																<img src="https://icongr.am/material/chart-timeline-variant.svg?color=666666" uk-svg width="30" />
															</a></li>
															<li><a href="#">
																<img src="https://icongr.am/material/comment-multiple.svg?color=666666" uk-svg width="24" />
															</a></li>
														</ul>
													</div>
													<div>
														<button class="uk-button uk-button-default uk-background-muted" type="button">More <span class="uk-margin-small-left" uk-icon="icon:chevron-down;ratio:0.65"></span></button>
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
											</div>
										</form>
									</li>
									<li>
										<h2 class="uk-h2 uk-margin pb10 uk-border-bottom">Metadata</h2>
										<div class="uk-margin">
											<div class="w90">
												<label class="uk-h4 uk-margin-small">Section *</label>	
												<div class="uk-text-meta">First section will be the primary section.</div>
												<div class="uk-margin-small-top">
													<!-- <select class="uk-select w60" placeholder="Search and add sections"></select> -->
													<input type="text" class="uk-select w60" placeholder="Search and add sections" />
												</div>	
											</div>
											
											<hr class="uk-hr uk-margin" />

											<div class="uk-margin w90">
												<div class="uk-flex uk-flex-middle uk-flex-between">
													<label class="uk-h4 uk-margin-small">Meta Title *</label>	
													<span class="uk-text-small">0/200</span>
												</div>
												<input type="text" class="uk-input" tabindex="1" placeholder="should be autopopulated by headline" />
											</div>
											<div class="uk-margin w90">
												<div class="uk-flex uk-flex-middle uk-flex-between">
													<label class="uk-h4 uk-margin-small">Meta Description *</label>	
													<span class="uk-text-small">0/200</span>
												</div>
												<input type="text" class="uk-input" tabindex="1" placeholder="should be autopopulated by strap" />
											</div>
											<div class="uk-margin w90">
												<div class="uk-flex uk-flex-middle uk-flex-between">
													<label class="uk-h4 uk-margin-small">Article Slug</label>	
													<span class="uk-text-small">0/200</span>
												</div>
												<input type="text" class="uk-input" tabindex="1" placeholder="Article slug should be displayed here" disabled />
											</div>
											<div class="uk-margin w90">
												<div class="uk-flex uk-flex-middle uk-flex-between">
													<label class="uk-h4 uk-margin-small">Canonical URL</label>	
													<span class="uk-text-small">0/200</span>
												</div>
												<div class="uk-position-relative">
													<input type="text" class="uk-input" tabindex="1" placeholder="Article canonicle should be displayed here" disabled/>
													<a href="" class="uk-position-center-right-out uk-margin-small-left">
														<img class="icon-outside" src="https://icongr.am/material/content-copy.svg?color=666666&size=24" uk-svg/>
													</a>
												</div>
											</div>
											<div class="uk-margin w90">
												<div class="uk-flex uk-flex-middle uk-flex-between">
													<div class="uk-h4 uk-margin-remove">Tags *</div>
													<div>
														<button class="uk-button uk-button-default">Add new tag</button>
													</div>
												</div>
												<input type="text" class="uk-select w100 uk-margin" placeholder="Search and add tags" />
											</div>

											<div class="uk-margin w90">
												<label class="uk-h4 uk-margin-small">SEO Keywords</label>
												<input type="text" class="uk-input uk-margin-small-top" placeholder="Type and add keywords" />
											</div>

											<hr class="uk-hr uk-margin-medium" />

											<div class="uk-margin uk-margin-large-bottom uk-flex uk-flex-around uk-flex-middle w95">
												<div class="uk-card uk-card-default uk-card-body w45 uk-box-shadow-small uk-border-rounded uk-flex uk-flex-between uk-flex-middle">
													<div class="uk-h5 uk-margin-remove">Index in Google</div>
													<div>
														<label class="uk-switch uk-switch-small" for="default-3">
												          <input type="checkbox" id="default-3" checked>
												          <div class="uk-switch-slider"></div>
												        </label>
													</div>
												</div>
												<div class="uk-card uk-card-default uk-card-body w45 uk-box-shadow-small uk-border-rounded uk-flex uk-flex-between uk-flex-middle">
													<div class="uk-h5 uk-margin-remove">Publish in Google News</div>
													<div>
														<label class="uk-switch uk-switch-small" for="default-4">
												          <input type="checkbox" id="default-4" checked>
												          <div class="uk-switch-slider"></div>
												        </label>
													</div>
												</div>
											</div>
										</div>

										<div class="spacer"></div>

										<div class="article-alt-content">
										<h3 class="uk-h3 uk-margin pb10 uk-border-bottom">Article Alternate Contents</h3>

										<div class="uk-margin">
											<div class="uk-flex uk-flex-bottom uk-flex-between">
												<div>
													<label class="uk-h4 uk-margin-small">Alternate display headline</label>	
													<div class="uk-text-meta uk-margin-small-top">Keep this blank to display original headline in all listing pages and widgets</div>	
												</div>
												<span class="uk-text-small">0/200</span>
											</div>
											<input type="text" class="uk-input uk-margin-small-top" tabindex="1" placeholder="Set article kicker here" />
										</div>
										<div class="uk-margin-medium">
											<label class="uk-h4 uk-margin-small">Alternate Lead Image</label>	
											<div class="uk-grid uk-grid-small uk-margin-small-top">
												<div class="uk-width-2-3">
													<div class="w100 uk-height-medium lead-image"></div>
												</div>
												<div class="uk-width-1-3">
													<div class="uk-margin-small">
														<button class="uk-button uk-button-default">New Image</button>
													</div>
													<div>
														<button class="uk-button uk-button-default" disabled>Edit Image</button>
													</div>														
												</div>
											</div>
										</div>
										</div><!-- article-alt-content -->

										<div class="spacer"></div>
										<div class="article-attributes">
											<h3 class="uk-h3 uk-margin pb10 uk-border-bottom">Article Attributes</h3>	

											<div class="uk-grid uk-grid-divider uk-grid-small" uk-grid>
												<div class="uk-width-2-3">
													<div class="uk-panel uk-panel-bordered uk-padding-small">
														<h4 class="uk-h5 uk-border-bottom pb10">Content Type</h4>
														
														<div class="uk-grid uk-grid-small uk-child-width-1-4">
															<div class="uk-margin-small uk-margin-small-top">
																<label>
																	<input type="checkbox" class="uk-checkbox" value="" />
																	<span>News</span>
																</label>	
															</div>
															<div class="uk-margin-small">
																<label>
																	<input type="checkbox" class="uk-checkbox" value="" />
																	<span>Analysis</span>
																</label>
															</div>
															<div class="uk-margin-small">
																<label>
																<input type="checkbox" class="uk-checkbox" value="" />
																<span>Photo Essay</span></label>
															</div>
															<div class="uk-margin-small">
																<label>
																<input type="checkbox" class="uk-checkbox" value="" />
																<span>Letters</span></label>
															</div>

															<div class="uk-margin-small">
																<label>
																<input type="checkbox" class="uk-checkbox" value="" checked/>
																<span>Opinion</span></label>
															</div>
															<div class="uk-margin-small">
																<label>
																<input type="checkbox" class="uk-checkbox" value="" checked/>
																<span>Photogallery</span></label>
															</div>
															<div class="uk-margin-small">
																<label>
																<input type="checkbox" class="uk-checkbox" value="" checked/>
																<span>Carricatures</span></label>
															</div>
															<div class="uk-margin-small">
																<label>
																<input type="checkbox" class="uk-checkbox" value="" checked/>
																<span>Original Video</span></label>
															</div>
														</div>
													</div>
												</div>
												<div class="uk-width-1-3">
													<div class="uk-panel uk-panel-bordered uk-padding-small">
														<h4 class="uk-h5 uk-border-bottom pb10">Content Sub-type</h4>
														<div class="uk-grid uk-child-width-1-1">
															<div>
																<label>
																	<input type="radio" class="uk-radio" name="content-subtype" />
																	<span>News based feature</span>
																</label>
															</div>
															<div class="uk-margin">
																<label>
																	<input type="radio" class="uk-radio" name="content-subtype" />
																	<span>Non News based feature</span>
																</label>
															</div>
															<div>
																<label>
																	<input type="radio" class="uk-radio" name="content-subtype" />
																	<span>Spot News</span>
																</label>
															</div>
														</div>
													</div>
												</div>
												<div class="uk-width-1-2">
													<div class="uk-panel uk-panel-bordered uk-padding-small">
														<h4 class="uk-h5 uk-border-bottom pb10">Story Elements</h4>
														<div class="uk-grid uk-grid-small uk-child-width-1-2">
															<div class="uk-margin-small uk-margin-small-top">
																<label>
																	<input type="checkbox" class="uk-checkbox" value="" />
																	<span>News</span>
																</label>	
															</div>
															<div class="uk-margin-small">
																<label>
																	<input type="checkbox" class="uk-checkbox" value="" />
																	<span>Analysis</span>
																</label>
															</div>
															<div class="uk-margin-small">
																<label>
																<input type="checkbox" class="uk-checkbox" value="" />
																<span>Photo Essay</span></label>
															</div>
															<div class="uk-margin-small">
																<label>
																<input type="checkbox" class="uk-checkbox" value="" />
																<span>Letters</span></label>
															</div>

															<div class="uk-margin-small">
																<label>
																<input type="checkbox" class="uk-checkbox" value="" checked/>
																<span>Opinion</span></label>
															</div>
															<div class="uk-margin-small">
																<label>
																<input type="checkbox" class="uk-checkbox" value="" checked/>
																<span>Photogallery</span></label>
															</div>
															<div class="uk-margin-small">
																<label>
																<input type="checkbox" class="uk-checkbox" value="" checked/>
																<span>Carricatures</span></label>
															</div>
															<div class="uk-margin-small">
																<label>
																<input type="checkbox" class="uk-checkbox" value="" checked/>
																<span>Original Video</span></label>
															</div>
														</div>
													</div>
												</div>
												<div class="uk-width-1-2">
													<div class="uk-panel uk-panel-bordered uk-padding-small">
														<h4 class="uk-h5 uk-border-bottom pb10">Story Source</h4>
														<div class="uk-grid uk-child-width-1-1">
															<div class="uk-margin-small">
																<label>
																	<input type="radio" class="uk-radio" name="content-subtype" />
																	<span>News based feature</span>
																</label>
															</div>
															<div class="uk-margin-small">
																<label>
																	<input type="radio" class="uk-radio" name="content-subtype" />
																	<span>Non News based feature</span>
																</label>
															</div>
															<div class="uk-margin-small">
																<label>
																	<input type="radio" class="uk-radio" name="content-subtype" />
																	<span>Spot News</span>
																</label>
															</div>
															<div class="uk-margin-small">
																<label>
																	<input type="radio" class="uk-radio" name="content-subtype" />
																	<span>News based feature</span>
																</label>
															</div>
															<div class="uk-margin-small">
																<label>
																	<input type="radio" class="uk-radio" name="content-subtype" />
																	<span>Non News based feature</span>
																</label>
															</div>
															<div class="uk-margin-small">
																<label>
																	<input type="radio" class="uk-radio" name="content-subtype" />
																	<span>Spot News</span>
																</label>
															</div>
														</div>
													</div>
												</div>
												<div class="uk-width-1-1">
													<hr class="uk-hr" />
													<h4 class="uk-h4">Subject Attributes</h4>

													<div class="uk-grid uk-grid-small uk-margin-small">
														<div class="uk-width-1-3">
															<div class="uk-panel uk-panel-bordered uk-margin-bottom uk-padding-small">
																<h4 class="uk-h5 uk-border-bottom pb10">Politics</h4>	
																<div class="uk-grid uk-grid-small uk-child-width-1-1">
																	<div class="uk-margin-small uk-margin-small-top">
																		<label>
																			<input type="checkbox" class="uk-checkbox" value="" />
																			<span>News</span>
																		</label>	
																	</div>
																	<div class="uk-margin-small">
																		<label>
																			<input type="checkbox" class="uk-checkbox" value="" />
																			<span>Analysis</span>
																		</label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" />
																		<span>Photo Essay</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" />
																		<span>Letters</span></label>
																	</div>

																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Opinion</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Photogallery</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Carricatures</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Original Video</span></label>
																	</div>
																</div>
															</div>
														</div>
														<div class="uk-width-1-3">
															<div class="uk-panel uk-panel-bordered uk-margin-bottom uk-padding-small">
																<h4 class="uk-h5 uk-border-bottom pb10">Scam War Conflict</h4>
																<div class="uk-grid uk-grid-small uk-child-width-1-1">
																	<div class="uk-margin-small uk-margin-small-top">
																		<label>
																			<input type="checkbox" class="uk-checkbox" value="" />
																			<span>News</span>
																		</label>	
																	</div>
																	<div class="uk-margin-small">
																		<label>
																			<input type="checkbox" class="uk-checkbox" value="" />
																			<span>Analysis</span>
																		</label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" />
																		<span>Photo Essay</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" />
																		<span>Letters</span></label>
																	</div>

																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Opinion</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Photogallery</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Carricatures</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Original Video</span></label>
																	</div>
																</div>
															</div>
														</div>
														<div class="uk-width-1-3">
															<div class="uk-panel uk-panel-bordered uk-margin-bottom uk-padding-small">
																<h4 class="uk-h5 uk-border-bottom pb10">Sports</h4>
																<div class="uk-grid uk-grid-small uk-child-width-1-1">
																	<div class="uk-margin-small uk-margin-small-top">
																		<label>
																			<input type="checkbox" class="uk-checkbox" value="" />
																			<span>News</span>
																		</label>	
																	</div>
																	<div class="uk-margin-small">
																		<label>
																			<input type="checkbox" class="uk-checkbox" value="" />
																			<span>Analysis</span>
																		</label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" />
																		<span>Photo Essay</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" />
																		<span>Letters</span></label>
																	</div>

																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Opinion</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Photogallery</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Carricatures</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Original Video</span></label>
																	</div>
																</div>
															</div>
														</div>

														<div class="uk-width-1-2">
															<div class="uk-panel uk-panel-bordered uk-margin-bottom uk-padding-small">
																<h4 class="uk-h5 uk-border-bottom pb10">Lifestyle</h4>
																<div class="uk-grid uk-grid-small uk-child-width-1-2">
																	<div class="uk-margin-small uk-margin-small-top">
																		<label>
																			<input type="checkbox" class="uk-checkbox" value="" />
																			<span>News</span>
																		</label>	
																	</div>
																	<div class="uk-margin-small">
																		<label>
																			<input type="checkbox" class="uk-checkbox" value="" />
																			<span>Analysis</span>
																		</label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" />
																		<span>Photo Essay</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" />
																		<span>Letters</span></label>
																	</div>

																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Opinion</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Photogallery</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Carricatures</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Original Video</span></label>
																	</div>
																</div>
															</div>
														</div>
														<div class="uk-width-1-2">
															<div class="uk-panel uk-panel-bordered uk-margin-bottom uk-padding-small">
																<h4 class="uk-h5 uk-border-bottom pb10">Arts</h4>
																<div class="uk-grid uk-grid-small uk-child-width-1-2">
																	<div class="uk-margin-small uk-margin-small-top">
																		<label>
																			<input type="checkbox" class="uk-checkbox" value="" />
																			<span>News</span>
																		</label>	
																	</div>
																	<div class="uk-margin-small">
																		<label>
																			<input type="checkbox" class="uk-checkbox" value="" />
																			<span>Analysis</span>
																		</label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" />
																		<span>Photo Essay</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" />
																		<span>Letters</span></label>
																	</div>

																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Opinion</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Photogallery</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Carricatures</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Original Video</span></label>
																	</div>
																</div>
															</div>
														</div>

														<div class="uk-width-2-5">
															<div class="uk-panel uk-panel-bordered uk-margin-bottom uk-padding-small">
																<h4 class="uk-h5 uk-border-bottom pb10">Misc</h4>
																<div class="uk-grid uk-grid-small uk-child-width-1-2">
																	<div class="uk-margin-small uk-margin-small-top">
																		<label>
																			<input type="checkbox" class="uk-checkbox" value="" />
																			<span>News</span>
																		</label>	
																	</div>
																	<div class="uk-margin-small">
																		<label>
																			<input type="checkbox" class="uk-checkbox" value="" />
																			<span>Analysis</span>
																		</label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" />
																		<span>Photo Essay</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" />
																		<span>Letters</span></label>
																	</div>

																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Opinion</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Photogallery</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Carricatures</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Original Video</span></label>
																	</div>
																</div>
															</div>
														</div>
														<div class="uk-width-3-5">
															<div class="uk-panel uk-panel-bordered uk-margin-bottom uk-padding-small">
																<h4 class="uk-h5 uk-border-bottom pb10">Sectors</h4>
																<div class="uk-grid uk-grid-small uk-child-width-1-3">
																	<div class="uk-margin-small uk-margin-small-top">
																		<label>
																			<input type="checkbox" class="uk-checkbox" value="" />
																			<span>News</span>
																		</label>	
																	</div>
																	<div class="uk-margin-small">
																		<label>
																			<input type="checkbox" class="uk-checkbox" value="" />
																			<span>Analysis</span>
																		</label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" />
																		<span>Photo Essay</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" />
																		<span>Letters</span></label>
																	</div>

																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Opinion</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Photogallery</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Carricatures</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Original Video</span></label>
																	</div>
																</div>
															</div>
														</div>

														<div class="uk-width-1-2">
															<div class="uk-panel uk-panel-bordered uk-margin-bottom uk-padding-small">
																<h4 class="uk-h5 uk-border-bottom pb10">Society</h4>
																<div class="uk-grid uk-grid-small uk-child-width-1-3">
																	<div class="uk-margin-small uk-margin-small-top">
																		<label>
																			<input type="checkbox" class="uk-checkbox" value="" />
																			<span>News</span>
																		</label>	
																	</div>
																	<div class="uk-margin-small">
																		<label>
																			<input type="checkbox" class="uk-checkbox" value="" />
																			<span>Analysis</span>
																		</label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" />
																		<span>Photo Essay</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" />
																		<span>Letters</span></label>
																	</div>

																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Opinion</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Photogallery</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Carricatures</span></label>
																	</div>
																	<div class="uk-margin-small">
																		<label>
																		<input type="checkbox" class="uk-checkbox" value="" checked/>
																		<span>Original Video</span></label>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- grid -->
										</div><!-- article-attributes -->
									</li>
								</ul>
							</div><!-- uk-card -->
						</div>
						<div class="uk-width-1-4" style="overflow-y: auto; overflow-x: hidden;">
							<div class="uk-card uk-card-default uk-card-body uk-overflow-auto">
								<div class="uk-h3 uk-text-muted uk-text-center">Mobile Preview</div>
							</div><!-- uk-card -->
						</div>
					</div>
				</div><!-- uk-container -->	
			</div><!-- article-body -->
			<div class="article-footer">
				<div class="actions-toolbar-bottom uk-flex uk-flex-between uk-flex-middle">
					<div class="uk-margin-left">
						<button type="button" class="uk-button uk-button-danger" uk-toggle="target:#modal-cancel">Cancel</button>
					</div>
					<div class="uk-margin-right">
						<button type="button" class="uk-button uk-button-primary uk-margin-right" uk-toggle="target:#toast-save; animation: uk-animation-slide-right">Save</button>
						<button type="button" class="uk-button uk-button-success">Save & Exit Edit Mode</button>
					</div>
				</div>
				
				<!-- uk-model -->
				<div id="modal-cancel" uk-modal>
				    <div class="uk-modal-dialog uk-modal-body uk-position-relative uk-width-large">
				        <button class="uk-modal-close uk-position-top-right uk-position-small" type="button" uk-close></button>

				        <h4 class="uk-h5">Are you sure you want to discard the changes?</h4>
				        <p class="uk-text-meta">All the changes done on the article, since the last saved version, will be discarded if yes is selected.</p>

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
				        <p class="uk-text-meta">The changes to this article have been saved.</p>	
					</div>
				</div>
				<!-- end model -->

			</div><!-- article-footer -->
		</div><!-- inner div -->
	</div><!-- uk-width-expand -->
</div><!-- main-layout -->



<?php require '_footer.php';?>