<?php
/*
=================================================
sleeky FOOTER
=================================================
*/
?>
<?php get_sidebar( 'footer' ); ?>
<div class="sleeky_footer">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="copyright" style="clear:both;">
                    <p>
                        <?php esc_attr_e('Copyright &copy; &nbsp;', 'sleeky'); ?><strong><?php echo bloginfo('title'); ?></strong> <?php echo date('Y'); ?> . <?php esc_attr_e('All rights reserved.', 'sleeky'); ?></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>

<!-- GOOGLE ANALYTICS -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-101047687-1', 'auto');
  ga('send', 'pageview');
 
</script>

</body>
</html>