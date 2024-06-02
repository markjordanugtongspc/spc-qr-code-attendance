<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('logs2', function (Blueprint $table) {
            $table->softDeletes();  // Add this line
        });
    }

    public function down()
    {
        Schema::table('logs2', function (Blueprint $table) {
            $table->dropSoftDeletes(); // Add this line for reversal
        });
    }
};
