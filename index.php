<?php require '_header.php';?>
<div class="uk-grid uk-grid-collapse uk-grid-match">
	<div class="uk-width-auto@s uk-width-1-1 uk-visible@s sidebar toggle">
		<?php require '_sidenav.php';?>
	</div>
	<div class="uk-width-expand@s uk-width-1-1 main_content">
		<div>
			<?php require '_topnav.php'; ?>
			<div class="uk-container uk-margin-top">
				<div class="uk-card uk-card-default uk-card-body">
					
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

					<div class="uk-margin uk-flex uk-flex-row uk-flex-between">
						<div><strong>Filter by</strong></div>
						<div>
							<button class="uk-button uk-button-small uk-button-default" type="button">Assigned to <span uk-icon="icon:chevron-down"></span></button>
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
							<a href="#" class="uk-link-reset uk-text-small uk-text-uppercase clear-link">
								<span class="uk-margin-small-right">Clear all</span>
								<span uk-icon="icon:minus-circle;ratio:0.7"></span></a>
						</div>
					</div>

					<!-- tabs -->

					<div class="uk-margin uk-flex uk-flex-row uk-flex-between">
						<div>
							<div class="uk-button-group">
							    <a href="#" class="uk-button uk-button-primary uk-border-radius-no-right">All</a>
							    <a href="#" class="uk-button uk-button-default uk-border-radius-remove">Draft</a>
							    <a href="#" class="uk-button uk-button-default uk-border-radius-remove">Review</a>
							    <a href="#" class="uk-button uk-button-default uk-border-radius-remove">Published</a>
							    <a href="#" class="uk-button uk-button-default uk-border-radius-no-left">Deleted</a>
							</div>
						</div>
						<div class="uk-flex uk-flex-middle">
							<span class="uk-text-meta uk-margin-right">Showing 50 of 674 articles</span>
							<span>
								<button class="uk-button uk-button-small uk-button-default" type="button">Modified Date <span uk-icon="icon:chevron-down"></span></button>
								<div uk-dropdown>
								    
								</div>
							</span>
						</div>
					</div>
					
					<hr class="uk-hr" />

					<div class="list-wrap">
						
						<ul class="articles-list">
							<li class="text-article">
								<div class="uk-grid uk-grid-small">
									<div class="title uk-width-3-5">
										<h3 class="uk-h5">Lorem ipsum dolor sit amet, consectetur adipisicing elit alias possimus quae enim praesentium consequatur.</h3>
										<span class="uk-text-primary uk-text-bold">Entertainment</span>
									</div>
									
									<div class="uk-width-2-5 uk-flex uk-flex-row uk-flex-right uk-flex-middle uk-flex-between">
										<div>
											<div class="uk-label uk-label-default uk-label-large uk-text-bold">Draft</div>
										</div>

										<div class="uk-text-center">
											<div class="uk-h5 uk-margin-small"><span uk-icon="quote-right"></span> <span class="uk-margin-small-left uk-text-bold">346829</span></div>
											<div class="uk-h5 uk-margin-small uk-text-meta"><span uk-icon="pencil"></span> <span class="uk-margin-small-left">30-01-20 3:41 AM</span></div>
										</div>

										<div>
											<a href="article.php" class="uk-button uk-button-small uk-button-bordered uk-button-primary">Open</a>
									
											<a href="#" class="uk-icon-link uk-margin-small-left" uk-icon="more-vertical"></a>
											<div uk-dropdown="pos:bottom-right"></div>	
										</div>
									</div>
								</div>
							</li>
							<li class="text-article article-locked">
								<div class="uk-grid uk-grid-small">
									<div class="title uk-width-3-5">
										<h3 class="uk-h5">Lorem ipsum dolor sit amet, consectetur adipisicing elit alias possimus quae enim praesentium consequatur.</h3>
										<span class="uk-text-primary uk-text-bold">Politics</span>
									</div>
									
									<div class="uk-width-2-5 uk-flex uk-flex-row uk-flex-right uk-flex-middle uk-flex-between">
										<div>
											<div class="uk-label uk-label-warning uk-label-large uk-text-bold">Review</div>
										</div>

										<div class="uk-text-center">
											<div class="uk-h5 uk-margin-small"><span uk-icon="quote-right"></span> <span class="uk-margin-small-left uk-text-bold">346829</span></div>
											<div class="uk-h5 uk-margin-small uk-text-meta"><span uk-icon="pencil"></span> <span class="uk-margin-small-left">30-01-20 3:41 AM</span></div>
										</div>

										<div>
											<span uk-icon="icon:lock;ratio:1.1"></span>
											<a href="article.php" class="uk-button uk-button-small uk-button-bordered uk-button-primary">Open</a>
									
											<a href="#" class="uk-icon-link uk-margin-small-left" uk-icon="more-vertical"></a>
											<div uk-dropdown="pos:bottom-right"></div>	
										</div>

									</div>
								</div>
							</li>
							<li class="text-article article-locked">
								<div class="uk-grid uk-grid-small">
									<div class="title uk-width-3-5">
										<h3 class="uk-h5">Lorem ipsum dolor sit amet, consectetur adipisicing elit alias possimus quae enim praesentium consequatur.</h3>
										<span class="uk-text-primary uk-text-bold">World</span>
									</div>
									
									<div class="uk-width-2-5 uk-flex uk-flex-row uk-flex-right uk-flex-middle uk-flex-between">
										<div>
											<div class="uk-label uk-label-success uk-label-large uk-text-bold">Published</div>
										</div>

										<div class="uk-text-center">
											<div class="uk-h5 uk-margin-small"><span uk-icon="quote-right"></span> <span class="uk-margin-small-left uk-text-bold">346829</span></div>
											<div class="uk-h5 uk-margin-small uk-text-meta"><span uk-icon="pencil"></span> <span class="uk-margin-small-left">30-01-20 3:41 AM</span></div>
										</div>

										<div>
											<span uk-icon="icon:lock;ratio:1.1"></span>
											<a href="#" class="uk-button uk-button-small uk-button-bordered uk-button-primary">Open</a>
									
											<a href="#" class="uk-icon-link uk-margin-small-left" uk-icon="more-vertical"></a>
											<div uk-dropdown="pos:bottom-right"></div>	
										</div>

									</div>
								</div>
							</li>
							<li class="text-article">
								<div class="uk-grid uk-grid-small">
									<div class="title uk-width-3-5">
										<h3 class="uk-h5">Lorem ipsum dolor sit amet, consectetur adipisicing elit alias possimus quae enim praesentium consequatur.</h3>
										<span class="uk-text-primary uk-text-bold">Culture</span>
									</div>
									
									<div class="uk-width-2-5 uk-flex uk-flex-row uk-flex-right uk-flex-middle uk-flex-between">
										<div>
											<div class="uk-label uk-label-danger uk-label-large uk-text-bold">Deleted</div>
										</div>

										<div class="uk-text-center">
											<div class="uk-h5 uk-margin-small"><span uk-icon="quote-right"></span> <span class="uk-margin-small-left uk-text-bold">346829</span></div>
											<div class="uk-h5 uk-margin-small uk-text-meta"><span uk-icon="pencil"></span> <span class="uk-margin-small-left">30-01-20 3:41 AM</span></div>
										</div>

										<div>
											<a href="#" class="uk-button uk-button-small uk-button-bordered uk-button-primary">Open</a>
									
											<a href="#" class="uk-icon-link uk-margin-small-left" uk-icon="more-vertical"></a>
											<div uk-dropdown="pos:bottom-right"></div>	
										</div>

									</div>
								</div>
							</li>
							<li class="text-article">
								<div class="uk-grid uk-grid-small">
									<div class="title uk-width-3-5">
										<h3 class="uk-h5">Lorem ipsum dolor sit amet, consectetur adipisicing elit alias possimus quae enim praesentium consequatur.</h3>
										<span class="uk-text-primary uk-text-bold">Mumbai</span>
									</div>
									
									<div class="uk-width-2-5 uk-flex uk-flex-row uk-flex-right uk-flex-middle uk-flex-between">
										<div>
											<div class="uk-label uk-label-danger uk-label-large uk-text-bold">Deleted</div>
										</div>

										<div class="uk-text-center">
											<div class="uk-h5 uk-margin-small"><span uk-icon="quote-right"></span> <span class="uk-margin-small-left uk-text-bold">346829</span></div>
											<div class="uk-h5 uk-margin-small uk-text-meta"><span uk-icon="pencil"></span> <span class="uk-margin-small-left">30-01-20 3:41 AM</span></div>
										</div>

										<div>
											<a href="#" class="uk-button uk-button-small uk-button-bordered uk-button-primary">Open</a>
									
											<a href="#" class="uk-icon-link uk-margin-small-left" uk-icon="more-vertical"></a>
											<div uk-dropdown="pos:bottom-right"></div>	
										</div>

									</div>
								</div>
							</li>
						</ul>

					</div><!-- list-wrap -->

					<hr class="uk-hr" />

					<ul class="uk-pagination uk-flex-center" uk-margin>
					    <li class="uk-disabled"><a href="#"><span uk-pagination-previous></span></a></li>
					    <li class="uk-active"><span>1</span></li>
					    <li><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li><span>...</span></li>
					    <li><a href="#">5</a></li>
					    <li><a href="#">6</a></li>
					    <li><a href="#">7</a></li>
					    <li><a href="#"><span uk-pagination-next></span></a></li>
					</ul>
				</div>
			</div>	
		</div>
	</div>
</div><!-- main-layout -->
<?php require '_footer.php';?>