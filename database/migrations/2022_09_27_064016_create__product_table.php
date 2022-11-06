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
        Schema::create('_product', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("categoryID")->nullable();
            $table->string("Pname", 255)->nullable();
            //$table->decimal("discount", 6, 2);
            $table->text("description")->nullable();
            $table->decimal('productCode');
            $table->string("image", 255)->nullable();
            $table->integer('MSRP');
            $table->decimal("price", 6, 2);
            $table->integer("stock");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_product');
    }
};
