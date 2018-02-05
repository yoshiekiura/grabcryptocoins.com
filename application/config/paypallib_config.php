<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

// ------------------------------------------------------------------------
// Paypal IPN Class
// ------------------------------------------------------------------------

// Use PayPal on Sandbox or Live
$config['sandbox'] = FALSE; // FALSE for live environment

// PayPal Business Email ID
//$config['business'] = 'learnjoy007@gmail.com';
//$config['business'] = 'learnjoy007-facilitator@gmail.com';
//$config['business'] = 'info@codexworld.com';
//$config['business'] = 'jangiddevendra775-facilitator@gmail.com';
//$config['business'] = 'jangiddevendra775@gmail.com';
//$config['business'] = 'infohealmylife@gmail.com';
//$config['business'] = 'gccblockstat@outlook.com';
$config['business'] = "order@grabcryptocoins.com";
// pasowrd Awesome@0511
// If (and where) to log ipn to file
$config['paypal_lib_ipn_log_file'] = BASEPATH . 'logs/paypal_ipn.log';
$config['paypal_lib_ipn_log'] = TRUE;

// Where are the buttons located at 
$config['paypal_lib_button_path'] = 'buttons';

// What is the default currency?
$config['paypal_lib_currency_code'] = 'USD';

?>