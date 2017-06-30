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
    <h1>Terms and Conditions</h1>

    <h2>Invoice / Receipt</h2>

    <p>You will automatically be able to print a receipt when you submit your credit card payment and finalize your registration. Once you've registered you can always log back in to view your registration and your receipt or invoice and other conference information.</p>

    <h2>Registration Transfers</h2>

    <p>If you register and then are unable to attend, you may transfer your registration to another person. Transfers must be made in your RegOnline account. Please try to transfer your registration before October 1, 2016.</p>

    <h2>Cancellations</h2>

    <p>All cancellations requests must be sent to us via email. If received before August 31, 2016, a $25 processing fee will be incurred, and after August 31, 2016, a $50 processing fee will be incurred for cancelling your registration. Substitutions from the same organization are welcome at no additional fee. No-shows are liable for the entire conference fee.</p>

    <p>Eclipse Foundation, Inc. reserves the right to cancel the event or substitute speakers. In the unlikely event that the Eclipse Foundation should have to cancel FedGeoDay 2016, conference attendees will be refunded for the amount paid for the conference, but the Eclipse Foundation is not responsible for any attendees' other related expenses, including hotel and travel. Refunds will be issued within 15 business days after the scheduled conclusion of the conference.</p>

    <p>Finally, the Eclipse Foundation cannot, and does not, make exceptions to these policies.</p>
  </div>
</div>

<?
require_once '../tpl/footer.tpl.php';
?>


