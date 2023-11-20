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
        Schema::create('tax_payments', function (Blueprint $table) {
            $table->id();
            $table->string('pan_number');
            $table->string('assessment_year');
            $table->string('financial_year');
            $table->string('major_head');
            $table->string('minor_head');
            $table->string('amount');
            $table->string('amount_in_words');
            $table->string('bank_name')->nullable();
            $table->string('model_of_payment')->nullable();
            $table->string('payment_through')->nullable();
            $table->string('tax')->nullable();
            $table->string('surcharge')->nullable();
            $table->string('cess')->nullable();
            $table->string('interest')->nullable();
            $table->string('penalty')->nullable();
            $table->string('section')->nullable();
            $table->string('total')->nullable();
            $table->string('total_in_words')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tax_payments');
    }
};
