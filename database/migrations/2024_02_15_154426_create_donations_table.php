<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cid');
            $table->string('phone');
            $table->string('nationality');
            $table->string('dzongkhag');
            $table->string('gewog');
            $table->string('village');
            $table->string('donation_type');
            $table->string('payment_platform');
            $table->string('paid_to_bank');
            $table->string('journal_no');
            $table->decimal('amount', 10, 2);
            $table->text('remarks')->nullable();
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
        Schema::dropIfExists('donations');
    }
}
