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

use zetsoft\models\user\User;
use zetsoft\system\actives\ZData;

class UserData extends ZData
{
    public function lang():array
    {
        return [$this->userIdentity()->id => $this->userIdentity()->name];
    }
}
