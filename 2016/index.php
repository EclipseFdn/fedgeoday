<?php
/*******************************************************************************
 * Copyright (c) 2016 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Christopher Guindon (Eclipse Foundation) - Initial implementation
 *******************************************************************************/

/**
 * Define ABSPATH as this files directory
 */
define('ABSPATH', dirname(__FILE__) . '/2016/');

require_once '../tpl/bootstrap.inc.php';
/**
 * Load template files.
 */
require_once '../tpl/head.tpl.php';
require_once '../tpl/body.tpl.php';
require_once '../tpl/footer.tpl.php';