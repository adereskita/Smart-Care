<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name");
            $table->string("place_of_birth");
            $table->date("date_of_birth");
            $table->string("gender");
            $table->text("address");
            $table->string('department_name')->nullable();
            $table->text("history_of_disease")->nullable();
            $table->string("sistol");
            $table->string("diastol");
            $table->string("status");
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
        Schema::dropIfExists('patients');
    }
}
