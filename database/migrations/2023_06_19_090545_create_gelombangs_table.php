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
        Schema::create('gelombang', function (Blueprint $table) {
            $table->id('id_gelombang');
            $table->string('nama_gelombang');
            $table->date('periode_awal');
            $table->date('periode_akhir');
            $table->integer('create_by');
        });

        DB::table('gelombang')->insert(
            array(
                [
                    'nama_gelombang' => 'Gelombang 1',
                    'periode_awal' => '2023-07-01',
                    'periode_akhir' => '2023-09-30',
                    'create_by' => 1
                ],
                [
                    'nama_gelombang' => 'Gelombang 2',
                    'periode_awal' => '2023-10-01',
                    'periode_akhir' => '2023-11-30',
                    'create_by' => 1
                ],
                [
                    'nama_gelombang' => 'Gelombang 3',
                    'periode_awal' => '2023-12-01',
                    'periode_akhir' => '2023-12-31',
                    'create_by' => 1
                ]
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gelombang');
    }
};