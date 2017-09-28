<?php

/***********************************************************
 *
 * Package   : Blox Theme
 * Author    : Original by Clay Griffiths - Headway Themes
 *             New files by Maarten Schraven - UNITED 7
 * Copywrite : Copyright 2009-2016 Vesped Inc
 * Version 	 : v1.0.3
 *
 ***********************************************************/

/* Prevent direct access to this file */
if ( !defined('WP_CONTENT_DIR') )
	die('Please do not access this file directly.');

/* Make sure PHP 5.2 or newer is installed and WordPress 3.2 or newer is installed. */
require_once get_template_directory() . '/library/common/compatibility-checks.php';

/* Load Blox! */
require_once get_template_directory() . '/library/common/functions.php';
require_once get_template_directory() . '/library/common/application.php';

Blox::init();
