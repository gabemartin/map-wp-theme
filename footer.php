<div id="footer">
<div class="contact">
	<div class="white-arrow-down"></div>
		<div class="row">
			<div class="ten columns centered">
				<a name="contact"></a>
			</div>
			<div id="social">
				<a href="mailto:memphisartproject@gmail.com" class="fc-webicon large mail">Email Memphis Art Project</a>
				<a href="https://www.facebook.com/pages/Memphis-Art-Project/547413185281518" class="fc-webicon large facebook">Like Memphis Art Project on Facebook</a>
				<a href="https://twitter.com/MemphisArtPrjct" class="fc-webicon large twitter">Follow Memphis Art Project on Twitter</a>
				<a href="#" class="fc-webicon large instagram">Follow Memphis Art Project on Instagram</a>
			</div>
		</div>
	</div>
</div>
<div class="scroll hide-for-touch">
	<a href="#" class="scrollup">Back to top</a>
</div>
</div>

<!-- Included JS Files (Compressed) -->
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation.min.js"></script>

<!-- Initialize JS Plugins -->
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/app.js"></script>
<script>
    $(window).load(function () {
        $("#featured").orbit({
            timer: false,
            bullets: true,
            bulletThumbs: true
        });
    });
</script>

<script>
    $('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 600);
                return false;
            }
        }
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {

        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });

        $('.scrollup').click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });

    });
</script>

<script>
	$(".more").click(function () {
	$(".more").hide("fast");
	$(this).next(".info").show("fast");
	return false;
	});
</script>

<script>
$(document).ready(function(){
    var Input = $('input[name=s]');
    var default_value = Input.val();

    $(Input).focus(function() {
        if($(this).val() == default_value)
        {
             $(this).val("");
        }
    }).blur(function(){
        if($(this).val().length == 0) /*Small update*/
        {
            $(this).val(default_value);
        }
    });
})
</script>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/main.js"></script>
</body>
</html>