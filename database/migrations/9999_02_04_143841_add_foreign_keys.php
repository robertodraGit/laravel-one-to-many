<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table -> foreign('employee_id', 'emp-task')
            -> references('id')
            -> on ('employees');
        });

        Schema::table('task-type', function (Blueprint $table) {
            $table -> foreign('task_id', 'tt-task')
            -> references('id')
            -> on ('tasks');
        
            $table -> foreign('type', 'tt-type')
            -> references('id')
            -> on ('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('task-type', function(Blueprint $table) {
            $table -> dropForeign('tt-type');
            $table -> dropForeign('tt-task');
        });

        Schema::table('tasks', function(Blueprint $table) {
            $table -> dropForeign('emp-task');
        });
    }
}
