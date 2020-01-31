<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collab', function (Blueprint $table) {
	    $table->bigIncrements('id');
            $table->enum('civilite', ['homme', 'femme', 'binaire']);
	    $table->string('nom');
	    $table->string('prenom');
	    $table->string('rue');
	    $table->float('code', 5, 0);
	    $table->string('ville');
	    $table->float('numero', 10, 0)->unique;
	    $table->string('email')->unique;
            $table->string('entreprise');
	    $table->timestamps();
        });

	Schema::table('collab', function (Blueprint $table) {
		$table->foreign('entreprise')->references('nom')->on('company');
	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collab');
    }
}
