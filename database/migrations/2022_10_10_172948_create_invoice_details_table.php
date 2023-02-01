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
        if (!Schema::hasTable('invoice_details')) {

            Schema::create('invoice_details', function (Blueprint $table) {

                $table->id();
                $table->string('invoice_number', 50);
                $table->unsignedBigInteger('invoice_id')->nullable()->refernces('id')->on('invoices');
//                $table->foreignId('invoice_id')->nullable()->constrained('users');
                $table->string('product', 50);
                $table->string('Section', 999);
                $table->string('Status', 50);
                $table->integer('Value_Status');
                $table->date('Payment_Date')->nullable();
                $table->text('note')->nullable();
                $table->string('user', 300);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_details');
    }
};
