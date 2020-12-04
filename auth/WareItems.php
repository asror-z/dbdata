<?php


/**
 * @author WavWan MurodovMirbosit
 *
 */

namespace zetsoft\dbdata\auth;

use zetsoft\models\place\PlaceRegion;
use zetsoft\models\ware\Ware;
use zetsoft\system\actives\ZData;
use zetsoft\system\helpers\ZArrayHelper;

class WareItems extends ZData
{

    public function lang():array
    {
        $roleEx = [
            'logistics_region',
            'complect_region',
            'warehouse_region'
        ];

        $user = $this->userIdentity();

        $region = PlaceRegion::findOne($user->place_region_id);

        $Q = Ware::find();

        if (ZArrayHelper::isIn($user->role, $roleEx)) {
            /** @var PlaceRegion $region */
            $Q->where(['id' => $region->ware_id]);
        }

        $return = $Q->asArray()->all();

        return ZArrayHelper::map($return, 'id', 'name');
    }
}
