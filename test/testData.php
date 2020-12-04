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

namespace zetsoft\dbdata\test;

use zetsoft\models\user\User;
use zetsoft\system\actives\ZData;

class AsrorData extends ZData
{
    public function lang():array
    {

        // $users = User::find()
        
        return [
            1 => '1111',
            2 => '2222',
            3 => '3333',
        ];
    }
}
