<?php require '_header.php';?>
<div class="uk-grid uk-grid-collapse uk-grid-match">
	<div class="uk-width-auto@s uk-width-1-1 uk-visible@s sidebar toggle">
		<?php require '_sidenav.php';?>
	</div>
	<div class="uk-width-expand@s uk-width-1-1 main_content">
		<div class="collection-content">
			<div class="collection-nav">
				<!-- Top nav -->
				<div class="uk-card uk-card-default uk-padding-small">
					<div class="uk-flex uk-flex-between uk-flex-middle">
						<div class="w20">
							<a class="toggle uk-margin-small-right uk-link-reset" uk-toggle="target: .toggle" hidden>
						        <span uk-icon="icon:arrow-right;ratio:1.25"></span>
						    </a>
							<h1 class="uk-h3 uk-text-uppercase uk-text-bold uk-margin-remove">Collection Manager</h1>
						</div>
						
						<div class="w10">
						    <a class="uk-link-reset uk-text-muted uk-text-small uk-margin-small-right">A.J.Smith <span uk-icon="icon:chevron-down; ratio:0.8"></span></a>
						    <div uk-dropdown="boundary: .boundary">
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
						    <a class="uk-link-reset"><img class="uk-border-circle" data-src="https://randomuser.me/api/portraits/men/9.jpg" width="38px" height="38px" uk-img></a>	
						</div>
					</div>
				</div>
				<!-- Top nav ends -->
			</div><!-- collection-nav -->
			<div class="collection-body uk-padding-small">
				<div class="uk-container">
					<div class="uk-card uk-card-default uk-padding-small">
						<!-- search -->
						<div class="uk-margin-medium uk-margin-small-bottom uk-padding-small uk-padding-remove-horizontal w70">
							<form class="uk-search uk-search-default uk-width-1-1 uk-flex uk-flex-row">
								<div class="uk-width-expand uk-position-relative">
									<span uk-search-icon></span>
								    <input class="uk-search-input uk-border-radius-no-right" type="search" placeholder="Search collection by name, ID, URL">
								</div>
								<div class="uk-width-auto search-button-wrap">
									<button class="uk-button uk-button-default uk-border-radius-no-left" type="submit">Search</button>
								</div>
							</form>	
						</div><!-- search -->

						<!-- table -->
						<table class="collection-table uk-table uk-table-hover uk-table-divider">
							<tr class="uk-background-muted">
								<th class="w5">ID</th>
								<th class="w30">Name</th>
								<th class="w20">Template</th>
								<th class="w15">Modified on</th>
								<th class="w15">Modified by</th>
								<th class="w10">Action</th>
							</tr>

							<tr>
								<td>210</td>
								<td>Home Page</td>
								<td>Home Page</td>
								<td>23-03-2020 4:09 PM</td>
								<td>Ratul Sarkar</td>
								<td><button class="uk-button uk-button-bordered uk-button-primary uk-button-small">Edit</button></td>
							</tr>
							<tr>
								<td>211</td>
								<td>Entertainment Section Page</td>
								<td>Section Page V1</td>
								<td>23-03-2020 4:09 PM</td>
								<td>Ratul Sarkar</td>
								<td><button class="uk-button uk-button-bordered uk-button-primary uk-button-small">Edit</button></td>
							</tr>
							<tr>
								<td>212</td>
								<td>Regular Article Page</td>
								<td>Article Page V1</td>
								<td>23-03-2020 4:09 PM</td>
								<td>Ratul Sarkar</td>
								<td><button class="uk-button uk-button-bordered uk-button-primary uk-button-small">Edit</button></td>
							</tr>
							<tr>
								<td>213</td>
								<td>Photo Story Article Page</td>
								<td>Article Page V2</td>
								<td>23-03-2020 4:09 PM</td>
								<td>Ratul Sarkar</td>
								<td><button class="uk-button uk-button-bordered uk-button-primary uk-button-small">Edit</button></td>
							</tr>
							<tr>
								<td>214</td>
								<td>404 Page</td>
								<td>Static Page</td>
								<td>23-03-2020 4:09 PM</td>
								<td>Ratul Sarkar</td>
								<td><button class="uk-button uk-button-bordered uk-button-primary uk-button-small">Edit</button></td>
							</tr>
							<tr>
								<td>215</td>
								<td>Topic Page</td>
								<td>Topic Page V1</td>
								<td>23-03-2020 4:09 PM</td>
								<td>Ratul Sarkar</td>
								<td><button class="uk-button uk-button-bordered uk-button-primary uk-button-small">Edit</button></td>
							</tr>
							<tr>
								<td>216</td>
								<td>Search Results Page</td>
								<td>Seach Page V1</td>
								<td>23-03-2020 4:09 PM</td>
								<td>Ratul Sarkar</td>
								<td><button class="uk-button uk-button-bordered uk-button-primary uk-button-small">Edit</button></td>
							</tr>
							<tr>
								<td>217</td>
								<td>About Us Page</td>
								<td>Static Page</td>
								<td>23-03-2020 4:09 PM</td>
								<td>Ratul Sarkar</td>
								<td><button class="uk-button uk-button-bordered uk-button-primary uk-button-small">Edit</button></td>
							</tr>
							<tr>
								<td>218</td>
								<td>Login Page</td>
								<td>Login Page V1</td>
								<td>23-03-2020 4:09 PM</td>
								<td>Ratul Sarkar</td>
								<td><button class="uk-button uk-button-bordered uk-button-primary uk-button-small">Edit</button></td>
							</tr>
						</table>
						<!-- table -->
						<hr class="uk-hr uk-margin-remove" />
						<br/>

						<!-- pagination -->
						<div class="uk-flex uk-flex-center">
							<ul class="uk-pagination" uk-margin>
							    <li class="uk-disabled"><a href="#"><span uk-pagination-previous></span></a></li>
							    <li><a href="#">1</a></li>
							    <li class="uk-disabled"><span>...</span></li>
							    <li><a href="#">4</a></li>
							    <li><a href="#">5</a></li>
							    <li><a href="#">6</a></li>
							    <li class="uk-active"><span>7</span></li>
							    <li><a href="#">8</a></li>
							    <li><a href="#">9</a></li>
							    <li><a href="#">10</a></li>
							    <li class="uk-disabled"><span>...</span></li>
							    <li><a href="#">20</a></li>
							    <li><a href="#"><span uk-pagination-next></span></a></li>
							</ul>
						</div>
						<!-- pagination -->
					</div><!-- uk-card -->
				</div><!-- uk-container -->
			</div><!-- collection-body -->
		</div><!-- collection-content -->
	</div><!-- uk-width-expand -->
</div><!-- main-layout -->

<?php require '_footer.php';?>