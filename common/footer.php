        </div><!-- end content -->

    </div><!-- end wrap -->


    <footer role="contentinfo">

        <div id="footer-text">
            <?php echo get_theme_option('Footer Text'); ?>
            <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
                <p><?php echo $copyright; ?></p>
            <?php endif; ?>
            <p><?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>.'); ?></p>
        </div>

        <?php fire_plugin_hook('public_footer', array('view' => $this)); ?>

    </footer><!-- end footer -->	
    <script type="text/javascript">
    jQuery(document).ready(function () {
        Omeka.showAdvancedForm();
        Omeka.skipNav();
        Omeka.megaMenu();
        ThanksRoy.moveNavOnResize();
        ThanksRoy.mobileMenu();
    });
	$.getJSON("/themes/thanksroy/javascripts/timeline.json", function(json) {
		timeline = new TL.Timeline('timeline-embed',json);
});
	
    </script>

</body>
</html>
