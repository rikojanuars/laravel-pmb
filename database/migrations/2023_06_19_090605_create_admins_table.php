<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->id('id_admin');
            $table->string('username');
            $table->string('password');
            $table->boolean('status');
            $table->string('nama_admin');
        });

        DB::table('admin')->insert(
            array(
                [
                    'username' => 'admin',
                    //password 123456
                    'password' => Hash::make('123456'),
                    'status' => true,
                    'nama_admin' => "Riko Januar"
                ]
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};