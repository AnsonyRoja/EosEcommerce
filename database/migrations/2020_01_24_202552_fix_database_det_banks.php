<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixDatabaseDetBanks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('det_payment_methods', function (Blueprint $table) {
            $table->dropForeign('fk_det_metodo_pago_moneda_payment_methods1_idx');
            $table->dropForeign('fk_det_metodo_pago_moneda_coins1_idx');
//            $table->dropColumn('[column]');
        });
        Schema::table('bank_datas', function (Blueprint $table) {
            $table->dropForeign('fk_bank_data_det_payment_methods1_idx');
            $table->dropColumn('det_payment_methods_id');
        });

       // Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('det_payment_methods');
      //  Schema::enableForeignKeyConstraints();

        Schema::table('bank_datas', function (Blueprint $table) {
            $table->unsignedInteger('payment_methods_id');
            $table->unsignedInteger('coins_id');
            
            $table->index(["payment_methods_id"], 'fk_bank_datas_payment_methods1_idx');
            $table->index(["coins_id"], 'fk_bank_datas_coins1_idx');

            $table->foreign('payment_methods_id', 'fk_bank_datas_payment_methods1_idx')
                ->references('id')->on('payment_methods')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('coins_id', 'fk_bank_datas_coins1_idx')
                ->references('id')->on('coins')
                ->onDelete('restrict')
                ->onUpdate('restrict');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
