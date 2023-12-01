<?php
/**
 * Theme Header Section for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main" class="clearfix"> <div class="inner-wrap">
 *
 * @package    ThemeGrill
 * @subpackage Spacious
 * @since      Spacious 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
        
        
	<?php
        
        
        $pagename = "";
$pagename = basename(get_permalink());
//if($pagename == "nicescore.com"){
//    $pagename="football";
//}


$urlgameIdArray = array();
$urlgameIdArray[0]=get_query_var('gameId');
$urlgameId1=explode("-", $urlgameIdArray[0]);
$urlgameId=$urlgameId1[0];
$urlteamId=$urlgameId1[1];



?>
        <?php
        if(is_numeric($urlgameId)){
   $urlTeamNamesArray = array();
$urlTeamNamesArray[0]=get_query_var('countryName');
$urlTeamNamesArray1=explode("-", $urlTeamNamesArray[0]);
$urlHomeTeamName=$urlTeamNamesArray1[0];
$urlAwayTeamName=$urlTeamNamesArray1[1];
$urlHomeTeamName=str_replace(',', ' ', $urlHomeTeamName);
$urlAwayTeamName=str_replace(',', ' ', $urlAwayTeamName);
?>
         <title><?php echo urldecode($urlHomeTeamName). " vs ". urldecode($urlAwayTeamName) . " " . urldecode(str_replace('-', ' ', get_query_var('leagueName'))); ?> - Livescore, Results and Fixtures | 24Hscore</title>
        <meta name="description" content="Get the latest updates on <?php echo urldecode($urlHomeTeamName). " vs ". urldecode($urlAwayTeamName) . " " . urldecode(str_replace('-', ' ', get_query_var('leagueName'))); ?>. Livescore, Fixtures & Results, Statistics, Standing." class="yoast-seo-meta-tag" />
             <?php
        
            }
        else if (get_query_var('leagueId') != "") {
         ?>
        <title><?php echo urldecode(str_replace('-', ' ', get_query_var('leagueName'))); ?> - Livescore, Results and Fixtures | 24Hscore</title>
        <?php
        }
        else{
        ?>
<!--        <title><?php echo $pagename;?> - Livescore, Results, Fixtures and Stats</title>-->
         <?php
        }
	/**
	 * This hook is important for wordpress plugins and other many things
	 */
	wp_head();
	?><script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>
		<script type='text/javascript' src='/wp-content/themes/spacious/js/custom.js?ver=5.9.1' id='mycustom-js'></script>
         <link rel="stylesheet" href="/wp-content/themes/spacious/css/date/classic.css" />
    <link rel="stylesheet" href="/wp-content/themes/spacious/css/date/classic.date.css" />  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PW39TX25TH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-PW39TX25TH');
</script>
</head>

<body <?php body_class(); ?>>

<?php
/**
 * WordPress function to load custom scripts after body.
 *
 * Introduced in WordPress 5.2.0
 *
 * @since Spacious 1.6.4
 */
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>

<?php do_action( 'before' ); ?>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'spacious' ); ?></a>

	<?php do_action( 'spacious_before_header' ); ?>

	<?php
	$spacious_header_display_type = get_theme_mod( 'spacious_header_display_type', 'one' );
	if ( $spacious_header_display_type === 'one' ) {
		$header_class = 'spacious-header-display-one';
	} elseif ( $spacious_header_display_type === 'four' ) {
		$header_class = 'spacious-header-display-four';
	}
	?>

	<header id="masthead" class="site-header clearfix <?php echo esc_attr( $header_class ); ?>">

		<?php if ( get_theme_mod( 'spacious_activate_top_header_bar', 0 ) == 1 ) { ?>
			<div id="header-meta">
				<div class="inner-wrap clearfix">
					<?php
					if ( get_theme_mod( 'spacious_activate_social_links', 0 ) == 1 ) {
						spacious_social_links();
					}
					?>
                    <?php
                    global $wp;
                    $text="";
                    $pagename = get_query_var('pagename');
                    if ( !$pagename ) {
                        $text="Football";
                        }
                        else{
                    $link = add_query_arg( $wp->query_string, '', home_url( $wp->request ) );
                    $text = wp_title( '', false );
                        }
                    ?>
<!--					<div class="small-info-text"><?php echo $text;?><?php spacious_header_info_text(); ?></div>-->
                                                                        <div class="small-info-text">
                                    <div class="main-header-module-settings-tooltip" aria-expanded="false">
                                        <?php // echo do_shortcode('[gtranslate]'); ?>
<!--   <button class="main-header-module-settings-button">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16">
         <g fill="#ffffff" fill-rule="nonzero">
            <path d="M15.181 6.32l-1.123-.19a6.341 6.341 0 0 0-.451-1.09l.662-.926a.985.985 0 0 0-.107-1.273l-.996-.996a.981.981 0 0 0-1.27-.107l-.93.662a6.275 6.275 0 0 0-1.13-.465L9.65.825A.987.987 0 0 0 8.673 0H7.266a.987.987 0 0 0-.976.826l-.194 1.136c-.374.117-.738.27-1.086.458l-.919-.662a.981.981 0 0 0-.575-.184.975.975 0 0 0-.698.291l-1 .996a.99.99 0 0 0-.107 1.274l.669.939c-.184.35-.331.715-.445 1.093l-1.11.187A.987.987 0 0 0 0 7.33v1.407c0 .485.348.896.826.976l1.136.194c.117.374.27.738.458 1.086l-.659.916a.985.985 0 0 0 .107 1.273l.996.996a.981.981 0 0 0 1.27.107l.94-.668c.337.177.692.32 1.056.434l.187 1.123c.08.478.491.826.976.826h1.41a.987.987 0 0 0 .976-.826l.191-1.123a6.341 6.341 0 0 0 1.09-.45l.925.661c.168.12.368.184.575.184a.981.981 0 0 0 .699-.291l.996-.996a.99.99 0 0 0 .107-1.273l-.662-.93c.184-.35.338-.715.451-1.09l1.123-.186A.987.987 0 0 0 16 8.704V7.296a.975.975 0 0 0-.819-.976zm-.077 2.384c0 .043-.03.08-.073.086l-1.404.234a.449.449 0 0 0-.361.331 5.35 5.35 0 0 1-.582 1.4.452.452 0 0 0 .02.492l.826 1.163a.091.091 0 0 1-.01.114l-.996.996a.085.085 0 0 1-.064.027.082.082 0 0 1-.05-.017l-1.16-.826a.452.452 0 0 0-.49-.02 5.35 5.35 0 0 1-1.401.582.444.444 0 0 0-.331.36l-.238 1.405a.087.087 0 0 1-.086.073H7.296a.087.087 0 0 1-.087-.073l-.233-1.404a.449.449 0 0 0-.331-.361 5.556 5.556 0 0 1-1.37-.562.463.463 0 0 0-.228-.06.44.44 0 0 0-.26.084l-1.17.832a.1.1 0 0 1-.05.017.09.09 0 0 1-.064-.027l-.996-.996a.09.09 0 0 1-.01-.114l.822-1.153a.458.458 0 0 0 .02-.494 5.3 5.3 0 0 1-.588-1.398.458.458 0 0 0-.361-.33L.976 8.824a.087.087 0 0 1-.074-.087V7.33c0-.044.03-.08.074-.087l1.394-.234c.177-.03.32-.16.364-.334.124-.492.314-.966.572-1.404a.446.446 0 0 0-.024-.488l-.832-1.17a.091.091 0 0 1 .01-.114l.996-.996a.085.085 0 0 1 .064-.026c.02 0 .036.006.05.016l1.153.823c.147.103.34.11.494.02a5.3 5.3 0 0 1 1.398-.589c.17-.046.3-.187.33-.36L7.186.972a.087.087 0 0 1 .087-.074H8.68c.044 0 .08.03.087.074l.234 1.393c.03.178.16.321.334.365.505.127.986.324 1.434.588.154.09.344.084.491-.02l1.154-.829a.1.1 0 0 1 .05-.017.09.09 0 0 1 .063.027l.996.996a.09.09 0 0 1 .01.114l-.825 1.16a.452.452 0 0 0-.02.49c.26.439.454.91.581 1.401a.444.444 0 0 0 .361.331l1.404.238a.087.087 0 0 1 .073.086v1.408h-.003z"></path>
            <path d="M8 4C5.793 4 4 5.793 4 8s1.793 4 4 4 4-1.793 4-4-1.793-4-4-4zm0 6.955A2.956 2.956 0 0 1 5.045 8 2.956 2.956 0 0 1 8 5.045 2.956 2.956 0 0 1 10.955 8 2.956 2.956 0 0 1 8 10.955z"></path>
         </g>
      </svg>
   </button>-->
</div>    
                                        
                                    </div>

					<nav class="small-menu" class="clearfix">
						<?php
						if ( has_nav_menu( 'header' ) ) {
							wp_nav_menu( array( 'theme_location' => 'header', 'depth' => -1 ) );
						}
						?>
					</nav>
				</div>
			</div>
		<?php } ?>

		<?php if ( 'above' === get_theme_mod( 'spacious_header_image_position', 'above' ) ) {
			spacious_render_header_image();
		} ?>

		<div id="header-text-nav-container" class="<?php echo ( get_theme_mod( 'spacious_one_line_menu_setting', 0 ) == 1 ) ? 'menu-one-line' : ''; ?>">

			<div class="inner-wrap" id="<?php echo esc_attr( $header_class ); ?>">

				<div id="header-text-nav-wrap" class="clearfix">
					<div id="header-left-section">
						<?php
						if ( ( 'both' === get_theme_mod( 'spacious_show_header_logo_text', 'text_only' ) || 'logo_only' === get_theme_mod( 'spacious_show_header_logo_text', 'text_only' ) ) ) { ?>
							<div id="header-logo-image">

								<?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo( $blog_id = 0 ) ) {
									spacious_the_custom_logo();
								} ?>

							</div><!-- #header-logo-image -->

							<?php
						}

						$screen_reader = '';
						if ( ( 'logo_only' === get_theme_mod( 'spacious_show_header_logo_text', 'text_only' ) || 'none' === get_theme_mod( 'spacious_show_header_logo_text', 'text_only' ) ) ) {
							$screen_reader = 'screen-reader-text';
						} ?>

						<div id="header-text" class="<?php echo $screen_reader; ?>">
							<?php if ( is_front_page() || is_home() ) : ?>
								<h1 id="site-title">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
									   title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
									   rel="home"><?php bloginfo( 'name' ); ?></a>
								</h1>
							<?php else : ?>
								<h3 id="site-title">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
									   title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
									   rel="home"><?php bloginfo( 'name' ); ?></a>
								</h3>
							<?php endif;

							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>
							<p id="site-description"><?php echo $description; ?></p>
							<?php endif; ?><!-- #site-description -->
						</div><!-- #header-text -->

					</div><!-- #header-left-section -->
					<div id="header-right-section">
<!--					    <div class ="header-block-button header-block-sc">
					        <div class="header-button-sc header-button-box">
					            <span><a class="headpagelink" href="/<?php echo basename(get_permalink());?>/scorecenter">Scorecenter</a></span>
					            </div>
					        
					            </div>
					            <div class ="header-block-button header-block-sc">
					        <div class="header-button-sc header-button-box">
					            <span><a class="headpagelink" href="/<?php echo basename(get_permalink());?>/statistics">Statistics</a></span>
					            </div>
					        
					            </div>
					            					            <div class ="header-block-button">
					        <div class="header-button-sc header-button-sc-lang">
					            <span><?php echo do_shortcode("[language-switcher]"); ?></span>
					            </div>
					        
					            </div>
					       <div class ="header-block-button dropdowntoogle">
					        <div class="header-button-sc header-button-box">
					             <div id="myLinks">
                                        <a href="/<?php echo basename(get_permalink());?>/scorecenter">Scorecenter</a>
                                        <a href="/<?php echo basename(get_permalink());?>/statistics">Statistics</a>
                                      </div>
                                      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                        <i class="fa fa-bars"></i>
                                      </a>
					            </div>
					        
					            </div>-->


						<?php
						if ( is_active_sidebar( 'spacious_header_sidebar' ) ) {
							?>
							<div id="header-right-sidebar" class="clearfix">
								<?php
								// Calling the header sidebar if it exists.
								if ( ! dynamic_sidebar( 'spacious_header_sidebar' ) ):
								endif;
								?>
							</div>
							<?php
						} ?>

						<?php if ( 'four' !== get_theme_mod( 'spacious_header_display_type', 'one' ) ) : ?>
							<div class="header-action">
								<?php
								spacious_cart_icon();

								if ( 1 === get_theme_mod( 'spacious_header_search_icon', 0 ) ) :
									?>
									<div class="search-wrapper">
										<div class="search">
											<i class="fa fa-search"> </i>
										</div>
										<div class="header-search-form">
											<?php get_search_form(); ?>
										</div>
									</div><!-- /.search-wrapper -->
								<?php endif; ?>
							</div>
						<?php endif; ?>

						<?php if ( ! ( 'four' === get_theme_mod( 'spacious_header_display_type', 'one' ) ) ) :
							spacious_main_nav();
						endif; ?>

					</div><!-- #header-right-section -->

				</div><!-- #header-text-nav-wrap -->
			</div><!-- .inner-wrap -->
			<?php if ( 'four' === get_theme_mod( 'spacious_header_display_type', 'one' ) ) : ?>
				<div class="bottom-menu clearfix <?php echo esc_attr(get_theme_mod( 'spacious_header_button_setting' ) ? 'header-menu-button' : ''); ?>">
					<div class="inner-wrap clearfix">
					    <div id="header-logo-image">

								<?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo( $blog_id = 0 ) ) {
									spacious_the_custom_logo();
								} ?>

							</div><!-- #header-logo-image -->
						<?php spacious_main_nav(); ?>

						<div class="header-action">
							<?php
							spacious_cart_icon();

							if ( 1 === get_theme_mod( 'spacious_header_search_icon', 0 ) ) :
								?>
								<div class="search-wrapper">
									<div class="search">
										<i class="fa fa-search"> </i>
									</div>
									<div class="header-search-form">
										<?php get_search_form(); ?>
									</div>
								</div><!-- /.search-wrapper -->
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div><!-- #header-text-nav-container -->

		<?php if ( 'below' === get_theme_mod( 'spacious_header_image_position', 'above' ) ) {
			spacious_render_header_image();
		} ?>

		<?php
		if ( get_theme_mod( 'spacious_activate_slider', '0' ) == '1' ) {
			if ( get_theme_mod( 'spacious_blog_slider', '0' ) != '1' ) {
				if ( is_home() || is_front_page() ) {
					spacious_featured_image_slider();
				}
			} else {
				if ( is_front_page() ) {
					spacious_featured_image_slider();
				}
			}
		}

		if ( ( '' != spacious_header_title() ) && ! ( is_front_page() ) && ( ! get_theme_mod( 'spacious_header_title_hide', 0 ) ) ) {
			if ( ! ( get_theme_mod( 'spacious_blog_slider', '0' ) != '1' && is_home() ) ) { ?>
				<div class="header-post-title-container clearfix">
					<div class="inner-wrap">
						<div class="post-title-wrapper">
							<?php
							if ( '' != spacious_header_title() ) {
								?>
								<?php if ( is_home() ) : ?>
									<h2 class="header-post-title-class"><?php echo spacious_header_title(); ?></h2>
								<?php else : ?>
									<h1 class="header-post-title-class"><?php echo spacious_header_title(); ?></h1>
								<?php endif; ?>
								<?php
							}
							?>
						</div>
						<?php if ( function_exists( 'spacious_breadcrumb' ) ) {
							spacious_breadcrumb();
						} ?>
					</div>
				</div>
				<?php
			}
		}
		?>
	</header>
	<?php do_action( 'spacious_after_header' ); ?>
	<?php do_action( 'spacious_before_main' ); ?>
	<div id="main" class="clearfix">
            <?php include 'page-templates/breadcrum.php'; ?>
		<div class="inner-wrap">
