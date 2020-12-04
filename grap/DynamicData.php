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

namespace zetsoft\dbdata\grap;

use PhpOffice\PhpSpreadsheet\Shared\OLE\PPS\Root;
use zetsoft\models\drag\DragConfigDb;
use zetsoft\models\page\PageAction;
use zetsoft\models\user\User;
use zetsoft\system\actives\ZData;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZFileHelper;
use zetsoft\system\helpers\ZStringHelper;
use function Dash\where;

class DynamicData extends ZData
{

    public function lang():array
    {
        $className = bname($this->httpGet('modelClass'));
        //vdd($this->httpGet('model'));
        $model = DragConfigDb::find()
            ->where([
                'class_name' => $className
            ])
            ->one();

            //vdd($model);

        if ($model)
            $modelName = $model->class_name;
        else
            $modelName = PageAction::class;

        $arr = [];

        $attributes = Az::$app->smart->migra->getAttrsOfModel();
        if (ZArrayHelper::keyExists($this->bootFull($modelName), (array)$attributes)) {
            $arr = $attributes[$this->bootFull($modelName)];
        }

        return $arr;

    }


}
