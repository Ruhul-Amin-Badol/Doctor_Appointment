<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('appointment_no');
            $table->string('appointment_date');
            $table->integer('doctor_id')->default(0);
            $table->string('patient_name');
            $table->string('patient_phone');
            $table->decimal('total_fee',10,2)->default(00.00);;
            $table->decimal('paid_amount',10,2)->default(00.00);;
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
        Schema::dropIfExists('appointments');
    }
}
