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
        if (!Schema::hasTable('invoice_attachments')) {
            Schema::create('invoice_attachments', function (Blueprint $table) {
                $table->id();
                $table->string('file_name', 999);
                $table->string('invoice_number', 50);
                $table->string('CreatedBy');
                $table->unsignedBigInteger('invoice_id')->nullable()->references('id')->on('invoices');
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
        Schema::dropIfExists('invoice_attachments');
    }
};
