<?php 
	$customLogoID = get_theme_mod('custom_logo');
	$logo = wp_get_attachment_image_src($customLogoID, 'large')[0];
?>

<!doctype html>

<html <?php language_attributes(); ?>>
	<head>
		<title>
			<?php 
				if(! is_front_page()) {
					wp_title(''); echo ' | '; 
				}
				bloginfo('name'); 
			?>
		</title>

		<?php wp_head(); ?>

		<!-- Allows the website to work responsively for the width of the device -->
		<meta name="viewport" content="width=device-width, initial-scale =1.0, user-scalable = no">

		<style>
			.button,
			.footer input[type=submit],
			.post-teaser__link {
				background-color: <?php echo get_field('button_background_colour', 'option'); ?>;
				color: <?php echo get_field('button_text_colour', 'option'); ?>;
			}

			.button:hover,
			.footer input[type=submit]:hover,
			.post-teaser__link:hover {
				background-color: <?php echo get_field('button_hover_colour', 'option'); ?>;
				color: <?php echo get_field('button_text_colour', 'option'); ?>;
			}
			
			<?php foreach (get_field('brand_colours', 'option') as $theme) : ?>
				<?php
					$className = ".theme-" . str_replace( " ", "-", strtolower( $theme['name'] ) );
					$textColour = $theme['text_colour'];
					$bgColour = $theme['colour'];
					$buttonBg = $theme['button_background'];
					$buttonHover = $theme['button_hover'];
					$buttonText = $theme['button_text'];
				?>
				<?php echo $className; ?> .page-container-wrap, .footer<?php echo $className; ?> { background-color: <?php echo $bgColour; ?>; color: <?php echo $textColour; ?>; }
				<?php echo $className; ?> .curves__coloured { fill: <?php echo $bgColour; ?>; }
				<?php echo $className; ?> .button, <?php echo $className; ?> .post-teaser__link, <?php echo $className; ?>.footer input[type=submit] { background-color: <?php echo $buttonBg; ?>; color: <?php echo $buttonText; ?>}
				<?php echo $className; ?> .button:hover, <?php echo $className; ?> .post-teaser__link:hover, <?php echo $className; ?>.footer input[type=submit]:hover { background-color: <?php echo $buttonHover; ?>; }
			<?php endforeach; ?>
		</style>
	</head>
	<body <?php body_class(); ?>>

		<div class="pageWrapper">

			<div class="header__wrapper full-width-wrapper">
				<div class="page-container-wrap">
					<div class="page-container">

						<div class="header">
			
							<div class="header__left-side">
								<a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo $logo; ?>" alt=""></a>
								
								<!-- <div class="header-content">
									<h2 class="header-content__title"><?php echo get_field('header_title', 'option'); ?></h2>
									<p class="header-content__caption"><?php echo get_field('header_subtitle', 'option'); ?></p>
								</div> -->
							</div>
			
							<div class="header__right-side">
								<!-- <div id="pull" class="mobile-buger-menu-toggle"></div> -->

								<div id="burgerMenu" class="burgerMenu">
									<div class="bar bar--top"></div>
									<div class="bar bar--middle"></div>
									<div class="bar bar--bottom"></div>
								</div>
			
								<div class="main-menu">
									<?php
										wp_nav_menu(array(
											'theme_location'	=> 'primary', // (string) (optional) The location in the theme to be used--must be registered with register_nav_menu() in order to be selectable by the user
											'menu'				=> '', // (string) (optional) The menu that is desired; accepts (matching in order) id, slug, name
											'container'			=> false, // (string) (optional) Whether to wrap the ul, and what to wrap it with. Allowed tags are div and nav. Use false for no container
											'container_class'	=> '', // (string) (optional) The class that is applied to the container
											'container_id'		=> '', // (string) (optional) The ID that is applied to the container
											'menu_class'		=> 'mainMenu', // (string) (optional) The class that is applied to the ul element which encloses the menu items. Multiple classes can be separated with spaces.
											'menu_id'			=> 'mainMenu', // (string) (optional) The ID that is applied to the ul element which encloses the menu items.
											'echo'				=> true, // (boolean) (optional) Whether to echo the menu or return it. For returning menu use false
											'fallback_cb'		=> 'wp_page_menu', // (string) (optional) If the menu doesn't exist, the fallback function to use. Set to false for no fallback
											'before'			=> '', // (string) (optional) Output text before the <a> of the link
											'after'				=> '', // (string) (optional) Output text after the </a> of the link
											'link_before'		=> '', // (string) (optional) Output text before the link text
											'link_after'		=> '', // (string) (optional) Output text after the link text
											'items_wrap'		=> '<ul id="%1$s" class="%2$s">%3$s</ul>', // (string) (optional) Evaluated as the format string argument of a sprintf() expression. The format string incorporates the other parameters by numbered token. %1$s is expanded to the value of the 'menu_id' parameter, %2$s is expanded to the value of the 'menu_class' parameter, and %3$s is expanded to the value of the list items. If a numbered token is omitted from the format string, the related parameter is omitted from the menu markup. Note: To exclude the items wrap (for instance, if the wrap is built into your theme), you still need to pass %3$s as the parameter. If you pass an empty string, your menu won't display at all.
											'depth'				=> 0, // (integer) (optional) How many levels of the hierarchy are to be included where 0 means all. -1 displays links at any depth and arranges them in a single, flat list.
											'walker'			=> '' // (object) (optional) Custom walker object to use (Note: You must pass an actual object to use, not a string)
										));
									?>
								</div><!-- /.main-menu -->
							</div>
						
						</div><!-- /.header -->
					</div><!-- /.pageContainer -->
				</div><!-- /.page-container-wrap -->
			</div><!-- /.header-wrapper full-width-wrapper -->


			<div class="content">