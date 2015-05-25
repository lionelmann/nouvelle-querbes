
<footer>
    <div class="footer-inner">
        <!-- Row 1 / Column 1 -->
        <div class="content">
            <img src="<?php bloginfo('template_url');?>/dist/images/logo-footer.png">
        </div>  

        <!-- Row 1 / Column 2 -->
        <div class="content-wide"> 
        	<div id="map"></div>
        </div>
    </div>

    <div class="footer-inner">
        <!-- Row 2 / Column 1 -->
         <div class="content">

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
				<i class="fa fa-envelope-o"></i> <a href="mailto:direction.nouvelle-querbes@csmb.qc.ca">direction.nouvelle-querbes@csmb.qc.ca</a>
			</p>
        </div> 
    </div>
    <div class="footer-inner">
       <div class="copyright" style="text-align: center;">
            <small>Fait avec <i class="fa fa-heart"></i> par <a href="<?php site_url(); ?>/implication-des-parents/les-comites/informatique">Informatique</a></small>
        </div>
    </div>
</footer>
</div> <!--END #CONTENT-->

<?php wp_footer();?>

<script type="text/javascript">
    jQuery(document).ready(function() {
        var colors1 = ["#fc6a42", "#ff5f5f", "#00ffb6"]
        var colors2 = ["#cae8a7", "#8fcc93", "#7ce57f"]
        selectedColor = colors1[Math.floor(Math.random()*colors1.length)]
        selectedColor2 = colors2[Math.floor(Math.random()*colors2.length)]
        header = $(".box-2");
        header1 = $(".box-3");
        header.css("background-color", selectedColor);
        header1.css("background-color", selectedColor2);
});
</script>

<script>
    $('#button').on('click', function() {
        $('#content').toggleClass('isOpen');
        $(this).toggleClass('active');
    });
</script>

</body>
</html>