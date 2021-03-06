<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->string('full_name');
            $table->string('mother_name');
            $table->date('birthday');
            $table->string('cpf',14)->unique();
            $table->string('cns',18)->unique();
            $table->string('cep',9);
            $table->string('adress',50);
            $table->unsignedInteger('number');
            $table->string('complement',30)->nullable();
            $table->string('district',40);
            $table->string('city', 40);
            $table->string('state_abbr', 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
