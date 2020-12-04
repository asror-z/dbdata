<?php


namespace zetsoft\dbdata\shop;

use zetsoft\former\core\CoreCurrencyForm;
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
class CurrencyData extends ZData
{

    public function lang():array
    {


        $form = new CoreCurrencyForm();

        $data = [];
        foreach ($form->columns as $attr => $column )
            $data[$attr] = $column->title;

        return $data;
    }


}
