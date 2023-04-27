<?php

use App\Models\Ue;
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
        Schema::create('etudiant_ue', function (Blueprint $table) {
            //
            $table->id();
            $table->foreignIdFor(Ue::class);
            $table->foreignIdFor(Etudiant::class);
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
        Schema::table('etudiant_ue', function (Blueprint $table) {
            //
        });
    }
};