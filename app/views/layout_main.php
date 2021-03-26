
<!--
	Layout: [SITE NAME]
	(c) 2020 Blazed Labs LLC, Tyler Ruff; Matthew Ruff
-->
<?php if(isset($page) && isset($content) && isset($bundle)): ?>
	<!DOCTYPE HTML>
	<html lang="en" dir="ltr" itemscope itemtype="https://schema.org/Organization">
		<head>
			
			<!-- Header META -->
			<?php echo Layout_Main::do_meta($page, 4); 
			echo $bundle->renderCss();
			?>

		</head>
		<body>
			<!-- Homepage BG -->
			<?php if($page === 1): ?>
				<div class="top"></div>
			<?php endif; ?>
			
			<!-- Header (.top) -->
			<header id="top">
				<?php 
					echo Layout_Menu::do_menu($page); 
				?>
			</header>
		
			<!-- Main Content (.content) -->
			 <main class="content">
			 	<?php 
					$content->bundle = $bundle;
					echo $content; 
				?>
			 </main>
			
			<!-- Page Footer -->
			 <footer>
				<noscript>
					<span>For the best browsing experience, please enable Javascript.</span>
				</noscript>
			 </footer>

			 <!-- Render JS bundle -->
			 <?php
				echo $bundle->renderJs();
			 ?>
		 </body>
	</html>
<?php endif; ?>