<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarInfoPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_info_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('page_alias');
            $table->text('brand');
            $table->text('brand_addition')->nullable();
            $table->text('models')->nullable();
            $table->integer('min_price');
            $table->integer('max_price');
            $table->text('standard');
            $table->text('capital');
            $table->text('image_path');
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
        Schema::dropIfExists('car_info_pages');
    }
}
