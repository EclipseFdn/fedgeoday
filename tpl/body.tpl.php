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

<header>
  <nav class="navbar navbar-inverse navbar-fixed-top smoothscroll" id="main-menu">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./"><img src="images/logo.png" alt="><?php print $config['pagetitle'];?>"/>
          <span class="sr-only"><?php print $config['pagetitle'];?></span>
        </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <?php include 'tpl/menu.tpl.php';?>  
      </div><!--/.navbar-collapse -->
    </div>
  </nav>
  <div id="about" class="section">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <h1 class="heading bg-primary pull-left">FedGeo Day Conference</h1>
          <h2 class="heading bg-secondary pull-left"><?php print $config['date'];?></h2>
          <h2 class="heading bg-secondary pull-left">Washington DC</h2>
        </div>
        <div class="col-xs-12 col-sm-6">
          <ul class="list-geo">
            <li>The conference for <span>open source geo applications</span> in the federal government.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>

<div id="registration"  class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-6" id="register-about">
        <div class="content-left">
          <h2>Modern Tools for GIS, Geo Data &amp; Cartography</h2>
          <p><strong>Open source applications</strong> are changing GIS, cartography, web mapping, 
          and map publishing, throwing open the door of what's possible in geo. 
          This <strong>one day conference</strong> will introduce you to these tools, 
          show you what you can do with them, and walk through how and 
          why government agencies are using them to dramatically 
          improve their mapping, cartography, and GIS projects.</p>
        </div>
      </div>
      <div class="col-md-6" id="register-box">
        <div class="content-right">
          <div class="box top-offset">
            <h2 class="heading bg-primary">Registration</h2>
            <div class="content">
               <iframe id="iframe-event" src="<?php print $config['eventbrite'];?>"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="schedule" class="section">
  <div class="schedule-bg">
    <div class="container">
      <div class="row">
        <h2 class="heading bg-secondary pull-left">Schedule</h2>
        <?php if ($config['schedule']) :?>
          <div class="timeline clearfix">
            <?php foreach($sessions as $session) :?>
              <article class="timeline-entry clearfix">
                <div class="timeline-entry-inner">
                  <?php if (!isset($lastime) || $lastime != $session['time']) :?>
                    <time class="timeline-time">
                      <span><?php print $session['time'];?></span>
                    </time>
                  <?php endif;?>
                  <div class="timeline-icon">
                    <i class="entypo-feather"></i>
                  </div>
                  <div class="timeline-label">
                    <h2><?php print $session['title'];?> <span class="badge" style="background: <?php print $session['room_data']['color'];?>"><?php print $session['room_data']['title'];?></span></h2>
                    <p><strong><?php print $session['teaser'];?></strong></p>
                    <div class="body" style="display:none">
                      <?php print $session['body'];?>
                    </div>
                    <a href="#" class="btn-showmore">+</a>
                  </div>
                </div>
              </article>
              <?php $lastime = $session['time']; ?>
            <?php endforeach;?>
           
          </div>
          <p class="text-center">
            <a href="#" id="btn-schedule-toggle"><span>View More</span>
              <img src="images/btn-view-more.jpg">
            </a>
          </p>
        <?php else:?>
          <div class="alert alert-warning" role="alert">Stay tuned, we're crafting the agenda and will post it soon.</div>
        <?php endif;?>
      </div>
    </div>
  </div>
</div>

<div id="sponsorship"  class="section">
  <div class="container" id="sponsorship-container">
    <div class="col-md-6">
      <div class="content-left">
        <h2>Sponsorship Prices</h2>
        <div class="price-badge clearfix">
          <div class="content-box col-sm-8"><h3>Sponsor the conference as a member</h3></div>
          <div class="arrow_box col-sm-4"><span class="price">$2000</span>Member Discount</div>
        </div>
        <div class="price-badge clearfix price-badge-odd">
          <div class="content-box col-sm-8"><h3>Sponsor the conference as a non-member</h3><p><a href="https://locationtech.org/content/become-member">Become a member</a></p></div>
          <div class="arrow_box col-sm-4"><span class="price">$4,500</span> Full price</div>
          
        </div>
        <div class="price-badge clearfix">
          <div class="content-box col-sm-8"><h3>Tour AND FedGeoDay</h3><p>Support both FedGeoDay and the <a href="http://tour.locationtech.org">Global Tour</a>, and receive further discounts on each!</p></div>
          <div class="arrow_box col-sm-4"><span class="price">$3200</span>Starting at.</div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="content-right text-center">
        <a class="twitter-timeline" href="https://twitter.com/hashtag/fedgeo2015" data-widget-id="590171817974726657">#fedgeo2015 Tweets</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> 
      </div>
    </div>
  </div>
</div>
    
<div id="sponsors" class="clearfix section">
  <div id="sponsors-bg">
    <div class="container">
      <div class="col-xs-12">
        <div class="row">
          <h2 class="heading bg-secondary top-offset-sm pull-left">Our Sponsors</h2>
        </div>
        <div class="row">
          <ul class="list-inline sponsor-list">
            <?php foreach ($sponsors as $sponsor) :?>
              <li>
                <a href="<?php print $sponsor['url'];?>" target="_blank">
                  <img src="<?php print $sponsor['src']?>" alt="<?php print $sponsor['title']?>" class="img-responsive"/>
                </a>
              </li>
            <?php endforeach;?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
