<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/highlightjs/styles/darkula.css">
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <?php include('template/header.php');?>

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include('template/sidebar.php');?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <p>To make your dashboard layout boxed, please go to <code>gleek.js</code> file and make sure <code>containerLayout: "boxed"</code> </p>
                                <pre>
                                    <code class="javascript">
                                        (function($) {
                                            "use strict"

                                            new quixSettings({
                                                containerLayout: "boxed"
                                            });

                                        })(jQuery);
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        <?php include('template/footer.php');?>
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <?php include('template/main_js.php');?>

    <script src="<?php echo base_url()?>assets/plugins/highlightjs/highlight.pack.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <script>
            (function($) {
            "use strict"
    
                new quixSettings({
                    version: "light", //2 options "light" and "dark"
                    layout: "vertical", //2 options, "vertical" and "horizontal"
                    navheaderBg: "color_1", //have 10 options, "color_1" to "color_10"
                    headerBg: "color_1", //have 10 options, "color_1" to "color_10"
                    sidebarStyle: "vertical", //defines how sidebar should look like, options are: "full", "compact", "mini" and "overlay". If layout is "horizontal", sidebarStyle won't take "overlay" argument anymore, this will turn into "full" automatically!
                    sidebarBg: "color_1", //have 10 options, "color_1" to "color_10"
                    sidebarPosition: "static", //have two options, "static" and "fixed"
                    headerPosition: "static", //have two options, "static" and "fixed"
                    containerLayout: "boxed",  //"boxed" and  "wide". If layout "vertical" and containerLayout "boxed", sidebarStyle will automatically turn into "overlay".
                    direction: "ltr" //"ltr" = Left to Right; "rtl" = Right to Left
                });
    
    
            })(jQuery);
        </script>

</body>

</html>