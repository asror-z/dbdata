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


use zetsoft\former\eyuf\EyufNeedCompatriotForm;
use zetsoft\former\eyuf\EyufNeedForm;
use zetsoft\former\libra\Data;
use zetsoft\models\App\eyuf\EyufNeedCompatriot;
use zetsoft\system\actives\ZData;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZFileHelper;
use function Composer\Autoload\getData;

class DepDropData extends ZData
{
    public function lang($data)
    {
        return [
          "id" => "sa",
          "id1" => "sa1",
          "id2" => "sa3",
        ];
        $out = $this->getData($data);
        return $out;
    }

    private function getData($models)
    {
        $out = [];
        foreach ($models as $model) {
            array_push($out,[
                'id' => $model->id,
                'name' => $model->name,
            ]);
        }
        return $out;
    }


}
