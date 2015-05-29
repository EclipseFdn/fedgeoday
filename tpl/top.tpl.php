<?php
/*******************************************************************************
 * Copyright (c) 2015 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Andrew Ross (Eclipse Foundation) - Initial implementation
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
        <a class="navbar-brand" href="./"><img src="../images/logo.png" alt="><?php print $config['pagetitle'];?>"/>
          <span class="sr-only"><?php print $config['pagetitle'];?></span>
        </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <?php include 'menu.tpl.php';?>  
      </div><!--/.navbar-collapse -->
    </div>
  </nav>
</header>
