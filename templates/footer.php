<footer>

    <p>© Copyright 2016 - Matthieu Lalbat & Aymé Jacquet</p>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
    <!-- Tooltipster -->
    <script type="text/javascript" src="../js/tooltipster/tooltipster.bundle.min.js"></script>
    <!-- Loading -->
    <script type="text/javascript" src="../js/tooltipster/loadingtool.js"></script>
    <script type="text/javascript" src="../js/loader/loading.js"></script>
    <!-- Google Map -->
    <script type="text/javascript" src="../js/GoogleMap/googlemap.js"></script>
    <!-- Portfolio -->
    <script type="text/javascript" src="../js/portfolio/portfolio.jquery.min.js"></script>
    <script type="text/javascript" src="../js/portfolio/script.js"></script>
    <!-- SmoothScroll -->
    <script type="text/javascript" src="../js/smoothscroll-for-websites/plugins.js"></script>
    <script type="text/javascript" src="../js/smoothscroll-for-websites/SmoothScroll.js"></script>
    <script type="text/javascript" src="../js/menu/ease.js"></script>
    <script type="text/javascript" src="../js/menu/script.js"></script>
    <!-- Fadein -->
    <script type="text/javascript" src="../js/fadein/script.js"></script>
    <!--CoverVid-->
    <script type="text/javascript" src="../js/CoverVid/covervid.min.js"></script>
    <script type="text/javascript" src="../js/CoverVid/script.js"></script>
    <!--Loader
    <script type="text/javascript" src="../js/loader/royal_preloader.min.js"></script>
    <script type="text/javascript">
        (function() {
            Royal_Preloader.config({
                mode:           'number', // 'number', "text" or "logo"
                text:           'M & A',
                timeout:        0,
                showInfo:       true,
                opacity:        1
            });
        })(jQuery);
    </script>-->
    <!--<script type="text/javascript" src="../js/timeline/script.js"></script>-->
    <script type="text/javascript">
        (function () {
            jQuery('.dot').click(function () {
                var index = $(this).index(),
                    newTarget = jQuery('.targetDiv').eq(index);
                jQuery('.targetDiv').not(newTarget).slideUp();
                newTarget.delay('fast').slideToggle();
                return false;
            })
        })(jQuery);
    </script>





</footer>


</body>
</html>
