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

use zetsoft\models\App\eyuf\EyufDocument;
use zetsoft\models\App\eyuf\EyufDocumentType;
use zetsoft\models\App\eyuf\EyufScholar;
use zetsoft\system\actives\ZData;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;

class DocTypeData extends ZData
{


    public function lang(): array
    {
        $all = EyufDocumentType::find()
            ->asArray()
            ->all();
             //vdd($this->actionId);

        $return = [];

        switch ($this->userRole()) {

            case 'scholar':

                if ($this->actionId === 'index' || $this->actionId === 'docs') {
                    $return = ZArrayHelper::map($all, 'id', 'name');

                    break;
                }

                if ($this->actionId === 'doc-update') {
                    /** @var EyufDocument $doc */
                    $doc = EyufDocument::findOne($this->httpGet('id'));
                    $docType = EyufDocumentType::findOne(['id' => $doc->eyuf_document_type_id]);
                    $return[$docType->id] = $docType->name;
                    break;
                }

                $list = Az::$app->App->eyuf->getDocs()->getDocList();

                foreach ($list as $item) {
                    if ($item['document'] === null)
                        $return[$item['type']->id] = $item['type']->name;
                }
                break;


            default:
                $return = ZArrayHelper::map($all, 'id', 'name');
        }

        //  vd($return);
        return $return;

    }
}
