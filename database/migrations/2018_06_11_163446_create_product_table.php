<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('brand_id')->unsigned()->index();
            $table->integer('category_id')->unsigned()->index();
            $table->integer('popularity')->index();
            $table->text('features');
            $table->double('fourty_price');
            $table->string('image');
            $table->integer('user_id');//the id of the agent that added the product.
            $table->double('twenty_price');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       //$table->dropForeign('products_brand_id_foreign');
        // $table->dropIndex('brand_id');
        // $table->dropColumn('brand_id');
        //$table->dropForeign('products_category_id_foreign');
        // $table->dropIndex('category_id');
        // $table->dropColumn('category_id');
        Schema::dropIfExists('products');
    }
}
