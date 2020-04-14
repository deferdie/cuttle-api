<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExceptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exceptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('uri')->nullable();
            $table->string('file')->nullable();
            $table->string('host')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('port')->nullable();
            $table->string('method')->nullable();
            $table->text('message')->nullable();
            $table->dateTime('reported_at')->nullable();
            $table->string('git_hash')->nullable();
            $table->string('severity')->nullable();
            $table->text('headers')->nullable();
            $table->string('protocol')->nullable();
            $table->string('git_branch')->nullable();
            $table->unsignedInteger('line_number')->nullable();
            $table->string('environment')->nullable();
            $table->unsignedInteger('http_status')->nullable();
            $table->string('php_version')->nullable();
            $table->text('stack_trace')->nullable();
            $table->string('exception_name')->nullable();
            $table->string('laravel_version')->nullable();
            $table->boolean('laravel_config_cached')->nullable();
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
        Schema::dropIfExists('exceptions');
    }
}
