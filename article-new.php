<?php require '_header.php';?>
<div class="uk-grid uk-grid-collapse uk-grid-match">
	<div class="uk-width-auto@s uk-width-1-1 uk-visible@s sidebar toggle">
		<?php require '_sidenav.php';?>
	</div>
	<div class="uk-width-expand@s uk-width-1-1 main_content">
		<div>
			<!-- Article Top Nav -->
			<div class="uk-background-white topnav uk-box-shadow-small">
				<div class="uk-flex uk-flex-row uk-flex-middle">
					<a class="toggle uk-margin-small-right uk-link-reset" uk-toggle="target: .toggle" hidden>
				        <span uk-icon="icon:arrow-right;ratio:1.25"></span>
				    </a>

					<h1 class="uk-h3 uk-text-uppercase uk-text-bold uk-margin-remove">Article Details</h1>
				</div>
				<div class="uk-grid uk-grid-small">
					<div class="uk-width-1-3"></div>
					<div class="uk-width-1-3"><!-- empty --></div>
					<div class="uk-width-1-3 uk-flex uk-flex-right uk-flex-middle boundary"></div>
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