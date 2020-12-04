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

namespace zetsoft\dbdata\eyuf;


use zetsoft\former\core\CoreCurrencyForm;
use zetsoft\models\user\User;
use zetsoft\system\actives\ZData;
use zetsoft\system\helpers\ZArrayHelper;

class OperatorData extends ZData
{
    public function lang():array
    {

        $operator = User::find()
            ->where([

            ])
            ->all();
            
        return ZArrayHelper::map($operator, 'id', 'name');
    }


}
