<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->after('lastname', function (Blueprint $table) {
                $table->string('firstname_en')->nullable();
                $table->string('lastname_en')->nullable();
                $table->string('gender')->nullable();
                $table->date('birthday')->nullable();
                
            });
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropcolumn([
                'firstname_en',
                'lastname_en',
                'gender',
                'birthday'
            ]);
        });
    }
};
