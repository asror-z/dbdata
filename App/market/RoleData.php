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

namespace zetsoft\dbdata\App\market;

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


            'cpa' => Az::l('Сеть CPA'),
            'seller' => Az::l('Продавец'),

            'logistics' => Az::l('Менеджер логистики'),
            'logistics_region' => Az::l('Региональный менеджер логистики'),
            'deliver' => Az::l('Курьер'),

            'complect' => Az::l('Комплектация'),
            'complect_region' => Az::l('Региональный комплектация'),

            'warehouse' => Az::l('Менеджер cклада'),
            'warehouse_region' => Az::l('Региональный менеджер cклада'),

            'client' => Az::l('Клиент'),

            'agent' => Az::l('Оператор'),
            'supervisor' => Az::l('Супервайзер'),


            /**
             *
             * Later
             */

            'clientcpa' => Az::l('Клиент от CPA'),


            /**
             *
             * Non actual
             */
            'moder' => Az::l('Модератор'),
        ];
    }


    public function menu():array
    {

        return [

            'ALL' => '/core/user/user-auth/loginCRM.aspx',

            'dev' => '/shop/admin/main/main.aspx',
            'admin' => '/shop/admin/main/main.aspx',
            'seller' => '/shop/seller/main/index.aspx',

            'logistics' => '/shop/logistics/shop-order/index.aspx',
            'logistics_region' => '/shop/logistics/shop-order/index.aspx',

            'deliver' => '/shop/deliver/main/index.aspx',

            'complect' => '/shop/complect/main/index.aspx',
            'complect_region' => '/shop/complect/main/index.aspx',

            'warehouse' => '/shop/warehouse/shop-order/index.aspx',
            'warehouse_region' => '/shop/warehouse/shop-order/index.aspx',

            'client' => '/shop/user/main-common/main.aspx',

            'agent' => '/shop/agent/manual/main.aspx',
            'supervisor' => '/shop/supervisor/main/index.aspx',


        ];


    }


}
