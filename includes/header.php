<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ender's 2017 HCDE532 Website</title>

        <!-- Begin Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- End Meta -->

        <!-- Begin Styles -->
        <link href="styles.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="flexslider.css" type="text/css" media="all"/>
        <!-- End Styles -->

        <!-- Begin Scripts-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script src="scripts/jquery.flexslider.js"></script>
        <!-- End Scripts-->

        <!-- Begin Flex Slider -->
        <script type="text/javascript" charset="utf-8">
            $(window).load(function() {
                $('.flexslider').flexslider();
            });
        </script>
        <!-- End Flex Slider -->

        <!-- Begin Toggle -->
        <script type="text/javascript" charset="utf-8">
            $(window).load(function() {
                $('#toggle').click(function() {
                    $('#navigation').toggle();
                });

                var loadWidth = window.innerWidth;

                $(window).resize(function() {

                    if(loadWidth !== window.innerWidth){
                        if(window.innerWidth < 601){
                            $('#navigation').hide();
                        }else{
                            $('#navigation').show();
                        }
                    }                    
                });
            });
        </script>
        <!-- End Toggle -->

    </head>
    <body>
        <!-- Begin Header -->
        <div id="header">
            <h1 id="logo"><a href="index.php">Ender Barillas</a></h1>
            <span id="toggle">&#8801;</<span>
        </div>
        <!-- Ender Header -->

        <!-- Begin Navigation -->
        <?php include('includes/navigation.php') ?>
        <!-- End Navigation -->

        <!-- Begin Content -->
        <div id="content">