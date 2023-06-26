<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        DB::statement("CREATE VIEW `view1` AS select `subscribers`.`ID` AS `ID`,`subscribers`.`msisdn` AS `msisdn`,`subscribers`.`pin` AS `pin`,`subscribers`.`operators_id` AS `operators_id`,`subscribers`.`country_id` AS `country_id`,`subscribers`.`service_id` AS `service_id`,`subscribers`.`subService_id` AS `subService_id`,`subscribers`.`cseq` AS `cseq`,`subscribers`.`subdate` AS `subdate` from `subscribers`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `view1`");
    }
};
