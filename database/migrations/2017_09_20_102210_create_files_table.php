<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		//
		Schema::create('files', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name')->nullable();
			$table->string('type');
			$table->string('fichier');
			//$table->string('description')->nullable();
			$table->string('support_media')->nullable();
			$table->integer('blog_id')->unsigned()->nullable();
			$table->integer('section_id')->unsigned()->nullable();
			$table->rememberToken();
			$table->timestamps();
		});
		Schema::table('files', function (Blueprint $table) {
			$table->foreign('blog_id')->references('id')->on('blogs');
		});
		Schema::table('files', function (Blueprint $table) {
			$table->foreign('section_id')->references('id')->on('sections');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		//
		Schema::dropIfExists('files');
	}
}
