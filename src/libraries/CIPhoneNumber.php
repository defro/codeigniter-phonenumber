<?php
// CodeIgniter cannot load Library with namespace
//namespace CodeIgniterPhoneNumber;

defined('BASEPATH') OR exit('No direct script access allowed');

use \libphonenumber\PhoneNumber;
use \libphonenumber\PhoneNumberUtil;

class CIPhoneNumber
{

    public function __construct()
    {
        log_message('debug', "LibPhoneNumber library Class Initialized");
    }

    public function parse($phoneNumber, $countryIso = NULL)
    {
        return ( PhoneNumberUtil::getInstance()->parse($phoneNumber, $countryIso) );
    }

    public function isValidNumber(PhoneNumber $phoneNumberInstance)
    {
        return ( PhoneNumberUtil::getInstance()->isValidNumber($phoneNumberInstance) );
    }

}