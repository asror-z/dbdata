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
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use function Spatie\array_keys_exist;

class RoleData extends ZData
{

    public $class = "zetsoft\dbdata\App\\" . App . '\\RoleData';


    const dev = 'dev';
    const admin = 'admin';
    const user = 'user';
    
    public function lang(): array
    {

        $roles = [


            /**
             *
             * Core Roles
             */

            'dev' => Az::l('Разработчик'),
            'user' => Az::l('Гость'),
            'admin' => Az::l('Администратор'),

        ];

        return ZArrayHelper::merge($this->object->lang(), $roles);

    }

    public function menu(): array
    {
        $data = $this->object->menu();
        foreach ($this->name() as $name)
            if (!array_key_exists($name, $data))
                $data[$name] = $data['ALL'];

        return $data;
    }
    
}
