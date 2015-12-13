<div id="footer">
<div id="donate">
<h3>DONATE TODAY</h3>
<div id="donatebutton"><a href="">LEARN MORE</a></div><!----End div donatebutton---->
</div><!---End div donate---->
<div id="lowerfooter">
			<ul class="socialitems">
            	<li id="twitter"><a href="https://twitter.com/nobraincancer"><img src="http://www.the-web-pros.com/stagingarea/braincancer/wp-content/uploads/2015/12/soc-icon-twitter-white.png" alt="facebook" height="35" /></a></li>
				<li id="facebook"><a href="https://www.facebook.com/braincancer.org"><img src="http://www.the-web-pros.com/stagingarea/braincancer/wp-content/uploads/2015/12/soc-icon-fb-white.png" alt="facebook" height="35" /></a></li>
				<li id="pintrest"><a href="http://www.pinterest.com/braincancerorg/"><img src="http://www.the-web-pros.com/stagingarea/braincancer/wp-content/uploads/2015/12/soc-icon-pintrest-white.png" alt="facebook" height="35" /></a></li>
			</ul>
            	
<a href="wp-login.php" id="login" >Log In</a>


<div id="footernav">
    <?php wp_nav_menu(array("menu" => "Footer")); ?>
    </div>
    
    <p id="tagline"><cite>&copy; 2013-<?=date("Y");?> Brain Cancer Organization</p>

</div><!----End lowerfooter---->
</div><!-----End footer-------->
	
<?php wp_footer(); ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
$("#menubutton").on("click", function() {
  $("body").toggleClass("show-menu");
});

$('#mainnav ul .menu-item-has-children').append('<span class="switch">&#9660;</span>');
$('.switch').on('click', function(){
	$(this).closest("li").toggleClass("show-sub-menu");
});
</script>

</html>