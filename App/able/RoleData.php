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

namespace zetsoft\dbdata\App\eyuf;

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

            'cpa' =>  Az::l('Сеть CPA'),
            'seller' =>  Az::l('Продавец'),

            'logistics' => Az::l('Менеджер логистики'),
            'deliver' => Az::l('Курьер'),
            
            'complect' => Az::l('Комплектация'),
            'warehouse' => Az::l('Менеджер cклада'),

            'client' =>  Az::l('Клиент'),

            'agent' => Az::l('Оператор'),
            'supervisor' => Az::l('Супервайзер'),


            /**
             *
             * Later
             */

            'clientcpa' =>  Az::l('Клиент от CPA'),


            /**
             *
             * Non actual
             */
            'moder' => Az::l('Модератор'),
        ];
    }


}
