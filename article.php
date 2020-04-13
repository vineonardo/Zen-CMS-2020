<?php require '_header.php';?>
<div class="uk-grid uk-grid-collapse uk-grid-match">
	<div class="uk-width-auto@s uk-width-1-1 uk-visible@s sidebar toggle">
		<?php require '_sidenav.php';?>
	</div>
	<div class="uk-width-expand@s uk-width-1-1 main_content">
		<div>
			<!-- Article Top Nav -->
			<div class="uk-background-white topnav uk-box-shadow-small">
				<div class="uk-grid uk-grid-small">
					
					<div class="uk-width-1-3 uk-flex uk-flex-row uk-flex-middle">
						<a class="toggle uk-margin-small-right uk-link-reset" uk-toggle="target: .toggle" hidden>
					        <span uk-icon="icon:arrow-right;ratio:1.25"></span>
					    </a>

						<h1 class="uk-h3 uk-text-uppercase uk-text-bold uk-margin-remove">Article Details</h1>
					</div>
					
					<div class="uk-width-1-3"><!-- empty --></div>

					<div class="uk-width-1-3 uk-flex uk-flex-right uk-flex-middle boundary">

						<button class="uk-button uk-button-success uk-button-small" type="button">New Article <span uk-icon="icon:chevron-down; ratio:0.8"></span></button>
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

					    <div class="uk-margin-small-left uk-margin-small-right uk-text-meta">|</div>

					    <div>
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
					    </div>
					    
					    <a class="uk-link-reset"><img class="uk-border-circle" data-src="https://randomuser.me/api/portraits/men/9.jpg" width="38px" height="38px" uk-img></a>

					</div>
				</div>
			</div>
			<!-- Article Top Nav End-->
			<div class="uk-container uk-margin-top">
				<div class="uk-card uk-card-default uk-card-body">
					
					
				</div>
			</div>	
		</div>
	</div>
</div><!-- main-layout -->
<?php require '_footer.php';?>