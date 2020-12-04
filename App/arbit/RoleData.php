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

namespace zetsoft\dbdata\App\arbit;

use PHPUnit\Util\RegularExpressionTest;
use zetsoft\configs\inits\Eyuf;
use zetsoft\system\actives\ZData;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;

class RoleData extends ZData
{

    
    public function lang():array
    {
        return [


            /**
             *
             * Core Roles
             */
             
            'dev' => Az::l('Разработчик'),
            'user' => Az::l('Гость'),
            'admin' => Az::l('Администратор'),
            'client' => Az::l('Клиент'),

        ];
    }

}
