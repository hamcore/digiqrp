<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QueryBasedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = "INSERT INTO `page__pages` (`template`,`is_home`,`created_at`,`updated_at`) VALUES ('',0,'2021-02-11 16:09:18','2021-02-11 16:09:18');
";

        DB::unprepared($sql);

        $target = DB::connection()->getPdo()->lastInsertId();
        $target++;

        $sql = "INSERT INTO `page__pages` (`id`,`template`,`is_home`,`created_at`,`updated_at`) VALUES ($target,'',0,'2021-02-11 16:09:18','2021-02-11 16:09:18');
";

        DB::unprepared($sql);

        $targetTrans = "INSERT INTO `page__page_translations` (`page_id`,`locale`,`title`,`slug`,`status`,`body`,`meta_title`,`meta_description`,`og_title`,`og_description`,`og_image`,`og_type`,`created_at`,`updated_at`,`meta_generic_data`) VALUES ($target,'en','Employee Logged In No Vouchers','login-content-employee-primary-no_vouchers',1,'',NULL,NULL,NULL,NULL,NULL,NULL,'2021-02-11 16:09:18','2021-02-11 16:09:18',NULL);
";

        DB::unprepared($sql);

        $resources = "INSERT INTO `page__page_components` (`page_id`,`locale`,`component_id`,`order`,`component_slug`,`fields`,`created_at`,`updated_at`) VALUES ($target,NULL,'0vDW0F9WbSn1',0,'heading','{\"size\":\"h1\",\"content\":\"EXCLUSIVE OFFERS FOR EMPLOYEE PARTNERS\"}','2019-01-08 05:00:01','2019-12-12 06:19:24');
INSERT INTO `page__page_components` (`page_id`,`locale`,`component_id`,`order`,`component_slug`,`fields`,`created_at`,`updated_at`) VALUES ($target,NULL,'Pbwxy9STOtiJ',1,'text','{\"content\":\"<p style=\\\"margin-left:0px; margin-right:0px; text-align:start\\\">As a Vauxhall Employee Partner you get &pound;1,000 off a brand new Vauxhall. You can choose to use this as a cash price saving or on top of our nationally promoted 3.9% Personal Contract Purchase or 0% Conditional Sale finance offers*.&nbsp;<\\/p>\"}','2019-01-16 08:27:58','2020-10-20 13:21:34');
INSERT INTO `page__page_components` (`page_id`,`locale`,`component_id`,`order`,`component_slug`,`fields`,`created_at`,`updated_at`) VALUES ($target,NULL,'7JD6ezmdMCt0',17,'text','{\"content\":\"<p>&nbsp;<\\/p>\\r\\n\\r\\n<p>*<strong>Personal Contract Purchase<\\/strong><\\/p>\\r\\n\\r\\n<p>Offer applies to Vauxhall Partners &amp; nominees only. Visit&nbsp;<a href=\\\"https:\\/\\/www.vauxhallpartners.co.uk\\/en\\/terms-and-conditions\\\" rel=\\\"nofollow noopener\\\" target=\\\"_blank\\\" title=\\\"Follow link\\\">https:\\/\\/www.vauxhallpartners.co.uk\\/en\\/terms-and-conditions<\\/a>&nbsp;for full qualifying criteria. Not available in conjunction with Vauxhall Conquest or Vauxhall Renewal Bonus.&nbsp;<\\/p>\\r\\n\\r\\n<p>Offer subject to availability at participating Retailers only. Personal Contract Purchase. Finance subject to status, Ts&amp;Cs apply. Applicants must be 18+. Finance by Vauxhall Finance, CF15 7YT. 24-48 month term available. At the end of the agreement there are three options: i) Part exchange the vehicle, where equity is available ii) Pay the optional final payment to own the vehicle, or iii) Return the vehicle. Offer applies to private individuals and Vauxhall Partners. Orders from 20th October to 17 December 2020.&nbsp;Vauxhall reserves the right to change, amend or withdraw sales allowances and\\/or amend pricing at any point in time in anticipation of any tariffs, duties taxes or other costs that Vauxhall Motors believes may increase its cost of importation and\\/or supply of vehicles after the 31st December 2020.<\\/p>\"}','2019-12-12 06:29:19','2020-11-02 06:20:48');
INSERT INTO `page__page_components` (`page_id`,`locale`,`component_id`,`order`,`component_slug`,`fields`,`created_at`,`updated_at`) VALUES ($target,NULL,'DeloByOfRIBZ',14,'heading','{\"size\":\"h4\",\"content\":\"What\'s next?\"}','2020-07-03 10:08:59','2020-11-02 06:20:48');
INSERT INTO `page__page_components` (`page_id`,`locale`,`component_id`,`order`,`component_slug`,`fields`,`created_at`,`updated_at`) VALUES ($target,NULL,'j4t7roFmMYIE',15,'tile-half','{\"imageLink\":\"\\/en\\/request-quote\",\"imageTarget\":null,\"title\":\"Get your voucher TBC \",\"description\":\"When you\\u2019re ready to redeem your offer, simply click \\u2018Get Your Voucher\\u2019 and a unique code will be sent to your email to show to your chosen Vauxhall Retailer.\",\"buttonText\":\"BUY ONLINE\",\"buttonLink\":\"https:\\/\\/store.vauxhall.co.uk\",\"buttonTarget\":null}','2020-07-03 10:08:59','2020-11-02 06:20:48');
INSERT INTO `page__page_components` (`page_id`,`locale`,`component_id`,`order`,`component_slug`,`fields`,`created_at`,`updated_at`) VALUES ($target,NULL,'YPIBjy5HX3OS',16,'tile-half','{\"imageLink\":\"\\/en\\/nominate\",\"imageTarget\":null,\"title\":\"Sharing your Partners benefit\",\"description\":\"Remember, you can nominate up to 3 family members or friends a year to give them access to these incredible offers.\",\"buttonText\":\"NOMINATE\",\"buttonLink\":\"\\/en\\/nominate\",\"buttonTarget\":null}','2020-07-03 10:08:59','2020-11-02 06:20:48');
INSERT INTO `page__page_components` (`page_id`,`locale`,`component_id`,`order`,`component_slug`,`fields`,`created_at`,`updated_at`) VALUES ($target,NULL,'1IAVnfjGA0ov',2,'tile-third','{\"title\":\"All-new Corsa\",\"linkText\":\"VIEW OFFER\",\"linkUrl\":\"employee-pcp-offer-new-corsa\",\"linkTarget\":null}','2020-07-30 05:14:24','2020-07-30 05:14:24');
INSERT INTO `page__page_components` (`page_id`,`locale`,`component_id`,`order`,`component_slug`,`fields`,`created_at`,`updated_at`) VALUES ($target,NULL,'RWE3v1OMHH36',3,'tile-third','{\"title\":\"New Corsa-e\",\"linkText\":\"VIEW OFFER\",\"linkUrl\":\"employee-pcp-offer-new-corsa-e\",\"linkTarget\":null}','2020-07-30 05:14:24','2020-07-30 05:14:24');
INSERT INTO `page__page_components` (`page_id`,`locale`,`component_id`,`order`,`component_slug`,`fields`,`created_at`,`updated_at`) VALUES ($target,NULL,'CnJ1BmRnOmWA',6,'tile-third','{\"title\":\"Crossland X\",\"linkText\":\"VIEW OFFER\",\"linkUrl\":\"employee-pcp-offer-crossland-x\",\"linkTarget\":null}','2020-07-30 05:14:24','2020-08-17 11:57:46');
INSERT INTO `page__page_components` (`page_id`,`locale`,`component_id`,`order`,`component_slug`,`fields`,`created_at`,`updated_at`) VALUES ($target,NULL,'nR4tPcC2BTiG',7,'tile-third','{\"title\":\"Grandland X\",\"linkText\":\"VIEW OFFER\",\"linkUrl\":\"employee-pcp-offer-grandland-x\",\"linkTarget\":null}','2020-07-30 05:14:24','2020-08-17 11:57:46');
INSERT INTO `page__page_components` (`page_id`,`locale`,`component_id`,`order`,`component_slug`,`fields`,`created_at`,`updated_at`) VALUES ($target,NULL,'yHMmhhHiP0xg',8,'tile-third','{\"title\":\"Grandland X Hybrid\",\"linkText\":\"VIEW OFFER\",\"linkUrl\":\"employee-pcp-offer-grandland-x-phev\",\"linkTarget\":null}','2020-07-30 05:14:24','2020-08-17 11:57:46');
INSERT INTO `page__page_components` (`page_id`,`locale`,`component_id`,`order`,`component_slug`,`fields`,`created_at`,`updated_at`) VALUES ($target,NULL,'Y4SQ2AZosQoe',9,'tile-third','{\"title\":\"Combo Life\",\"linkText\":\"VIEW OFFER\",\"linkUrl\":\"employee-offer-conditional-sale-combo-life\",\"linkTarget\":null}','2020-07-30 05:14:24','2020-10-07 12:14:17');
INSERT INTO `page__page_components` (`page_id`,`locale`,`component_id`,`order`,`component_slug`,`fields`,`created_at`,`updated_at`) VALUES ($target,NULL,'GaljwtMLoH3y',4,'tile-third','{\"title\":\"New Astra\",\"linkText\":\"VIEW OFFER\",\"linkUrl\":\"employee-pcp-offer-astra\",\"linkTarget\":null}','2020-08-17 11:32:39','2020-08-17 11:33:20');
INSERT INTO `page__page_components` (`page_id`,`locale`,`component_id`,`order`,`component_slug`,`fields`,`created_at`,`updated_at`) VALUES ($target,NULL,'odseeqtsxrYr',5,'tile-third','{\"title\":\"New Insignia\",\"linkText\":\"VIEW OFFER\",\"linkUrl\":\"employee-offer-conditional-sale-insignia\",\"linkTarget\":null}','2020-08-17 11:56:36','2020-10-07 12:14:17');
INSERT INTO `page__page_components` (`page_id`,`locale`,`component_id`,`order`,`component_slug`,`fields`,`created_at`,`updated_at`) VALUES ($target,NULL,'26aoTJGtQ3Lw',10,'tile-third','{\"title\":\"Vivaro Life\",\"linkText\":\"VIEW OFFER\",\"linkUrl\":\"employee-offer-conditional-sale-vivaro-life\",\"linkTarget\":null}','2020-10-07 12:07:41','2020-10-07 12:07:41');
INSERT INTO `page__page_components` (`page_id`,`locale`,`component_id`,`order`,`component_slug`,`fields`,`created_at`,`updated_at`) VALUES ($target,NULL,'ijtQHSZqEtna',11,'tile-third','{\"title\":\"Combo Cargo\",\"linkText\":\"VIEW OFFER\",\"linkUrl\":\"employee-offer-conditional-sale-combo-cargo\",\"linkTarget\":null}','2020-11-02 06:20:48','2020-11-02 06:20:48');
INSERT INTO `page__page_components` (`page_id`,`locale`,`component_id`,`order`,`component_slug`,`fields`,`created_at`,`updated_at`) VALUES ($target,NULL,'RwAFVAcHTLmq',12,'tile-third','{\"title\":\"New Vivaro\",\"linkText\":\"VIEW OFFER\",\"linkUrl\":\"employee-offer-conditional-sale-vivaro\",\"linkTarget\":null}','2020-11-02 06:20:48','2020-11-02 08:19:36');
INSERT INTO `page__page_components` (`page_id`,`locale`,`component_id`,`order`,`component_slug`,`fields`,`created_at`,`updated_at`) VALUES ($target,NULL,'QnZ4hoN5SgfJ',13,'tile-third','{\"title\":\"New Movano\",\"linkText\":\"VIEW OFFER\",\"linkUrl\":\"employee-offer-conditional-sale-movano\",\"linkTarget\":null}','2020-11-02 06:20:48','2020-11-02 08:19:36');
";

        DB::unprepared($sql);
    }
}
