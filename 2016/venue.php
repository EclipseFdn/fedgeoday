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

require_once '../tpl/head.tpl.php';
require_once '../tpl/top.tpl.php';
?>


<h1>Venue</h1>

<p>FedGeoDay 2016 takes place at the:</p>
<img src="http://fedgeoday.org/images/sponsors/redcross.png" alt="Red Cross"/>

<p>
Red Cross, 1730 E Street NW, Washington, DC 20006
</p>

<p>Our thanks to the generous support from the Red Cross to host us this year!</p>

<?
require_once '../tpl/footer.tpl.php';
?>


