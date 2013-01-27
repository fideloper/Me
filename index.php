
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Chris Fidao</title>
    <meta name="description" content="I am Chris Fidao.">
    <meta name="author" content="Chris Fidao">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- Le styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="favicon.ico">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Chris Fidao</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="index.html">Home</a></li>
              <li><a class="mailto" data-name="chris" data-domain="chrisfidao.com" href="#">Contact</a></li>
              <li><a href="https://twitter.com/#!/fideloper" >@fideloper</a></li>
              <li class="divider-vertical"></li>
              <li><a href="http://www.digitalsurgeons.com" >Digital Surgeons</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <div class="hero-unit">
        <h1>Hello</h1>
        <p>I'm <strong>Chris Fidao</strong> and this is about me.</p>
      </div>

      <div class="row">
        <div class="span4">
          <h2>I Work</h2>
           <p>I'm the lead technologist at <a href="http://www.digitalsurgeons.com">Digital Surgeons</a> where I lead up everything tech: Development practices, coding techniques, platform usage and the use and love of Apple products. And *nix servers.<br /><br /><a href="https://twitter.com/digitalsurgeons" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @digitalsurgeons</a></p>
        </div>
        <div class="span4">
          <h2>I Tweet</h2>
           <p>I tweet from <a href="https://twitter.com/#!/fideloper" >@fideloper</a>, where you can find me tweeting about information I find useful, with a touch of sarcasm.<br /><br /><a href="https://twitter.com/fideloper" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @fideloper</a></p>
        </div>
        <div class="span4">
          <h2>I Play</h2>
          <p>I write about tech at <a href="http://fideloper.com">http://fideloper.com</a>.</p>
          <p>I'm currently loving <a href="http://nodejs.org/" >Node.js</a>, <a href="http://laravel.com/" >Laravel</a> and living in Ubuntu servers.</p>
          <p>I'm a huge supporter of Markdown as a means of publishing on the web.</p>
        </div>
      </div>

      <hr>

      <div class="row" id="pics">
        <div class="span12">
          <h2>Picslol</h2>
          <ul class="thumbnails">
            <li><a href="#" class="thumbnail" onclick="return false;"><img src="img/fideloper.jpg" alt="" width="266" height="266"></a></li>
            <li><a href="#" class="thumbnail" onclick="return false;"><img src="img/me.jpg" alt=""></a></li>
            <li><a href="#" class="thumbnail" onclick="return false;"><img src="img/guitars.jpg" alt=""></a></li>
          </ul>
        </div>
      </div>


    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    <script>
      $(function() {
        var $this;
        $('.mailto').each(function() {
          $this = $(this);
          $this.attr('href', 'mailto:'+$this.attr('data-name')+'@'+$this.attr('data-domain'));
        });
      });
    </script>

    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-29017248-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
  </body>
</html>
