<?php
namespace CodeIgniterPhoneNumber;

defined('BASEPATH') OR exit('No direct script access allowed');

use \libphonenumber\PhoneNumber;
use \libphonenumber\PhoneNumberUtil;

class LibPhoneNumber
{

    public function __construct()
    {
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