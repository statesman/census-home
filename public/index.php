<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <?php
  $meta = array(
    "title" => "Population changes and other census data | Statesman.com",
    "description" => "A home for various U.S. Census related projects.",
    "thumbnail" => "http://projects.statesman.com/site_path/assets/share.jpg", // needs update
    "shortcut_icon" => "http://media.cmgdigital.com/shared/media/2015-11-16-11-32-05/web/site/www_mystatesman_com/images/favicon.ico",
    "apple_touch_icon" => "http://media.cmgdigital.com/shared/theme-assets/242014/www.statesman.com_fa2d2d6e73614535b997734c7e7d2287.png",
    "url" => "http://projects.statesman.com/site_path/", // needs update
    "twitter" => "statesman"
  );
?>

  <title>Interactive: <?php print $meta['title']; ?> | Austin American-Statesman</title>
  <link rel="shortcut icon" href="<?php print $meta['shortcut_icon']; ?>" />
  <link rel="apple-touch-icon" href="<?php print $meta['apple_touch_icon']; ?>" />

  <link rel="canonical" href="<?php print $meta['url']; ?>" />

  <meta name="description" content="<?php print $meta['description']; ?>">

  <meta property="og:title" content="<?php print $meta['title']; ?>"/>
  <meta property="og:description" content="<?php print $meta['description']; ?>"/>
  <meta property="og:image" content="<?php print $meta['thumbnail']; ?>"/>
  <meta property="og:url" content="<?php print $meta['url']; ?>"/>

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@<?php print $meta['twitter']; ?>" />
  <meta name="twitter:title" content="<?php print $meta['title']; ?>" />
  <meta name="twitter:description" content="<?php print $meta['description']; ?>" />
  <meta name="twitter:image" content="<?php print $meta['thumbnail']; ?>" />
  <meta name="twitter:url" content="<?php print $meta['url']; ?>" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="dist/style.css">

  <link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700italic,700,800,800italic' rel='stylesheet' type='text/css'>
 

  <?php /* CMG advertising and analytics */ ?>
  <?php include "includes/advertising.inc"; ?>
  <?php include "includes/metrics-head.inc"; ?>

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

        <a class="navbar-brand" href="http://www.statesman.com/" target="_blank">
        <img class="visible-xs visible-sm" width="103" height="26" src="assets/logo-short-black.png" />
        <img class="hidden-xs hidden-sm" width="273" height="26" src="assets/logo.png" />
        </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="./">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="visible-xs small-social"><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-google-plus"></i></a></li>
      </ul>
        <ul class="nav navbar-nav navbar-right social hidden-xs">
          <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a></li>
          <li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a></li>
          <li><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-google-plus"></i></a></li>
        </ul>
    </div>
  </div>
</nav>

  <article class="container">

    <div class="row">
      <div class="col-lg-12 interative-header">
      <h1 id="pagetitle">Counting ourselves</h1>
      <!-- <p class="author">By So Andso</p> -->
      <p>The <a href="">Statesman Interactives team</a> often tracks U.S. Census data releases and uses illustrations and interactives to help explain our changing demographics locally, in Texas and the nation. Please enjoy some of our more recent projects.</p>
      </div>

    </div>
    <hr>
    <div class="row">
      <div class="col-sm-6 col-lg-4">
        <div class="panel panel-default indextease">
          <div class="panel-body">
            <div class="document-img"><a href="page1.html"><img class="img-responsive" src="assets/2014-estimates.png" /></a></div>
            <h3><a href="page1.html">New this week</a></h3>
            <p>Description.</p>
            <ul>
              <li><a href="">this is the story url</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="panel panel-default indextease">
          <div class="panel-body">
            <div class="document-img"><a href="page2.html"><img class="img-responsive" src="assets/2015-estimates.png" /></a></div>
            <h3><a href="http://projects.statesman.com/news/census/estimates-2015/">Austin 2.0 (million)</a></h3>
            <p>A glance across our skyline or a drive up MoPac (good luck with that!) is all we need to see that Central Texas is growing like a playful Labrador puppy. But today, the U.S. Census Bureau released new statistics confirming what those big puppy paws told us would happen: We're growing awfully fast.</p>
            <ul>
              <li><a href="http://www.mystatesman.com/news/news/local/austin-metro-area-surpasses-2-million-residents/nqrQF/" target="_blank">Austin metro area surpasses 2 million residents</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="panel panel-default indextease">
          <div class="panel-body">
            <h4>March 26, 2015</h4>
            <div class="document-img"><a href="page3.html"><img class="img-responsive" src="assets/2014-estimates.png" /></a></div>
            <h3><a href="page3.html">Tracking Texas growth</a></h3>
            <p>Census numbers from 2014 show the Austin area is still growing faster than any other major city, as it has been every year since 2010. Also, the influx of people moving into the five-county area centered around Austin is accelerating.</p>
            <ul>
              <li><a href="http://www.mystatesman.com/news/news/local/austin-metro-area-posts-high-growth-again-but-some/nkff7/" target="_blank">Austin metro area posts high growth again — but some ask, at what cost?</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </article>

    <!-- bottom matter -->
    <?php include "includes/banner-ad.inc";?>
    <?php include "includes/legal.inc";?>
    <?php include "includes/project-metrics.inc"; ?>
    <?php include "includes/metrics.inc"; ?>

    <script src="dist/scripts.js"></script>

  <?php if($_SERVER['SERVER_NAME'] === 'localhost'): ?>
    <script src="//localhost:35729/livereload.js"></script>
  <?php endif; ?>
</body>
</html>
