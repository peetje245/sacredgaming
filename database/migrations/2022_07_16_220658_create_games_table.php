<?php

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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->bigInteger('ean')->unsigned()->nullable();
            $table->foreignId('publisher_id')->constrained('publishers');
            $table->foreignId('developer_id')->constrained('developers');
            $table->foreignId('serie_id')->nullable()->constrained('series');
            $table->foreignId('franchise_id')->nullable()->constrained('franchises');
            $table->boolean('active')->default(0);
            $table->boolean('tba')->default(0);
            $table->boolean('tbd')->default(0);
            $table->boolean('q1')->default(0);
            $table->boolean('q2')->default(0);
            $table->boolean('q3')->default(0);
            $table->boolean('q4')->default(0);
            $table->integer('release_day')->unsigned()->nullable();
            $table->integer('release_month')->unsigned()->nullable();
            $table->year('release_year')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('publisher_id');
            $table->index('developer_id');
            $table->index('serie_id');
            $table->index('franchise_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
