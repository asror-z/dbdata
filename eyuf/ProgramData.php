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

use zetsoft\models\App\eyuf\EyufScholar;
use zetsoft\system\actives\ZData;

class ProgramData extends ZData
{

    public function lang():array
    {
        $scholar = new EyufScholar();
        $scholar->init();
        return $scholar->_program;
    }
}
