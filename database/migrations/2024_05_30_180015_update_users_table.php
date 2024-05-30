<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop the remember_token column
            $table->dropColumn('remember_token');
            // Add the guardian_generated_password column
            $table->string('guardian_generated_password')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Add the remember_token column back
            $table->rememberToken();
            // Remove the guardian_generated_password column
            $table->dropColumn('guardian_generated_password');
        });
    }
};
