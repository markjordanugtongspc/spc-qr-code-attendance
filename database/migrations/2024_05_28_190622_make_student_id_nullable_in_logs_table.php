<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('logs', function (Blueprint $table) {
            // Change the 'student_id' column to be nullable
            $table->string('student_id')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('logs', function (Blueprint $table) {
            // Revert the 'student_id' column to be not nullable
            $table->string('student_id')->nullable(false)->change();
        });
    }
};
