<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // creates a schema generated
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_name',225);
            $table->text('project_description');
            $table->timestamp('added_on');
        });

        // sets auto_increment start at 1001
        DB::statement("ALTER TABLE projects AUTO_INCREMENT = 1001;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
