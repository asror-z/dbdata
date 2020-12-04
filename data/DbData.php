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
use zetsoft\system\actives\ZConnection;
use zetsoft\system\actives\ZData;
use zetsoft\system\Az;

class DbData extends ZData
{
    public function lang():array
    {
        $components = Az::$app->getComponents();
        foreach ($components as $key => $component) {
            if (is_array($component) && $component['class'] === ZConnection::class) {
                $dbs[$key] = $key;
            }
        }

        if (!empty($dbs)) {
            return $dbs;
        }
        return null;
    }
}
