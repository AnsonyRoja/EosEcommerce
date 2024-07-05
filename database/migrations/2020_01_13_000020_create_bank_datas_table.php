<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankDatasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'bank_datas';

    /**
     * Run the migrations.
     * @table bank_datas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('titular', 90);
            $table->text('description')->nullable();
            $table->char('account_type', 1)->nullable()->default(null);
            $table->unsignedInteger('banks_id');
            $table->unsignedInteger('det_payment_methods_id');
            $table->enum('status', ['A', 'I'])->nullable()->default('A');
            $table->index(["det_payment_methods_id"], 'fk_bank_data_det_payment_methods1_idx');

            $table->index(["banks_id"], 'fk_bank_data_banks1_idx');
            $table->timestamps();


            $table->foreign('banks_id', 'fk_bank_data_banks1_idx')
                ->references('id')->on('banks')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('det_payment_methods_id', 'fk_bank_data_det_payment_methods1_idx')
                ->references('id')->on('det_payment_methods')
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
       Schema::dropIfExists($this->tableName);
     }
}
