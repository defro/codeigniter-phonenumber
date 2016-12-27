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

if ( ! function_exists('ciphonenumber_script_init'))
{
	function ciphonenumber_script_init($inputId = 'phone')
	{
		// Load file configuration
		$CI = &get_instance();
		$CI->load->config('ciphonenumber');

		// Build path to JS file
		$path = $CI->config->item('ciphonenumber_intltelinput_path');
		$path .= 'js/utils.js';

		// URL to the utils script
		$js = base_url($path);

		// Initialise it
		$html = '<script type="text/javascript">';
		$html .= '$("#' . $inputId . '").intlTelInput({';
		$html .= 'utilsScript: "' . $js . '",';
		$html .= '});';
		$html .= '</script>';

		return ( $html );
	}
}

// ------------------------------------------------------------------------

if ( ! function_exists('ciphonenumber_input'))
{
	function ciphonenumber_input($phoneNumber = NULL, $inputName = 'phone')
	{
		$input = form_input($inputName, $phoneNumber, array(
				'type' => 'tel',
				'id' => $inputName,
				'placeholder' => __("Phone number")
		));

		return ( $input );
	}
}

// ------------------------------------------------------------------------

if ( ! function_exists('ciphonenumber_script'))
{
	function ciphonenumber_script($return = 'getHtml')
	{
		// Only few type of return is allowed
		if (!in_array($return, array('getHtml', 'getUrl', 'getPath'))) {
			trigger_error("Unknown asked return in ciphonenumber_script helper : $return.", E_USER_WARNING);
			return FALSE;
		}

		// Load file configuration
		$CI = &get_instance();
		$CI->load->config('ciphonenumber');

		// Build path to JS file
		$path = $CI->config->item('ciphonenumber_intltelinput_path');
		$path .= 'js/intlTelInput.min.js';

		// Return only path
		if ($return === 'getPath')
			return ( $path );

		// Generate URL
		$url = base_url($path);

		// Return complete URL
		if ($return === 'getUrl')
			return ( $url );

		// HTML tag for include script
		$html = '<script src="' . $url . '"></script>';

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
		// Load file configuration
		$CI = &get_instance();
		$CI->load->config('ciphonenumber');

		// Get path
		$intTelInput_path = $CI->config->item('ciphonenumber_intltelinput_path');

		// Override the path to flags.png
		$flags = base_url($intTelInput_path . 'img/flags.png');
		$html = '<style type="text/css">';
		$html .= '.iti-flag { background-image: url("' . $flags . '"); }';
		$html .= '</style>';

		return ( $html );
	}
}

// ------------------------------------------------------------------------

if ( ! function_exists('ciphonenumber_stylesheet'))
{
	function ciphonenumber_stylesheet($return = 'getHtml')
	{
		// Only few type of return is allowed
		if (!in_array($return, array('getHtml', 'getUrl', 'getPath'))) {
			trigger_error("Unknown asked return in ciphonenumber_stylesheet helper : $return.", E_USER_WARNING);
			return FALSE;
		}

		// Load file configuration
		$CI = &get_instance();
		$CI->load->config('ciphonenumber');

		// Build path to CSS file
		$path = $CI->config->item('ciphonenumber_intltelinput_path');
		$path .= 'css/intlTelInput.css';

		// Return only path
		if ($return === 'getPath')
			return ( $path );

		// Generate URL
		$url = base_url($path);

		// Return complete URL
		if ($return === 'getUrl')
			return ( $url );

		// HTML tag for include stylesheet
		$html = '<link rel="stylesheet" href="' . $url . '" />';

		return ( $html );
	}
}
