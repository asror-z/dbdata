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

namespace zetsoft\dbdata\chess;

use PhpOffice\PhpSpreadsheet\Shared\OLE\PPS\Root;
use zetsoft\service\cores\Langs;
use zetsoft\system\actives\ZData;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZFileHelper;
use zetsoft\system\helpers\ZInflector;

class ChessColumnData extends ZData
{
    public $path = '\\dbdata\\chess';
    public function lang():array
    {
        $files = ZFileHelper::scanFilesPHP(Root . $this->path);
        $current = 'zetsoft' . $this->path . '\\' . $this->className;
        $return = [];
        foreach ($files as $file){

            $class = ZInflector::classClean($file);
            $class = ZInflector::classSpace($class);

            if (!class_exists($class))
                continue;
                
            if ($class === $current)
                continue;



            $return[$class] = $class;
        }
        return $return;
    }
}
