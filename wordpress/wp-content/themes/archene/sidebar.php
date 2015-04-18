				<div id="sidebar">
					<nav class="navbar navbar-default">
                    	<div class="navbar-header" style="float:none;">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#menu" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                            </button>
                        </div>
                        
                        <div id="menu" class="navbar-collapse collapse">
                        	<?php wp_nav_menu( array( 'theme_location' => 'sidebar-menu' ) ); ?>
                        </div>
                    </nav>
                </div><!-- #sidebar -->