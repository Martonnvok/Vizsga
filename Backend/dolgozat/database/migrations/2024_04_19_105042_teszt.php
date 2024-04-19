<?php

use App\Models\teszt;
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
        Schema::create('teszts', function (Blueprint $table) {
            $table->id('kategoriaId');
            $table->string('kerdes');
            $table->string('v1');
            $table->string('v2');
            $table->string('v3');
            $table->string('v4');
            $table->string('helyes');
            $table->timestamps();
        });

        teszt::create([
            'kerdes' => "mennyi 2 + 2",
            'v1' => "2",
            'v2' => "3",
            'v3' => "4",
            'v4' => "5",
            'helyes' => "4"
        ]);

        teszt::create([
            'kerdes' => "mennyi 2 + 3",
            'v1' => "2",
            'v2' => "3",
            'v3' => "4",
            'v4' => "5",
            'helyes' => "5"
        ]);

        teszt::create([
            'kerdes' => "mennyi 2 + 4",
            'v1' => "2",
            'v2' => "6",
            'v3' => "4",
            'v4' => "5",
            'helyes' => "6"
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
