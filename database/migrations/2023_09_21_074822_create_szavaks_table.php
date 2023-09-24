<?php

use App\Models\Szavak;
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
        Schema::create('szavaks', function (Blueprint $table) {
            $table->id();
            $table->string("Angol", 40);
            $table->string("Magyar", 40);
            $table->timestamps();
            $table->foreignId("tema_id")->references("id")->on("kategorias");
        });

        Szavak::create(["Angol"=>"Alascan","Magyar"=>"Alaszkai","tema_id"=>1]);
        Szavak::create(["Angol"=>"USA bulldog","Magyar"=>"Amerikai bulldog","tema_id"=>1]);
        Szavak::create(["Angol"=>"French bulldog","Magyar"=>"Francia bulldog","tema_id"=>1]);
        Szavak::create(["Angol"=>"Cat","Magyar"=>"Macska","tema_id"=>2]);
        Szavak::create(["Angol"=>"Bald Cat","Magyar"=>"Kopasz macska","tema_id"=>2]);
        Szavak::create(["Angol"=>"Italian Cat","Magyar"=>"Olasz Macska","tema_id"=>2]);
        Szavak::create(["Angol"=>"Owl","Magyar"=>"Bagoly","tema_id"=>3]);
        Szavak::create(["Angol"=>"Cocktoo","Magyar"=>"Kakadu","tema_id"=>3]);
        Szavak::create(["Angol"=>"Chicken","Magyar"=>"Csirke","tema_id"=>3]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('szavaks');
    }
};
