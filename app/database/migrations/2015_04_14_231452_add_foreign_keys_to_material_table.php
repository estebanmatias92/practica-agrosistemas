<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMaterialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('material', function(Blueprint $table)
		{
			$table->foreign('cropID', 'fk_material_1')->references('ID')->on('crop')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('material', function(Blueprint $table)
		{
			$table->dropForeign('fk_material_1');
		});
	}

}
