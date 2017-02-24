<?php
/*
** Analytics
*/

function slate_ga_tracking(){

    $ga_property_id = 'UA-XXXXXXXX';

    if( WP_ENV == 'prod' ) { ?>
        <!-- GA -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', '<?php echo $ga_property_id; ?>', 'auto');
            ga('send', 'pageview');
        </script>
    <?php
    }
}

add_action( 'wp_head', 'slate_ga_tracking', 10 );
