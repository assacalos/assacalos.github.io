<?php

use App\Models\Seance;
use App\Models\Etudiant;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retards', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Seance::class);
            $table->foreignIdFor(Etudiant::class);
            $table->time('duree');
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
        Schema::dropIfExists('retards');
    }
};
