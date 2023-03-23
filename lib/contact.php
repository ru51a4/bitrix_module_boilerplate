<?php

namespace ru51a4\contact;

use Bitrix\Main\Config\Option;


class Contact
{

    public static function get($key)
    {
        return Option::get("ru51a4.contact", $key);
    }

}