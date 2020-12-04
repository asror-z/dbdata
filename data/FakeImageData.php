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

namespace zetsoft\dbdata\data;

use zetsoft\models\user\User;
use zetsoft\system\actives\ZData;

class FakeImageData extends ZData
{
    public function lang():array
    {
        return [
            'https://picsum.photos/id/'.random_int(1, 1080).'/1024/768/',
            'https://picsum.photos/id/'.random_int(1, 1080).'/1024/768/',
        ];
    }
}
