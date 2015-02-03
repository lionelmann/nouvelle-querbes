
<footer>
    <div class="footer-inner">
        <!-- Row 1 / Column 1 -->
        <div class="content">
            <img src="<?php bloginfo('template_url');?>/dist/images/ecole-logo.png">
        </div>  

        <!-- Row 1 / Column 2 -->
        <div class="content-wide"> 
        	<div id="map"></div>
        </div>
    </div>

    <div class="footer-inner">
        <!-- Row 2 / Column 1 -->
         <div class="content">
	        <?php wp_nav_menu(array('container' => false, 'container_class' => '', 'menu_id' => '', 'menu' => '', 'menu_class' => 'menu', 'theme_location' => 'header-menu'));	?>
        </div> 
        <!-- Row 2 / Column 2 -->
        <div class="content">
            <p>L'école alternative Nouvelle-Querbes est une école primaire alternative publique de l'île de Montréal.</p>
			<p>
			215, Av. Bloomfield <br>
			Outremont, Québec <br>
			H2V 3R6
			</p>
        </div>
        <!-- Row 2 / Column 3 -->
        <div class="content">
            <p>
				Téléphone : (514) 272-7887 # 1 </br>
				Téléphone du service de garde: (514) 272-7887 # 2 </br>
				Télécopieur: (514) 272-7622 
			</p>
			<p>
				Courriel : <a href="mailto:direction.nouvelle-querbes@csmb.qc.ca">direction.nouvelle-querbes@csmb.qc.ca</a>
			</p>
        </div> 
    </div>
    <div class="footer-inner">
       <div class="copyright">
            <small>Made with love by <a href="http://hypenotic.com">Informatique</a></small>
        </div>
    </div>
</footer>
<?php wp_footer();?>
</body>
</html>


