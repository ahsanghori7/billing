<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('integration')->create('etisalat_cohorts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('service_id');
            $table->date('subscription_date')->index('subscription_date_2');
            $table->float('revenue', 10, 0);
            $table->integer('initial_subscribers')->nullable()->default(1);
            $table->float('arpu', 10, 0);
            $table->timestamp('updated_at')->useCurrent();

            $table->index(['subscription_date', 'service_id'], 'subscription_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('integration')->dropIfExists('etisalat_cohorts');
    }
};
