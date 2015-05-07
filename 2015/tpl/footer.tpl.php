<?php
/*******************************************************************************
 * Copyright (c) 2015 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Christopher Guindon (Eclipse Foundation) - Initial implementation
 *******************************************************************************/
if (!defined('ABSPATH')) exit;
?>

<footer id="page-footer">
  <div class="container">
    <div class="col-xs-12 col-md-2">
      <p id="copyright-text">&copy; <?php print date('Y');?> <?php print $config['pagetitle'];?></p>
    </div>
    <div class="col-xs-12 col-md-10">
      <div id="footer-left" class="col-md-8">
        <div class="content-left">
          <div  class="clearfix">
            <?php include 'tpl/menu.tpl.php';?>
          </div>
          <p>
            <a href="./"><img id="footer-logo" src="images/logo_footer.jpg" alt="<?php print $config['pagetitle'];?>"/>
            <span class="sr-only"><?php print $config['pagetitle'];?></span>
             </a>
          </p>
          <p>
            <a class="twitter-follow-button" href="https://twitter.com/fedgeoday" data-show-count="false" data-lang="en">
              Follow @twitterdev
            </a>
            <script>window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return t;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));</script>
          </p>
        </div>
      </div>
      <div id="footer-right" class="col-md-4">
        <div class="content-right">
          <?php print $config['date'];?>
          <div id="footer-info">
            <?php print $config['address'];?>
          </div>
          <p><a href="<?php print $config['registration_link']?>" class="btn btn-primary">Register Now</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="js/main.js"></script>
<!-- Google Analytics -->
<script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='https://www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','UA-910670-20','auto');ga('send','pageview');
</script>

</body>
</html>
