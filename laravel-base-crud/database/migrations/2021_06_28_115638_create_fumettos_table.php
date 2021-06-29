<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFumettosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fumettos', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->string('slug',100);
            $table->text('description')->nullable();
            $table->string('thumb');
            $table->float('price',6,2);
            $table->string('series',150);
            $table->string('sale_date',20);
            $table->string('type',30);
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
        Schema::dropIfExists('fumettos');
    }
}
