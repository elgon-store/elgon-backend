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
        Schema::table('users', function (Blueprint $table) {
            $table->string('photo')->nullable()->after('name');
            $table->string('phone')->nullable()->after('photo');
            $table->string('title')->nullable()->after('phone');
            $table->text('bio')->nullable()->after('title');

            $table->enum('role', ['admin', 'author', 'user'])->default('user')->after('bio');
            $table->enum('status', ['active', 'inactive'])->default('active')->after('role');
            $table->float('balance', 10, 2)->default(0.0)->after('status');
            $table->string('currency', 10)->default('UGX')->after('balance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
