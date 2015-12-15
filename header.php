<?php
    // Include and instantiate the class.
    require_once 'asset/vendor/mobile_detect.php';
    $detect = new Mobile_Detect;
?>
<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="subject" content="<?php echo $pageSubject; ?>">
    <meta name="keywords" content="<?php echo $pageKeywords ?>">
    <meta name="description" content="<?php echo $pageDesc ?>">
    <link rel="shortcut icon" href="favicon.ico" />
    <meta property="og:title" content= "<?php echo $socialTitle ?>" /> 
    <meta property="og:type" content= "website" />
    <meta property="og:description" content="<?php echo $socialDesc ?>" /> 
    <meta property="og:url" content="http://hut.indosiar.com" />
    <meta property="og:image" content="http://hut.indosiar.com/asset/images/hutindosiar21.png" />
    <meta name="twitter:image" content="http://hut.indosiar.com/asset/images/hutindosiar21.png">
    <meta name="twitter:site" content="@IndosiarID">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $socialTitle ?>">
    <meta name="twitter:url" content="http://hut.indosiar.com">
    <meta name="twitter:description" content="<?php echo $socialDesc ?>">
    <title><?php echo $pageTitle ?></title>


    <!-- all compiled css -->
    <link rel="stylesheet" type="text/css" href="asset/main.css">

    <script type="text/javascript" src="asset/vendor/modernizr-custom.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-71291547-1', 'auto');
      ga('send', 'pageview');

    </script>
</head>

<body class="sliding-menu-close">