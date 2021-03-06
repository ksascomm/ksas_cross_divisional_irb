					<footer class="footer hide-for-print" role="contentinfo">
						<div id="inner-footer" class="row">
							<div class="small-12 small-centered columns">
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>
		    				</div>
					  		<div class="row">		   
						  		<div class="small-12 small-centered medium-4 columns">
					  				<a href="http://www.jhu.edu" target="_blank"><img class="jhushield" src="<?php echo get_template_directory_uri() ?>/assets/images/jhu-horizontal.png" alt="Johns Hopkins University"/></a>
					  			</div>	
					  		</div>		    				
		    				<div class="row" id="copyright" role="content-info">
								<div class="small-12 columns">
									<?php $theme_option = flagship_sub_get_global_options()?>
  									<p>&copy; <?php print date('Y'); ?> Johns Hopkins University, <?php echo $theme_option['flagship_sub_copyright'];?></p>
					  			</div>
					  		</div>
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->