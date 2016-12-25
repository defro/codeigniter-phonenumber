<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter Phone Number Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Joël Gaujard
 * @link		https://github.com/defro/codeigniter-phonenumber
 */

// ------------------------------------------------------------------------

if ( ! function_exists('ciphonenumber_input'))
{
	function ciphonenumber_input($phoneNumber = NULL)
	{
		// Add input text field
		$html = '<input type="tel" id="phone" name="phone" value="' . $phoneNumber . '" />';

		return ( $html );
	}
}

// ------------------------------------------------------------------------

if ( ! function_exists('ciphonenumber_script_init'))
{
	function ciphonenumber_script_init()
	{
		// Include the utils script
		$js = base_url('vendor/jackocnr/intl-tel-input/build/js/utils.js');

		// Initialise it on input element
		$html = '<script type="text/javascript">';
		$html .= '$("#phone").intlTelInput({ utilsScript: "' . $js . '" });';
		$html .= '</script>';

		return ( $html );
	}
}

// ------------------------------------------------------------------------

if ( ! function_exists('ciphonenumber_script'))
{
	function ciphonenumber_script($getUriOnly = FALSE)
	{
		// Include the script
		$js = base_url('vendor/jackocnr/intl-tel-input/build/js/intlTelInput.min.js');

		if ($getUriOnly === TRUE) {
			return ( $js );
		}

		$html = '<script src="' . $js . '"></script>';

		return ( $html );
	}
}

// ------------------------------------------------------------------------

if ( ! function_exists('ciphonenumber_script_jquery'))
{
	function ciphonenumber_script_jquery()
	{
		// Include jQuery
		$html = '<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>';

		return ( $html );
	}
}

// ------------------------------------------------------------------------

if ( ! function_exists('ciphonenumber_stylesheet_overwrite'))
{
	function ciphonenumber_stylesheet_overwrite()
	{
		$intTelInput_path = 'vendor/jackocnr/intl-tel-input/build/';

		// Override the path to flags.png
		$flags = base_url($intTelInput_path . 'img/flags.png');
		$html = '<style type="text/css">';
		$html .= '.iti-flag {background-image: url("' . $flags . '");}';
		$html .= '</style>';

		return ( $html );
	}
}

// ------------------------------------------------------------------------

if ( ! function_exists('ciphonenumber_stylesheet'))
{
	function ciphonenumber_stylesheet($getUriOnly = FALSE)
	{
		// URL to stylesheet
		$css = base_url('vendor/jackocnr/intl-tel-input/build/css/intlTelInput.css');

		if ($getUriOnly === TRUE) {
			return ( $css );
		}

		// Include the stylesheet
		$html = '<link rel="stylesheet" href="' . $css . '" />';

		return ( $html );
	}
}
