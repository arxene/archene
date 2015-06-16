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
                <!-- search form -->
                <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                  <input type="search" class="search-field" aria-label="Search"
                    placeholder="<?php echo esc_attr_x( 'Search…', 'placeholder' ) ?>"
                    value="<?php echo get_search_query() ?>" name="s"
                    title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                  <input type="submit" class="search-submit"
                    value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
                </form>
                
              	<?php wp_nav_menu( array( 'theme_location' => 'sidebar-menu' ) ); ?>
              </div>
          </nav>
      </div><!-- #sidebar -->