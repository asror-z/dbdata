<?php


/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\dbdata\auth;
use zetsoft\system\actives\ZData;

class CompanyTypeData extends ZData
{

    public $class = "zetsoft\dbdata\App\\" . App . '\\CompanyTypeData';

    public function lang():array
    {
        return $this->object->lang();
    }

}
