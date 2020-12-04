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

namespace zetsoft\dbdata\web;

use zetsoft\models\page\PageModule;
use zetsoft\models\App\eyuf\EyufDocument;
use zetsoft\models\App\eyuf\EyufDocumentType;
use zetsoft\models\App\eyuf\EyufScholar;
use zetsoft\system\actives\ZData;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZStringHelper;

class CoreModuleData extends ZData
{


    public function lang():array
    {
        $all = PageModule::find()
            ->asArray()
            ->all();

        $return = [];

        switch ($this->actionId) {

            case 'create':

                foreach ($all as $app) {
                    $name = $app['name'];
                    if (ZStringHelper::find($name, 'ALL')) continue;

                    $return[$app['id']] = $app['name'];

                }

                break;


            default:
                $return = ZArrayHelper::map($all, 'id', 'name');
        }


        return $return;
    }
}
