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
        DB::connection('integration')->unprepared("CREATE DEFINER=`root`@`%` PROCEDURE `kill_other_processes`()
BEGIN   
  DECLARE finished INT DEFAULT 0; 
  DECLARE proc_id INT; 
  DECLARE proc_id_cursor CURSOR FOR SELECT id
  FROM information_schema.processlist; 
  DECLARE CONTINUE HANDLER FOR NOT FOUND SET finished = 1;   
  OPEN proc_id_cursor;
  proc_id_cursor_loop: LOOP
     FETCH proc_id_cursor INTO proc_id; 

    IF finished = 1 THEN 
       LEAVE proc_id_cursor_loop; 
    END IF; 

    IF proc_id <> CONNECTION_ID() THEN  
     KILL proc_id; 
    END IF; 
  END LOOP proc_id_cursor_loop; 
  CLOSE proc_id_cursor;
 END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::connection('integration')->unprepared("DROP PROCEDURE IF EXISTS kill_other_processes");
    }
};
