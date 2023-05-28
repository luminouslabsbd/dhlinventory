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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->index()->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->unsignedBigInteger('sub_category_id')->index()->nullable();
            $table->foreign('sub_category_id')->references('id')->on('subcategories')->onDelete('cascade');

            $table->unsignedBigInteger('unit_id')->index()->nullable();
            $table->foreign('unit_id')->references('id')->on('uoms')->onDelete('cascade');

            $table->string('name');
            $table->integer('price');
            $table->integer('qty');
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('accept')->default(0);
            $table->tinyInteger('status')->default(1);

            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
