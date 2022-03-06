<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->date  ('hiring_date');
            $table->string('insurance_value');
            $table->date  ('insurance_start');
            $table->date  ('insurance_end');
            $table->enum('work_hours', [12, 8]);
            $table->enum('shift', ['صباحي', 'مسائي']);
            $table->enum('gender', ['أنثى', 'ذكر']);
            $table->string('personal_id');
            $table->string('visa_num');
            $table->date ('retirement_date');
            $table->decimal('salary', $precision = 8, $scale = 2);
            $table->text('papers');
            $table->date ('paper-completed');
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
        Schema::dropIfExists('employees');
    }
}


