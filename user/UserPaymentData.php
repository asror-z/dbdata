<?php


namespace zetsoft\dbdata\user;

use zetsoft\former\pays\PaysWebMoneyWMRForm;
use zetsoft\former\pays\PaysWebMoneyWMZForm;
use zetsoft\former\pays\PaysYandexMoneyForm;
use zetsoft\models\shop\ShopCatalog;
use zetsoft\models\ware\Ware;
use zetsoft\system\actives\ZData;
use zetsoft\system\Az;

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */
class UserPaymentData extends ZData
{

    public function lang():array
    {

        return [
            PaysWebMoneyWMRForm::class => Az::l('Web Money WMR'),
            PaysWebMoneyWMZForm::class => Az::l('Web Money WMZ'),
            PaysYandexMoneyForm::class => Az::l('Yandex Money'),
        ];

    }


}
