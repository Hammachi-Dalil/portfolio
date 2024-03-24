	<footer id="colophon" class="site-footer">
		<div class="position_images">
			<a href="https://github.com/Hammachi-Dalil">
				<img class="img_git" src="<?php bloginfo('template_url'); ?>/img/github.png" alt="logo de github">
			</a>
			<a href="https://www.linkedin.com/in/dalil-hammachi-97b589256/">
				<img class="img_linkedin" src="<?php bloginfo('template_url'); ?>/img/linkedin.png" alt="logo de linkedin">
			</a>
		</div>
		<p class="text_footer"> &copy; Portfolio de Dalil Hammachi </p>
		<!-- <div class="menu">
			<?php wp_nav_menu(
			array(
				'theme_location' => 'footer_menu',
				'container' => 'nav',
				'container_class' => 'Footer-menu'
			)
			); ?>
		</div> -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

<style>

	.img_git, .img_linkedin{
		transition: 0.3s ease;
	}
	
	.img_git:hover, .img_linkedin:hover{
		
		transform: scale(1.1);
		cursor: pointer;
	}

	.position_images{
		display: flex;
		justify-content: center;
		gap: 20px;
		padding-top: 1vh;
	}

	.site-footer img {
    width: 	64px; /* Ajustez le pourcentage selon vos besoins */
    height: auto; /* Conserve les proportions */
}

	.site-footer{
		background-color: #475569;
	}

	.text_footer{
		color: #FFFFFF;
		text-align: center;
		padding-bottom: 1vh;
		margin: 0;
		font-size: 1.2em;
	}

	body {
    font-family: 'Roboto', sans-serif;
}

</style>

</body>
</html>
