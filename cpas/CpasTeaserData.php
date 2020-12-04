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

namespace zetsoft\dbdata\cpas;

use zetsoft\system\actives\ZData;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;

class CpasTeaserData extends ZData
{
    public function lang():array
    {
        return [
            'Mgid_com' => 'keyword={category_id}&cost={click_price}&external_id={click_id}&creative_id={teaser_id}&ad_campaign_id={campaign_id}&source={widget_id}',
            'traficfactory_biz' => 'keyword={categories}&cost=+{target.bid}&currency=usd&external_id={goal_tracking}&creative_id={banner.name}&ad_campaign_id={campaign.id}&source={SiteName}&sub_id_1={carrier}',
            'bigclick_me' => 'cost={BID}&currency=usd&external_id={UUID}&creative_id={TID}&ad_campaign_id={CID}&source={SID}',
            'ads_keeper' => 'keyword={category_id}&cost={click_price}&external_id={click_id}&creative_id={teaser_id}&ad_campaign_id={campaign_id}&source={widget_id}',
            'Bodyclick_ru' => 'cost=[PRICE]&currency=rub&external_id=[UID]&creative_id=[ID]&ad_campaign_id=[CID]&source=[SID]',
            'Kadam_net' => 'external_id=[CPA]&creative_id=[ID]&source=[SID]',
            'Visitweb_com' => 'cost={REAL_COST}&external_id={UID}&creative_id={AD}&ad_campaign_id={CAMP}&source={HSITE2}&sub_id_1={FORMAT}&sub_id_2={OPERATOR}&sub_id_3={SITE}',
            'LuckyAds_pro' => 'cost=[BID]&external_id=[CLICK_ID]&creative_id=[AD_ID]&ad_campaign_id=[AD_GROUP_ID]&source=[SITE_ID]&block=[BLOCK_ID]',
            'Redclick_ru' => 'creative_id=%tizer_id%&source=%source_id%',
            'Adhub_com' => 'external_id={click_id}&creative_id={ad_id}&ad_campaign_id={camp_id}&source={site_id}',
            'Trafficstrars_com' => 'keyword={keywords}&cost={cost}&creative_id={creative_id}&ad_campaign_id={campaign}&source={site}+(ID:{site_id})&sub_id_1={format}+(ID:{format_id})&sub_id_2={pricing_model}&sub_id_3={adspot_name}+(ID:{adspot_id})&sub_id_4={carrier}+(ID:{carrier_id})&sub_id_5={site_host}&sub_id_6={category}+(ID:{category_id})'
        ];

        /**
         * keyword
         * cost
         * external_id
         * creative_id
         * ad_campaign_id
         * source
         * currency
         *
         * sub_id_1
         * sub_id_2
         * sub_id_3
         * sub_id_4
         * sub_id_5
         * sub_id_6
         *
         *
         *
         */
    }
}
