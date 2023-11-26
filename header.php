<?php

$themeurl = get_bloginfo('template_url');

$logo = get_field('logo', 'option');
$name = get_field('name', 'option');
$icons = get_field('icons', 'option');

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" type="image/x-icon" href="<?php echo $themeurl; ?>/assets/favicon.ico" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a id="top"></a>
<main>
	<div id="top-bar">
		<div class="wrapper">
			<?php if ($logo): ?>
				<div class="logo">
					<a href="/">
						<?php echo wp_get_attachment_image( $logo['id'], array(90, 90), "", array('' => '') ); ?>
					</a>
				</div>
			<?php endif; ?>

			<?php if ($name): ?>
				<div class="name"><h2><?php echo $name; ?></h2></div>
			<?php endif; ?>

			<?php if ($icons) : ?> 
				<div class="icon-box">
					<?php foreach($icons as $icon): ?>
						<a href="<?php echo $icon['link']; ?>" target="_blank">
							<img src="<?php echo $icon['icon']['url']?>" alt="email" title="email"/>
						</a>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
		<!--end icon-box -->
	</div>
	<!--end top-bar -->
