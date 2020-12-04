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

    const dev = 'dev';
    const admin = 'admin';
    const user = 'user';
    
    const monitor = 'monitor';
    const accounter = 'accounter';
    const needer = 'needer';
    const moderator = 'moderator';
    const compatriot = 'compatriot';
    const scholar = 'scholar';
    const masdoc = 'masdoc';
    const interqua = 'interqua';

    public function lang(): array
    {
        return [


            /**
             *
             * Core Roles
             */

            'monitor' => Az::l('Отдель мониторинга'),
            'accounter' => Az::l('Отдель бухгалтерии'),
            'needer' => Az::l('Отдель потребностей'),
            'moderator' => Az::l('Модератор'),
            'compatriot' => Az::l('Соотечетвенники'),
            'scholar' => Az::l('Стипендиант'),
            'masdoc' => Az::l('Масдок'),
            'interqua' => Az::l('Интеркуа'),

            /**
             *
             * Later
             */


        ];
    }


    public function menu(): array
    {
        return [


            /**
             *
             * Core Roles
             */

            'ALL' => '/eyuf/cores/main/index.aspx',
            'admin' => '/eyuf/logics/admin/index.aspx',

            'monitor' => '/eyuf/logics/monitor/index.aspx',
            'accounter' => '/eyuf/logics/accounter/index.aspx',
            'needer' => '/eyuf/logics/needer/index.aspx',
            'moderator' => '/eyuf/logics/moderator/index.aspx',
            'compatriot' => '/eyuf/logics/compatriot/index.aspx',
            'scholar' => '/eyuf/logics/scholar/index.aspx',
            'masdoc' => '/eyuf/logics/masdoc/index.aspx',
            'interqua' => '/eyuf/logics/interqua/index.aspx',

        ];
    }


}
