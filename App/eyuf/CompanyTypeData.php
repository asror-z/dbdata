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

use zetsoft\system\actives\ZData;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;

class CompanyTypeData extends ZData
{
    
    public function lang():array
    {
        return [
            'main' => Az::l('ZetSoft'),
            'market' => Az::l('Магазины'),
            'cpa' => Az::l('Сети CPA'),
            'logistics' => Az::l('Логистика'),
            'transport' => Az::l('Транспортная'),
            'callcenter' => Az::l('Колл центр'),
            'selfemployed' => Az::l('Частный предприниматель'),
        ];
    }

}
