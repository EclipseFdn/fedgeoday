<?php
/*******************************************************************************
 * Copyright (c) 2016 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Andrea Ross(Eclipse Foundation) - Initial implementation
 *******************************************************************************/

/**
 * Define ABSPATH as this files directory
 */
define('ABSPATH', dirname(__FILE__) . '/2016/');
require_once '../tpl/bootstrap.inc.php';

require_once '../tpl/head.tpl.php';
require_once '../tpl/top.tpl.php';
?>

<div class="container">
  <div class="col-md-24">
    <h1>Our Committee</h1>

    <p>The conference would not happen without the efforts of our wonderful team. Please help us thank them!</p>


    <table style="width:100%">
      <tr style="vertical-align: top;">
        <td style="vertical-align: top;width: 33%; padding: 20px;" >
          <image style="margin: 10px; float: left;" src="../images/committee/Cozzi.jpg">
          <p><strong>Patrick Cozzi</strong></p>
          <p>Patrick Cozzi is our program chair for 2016 and led the team for program selection.
        </td>
        <td style="vertical-align: top;width: 33%; padding: 20px;" >
          <image style="margin: 10px; float: left;" src="../images/committee/Lyon.jpg">
          <p><strong>Elizabeth Lyon</strong></p>
        </td>
        <td style="vertical-align: top;width: 33%; padding: 20px;" >
          <image style="margin: 10px; float: left;" src="../images/committee/Kunce.jpg">
          <p><strong>Dale Kunce</strong></p>
        </td>
      </tr>
      <tr style="vertical-align: top;">
        <td style="vertical-align: top;width: 33%; padding: 20px;" >
          <image style="margin: 10px; float: left;" src="../images/committee/Levine.jpg">
          <p><strong>Rachel Levine</strong></p>
        </td>
        <td style="vertical-align: top;width: 33%; padding: 20px;" >
          <image style="margin: 10px; float: left;" src="../images/committee/Tucker.jpg">
          <p><strong>Christopher Tucker</strong></p>
        </td>
        <td style="vertical-align: top;width: 33%; padding: 20px;" >
          <image style="margin: 10px; float: left;" src="../images/committee/Sheets.jpg">
          <p><strong>Kari Sheets</strong></p>
        </td>
      </tr>
      <tr style="vertical-align: top;">
        <td style="vertical-align: top;width: 33%; padding: 20px;" >
          <image style="margin: 10px; float: left;" src="../images/committee/Pickle.jpg">
          <p><strong>Eddie Pickle</strong></p>
        </td>
        <td style="vertical-align: top;width: 33%; padding: 20px;" >
          <image style="margin: 10px; float: left;" src="../images/committee/Callaway.jpg">
          <p><strong>Jason Callaway</strong></p>
        </td>
        <td style="vertical-align: top;width: 33%; padding: 20px;" >
          <image style="margin: 10px; float: left;" src="../images/committee/Calamito.jpg">
          <p><strong>Anthony Calamito</strong></p>
        </td>
      </tr>
    <table>
  </div>
</div>


<?
require_once '../tpl/footer.tpl.php';
?>
