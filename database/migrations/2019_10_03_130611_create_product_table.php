<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {            
            if(!Schema::hasColumn('products','name')){
                $table->String('name');
            }
            
            if(!Schema::hasColumn('products','description')){
                $table->String('description');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {            
            if(Schema::hasColumn('products','description')){
                $table->dropColumn('description');
            }
            
            if(Schema::hasColumn('products','name')){
                $table->dropColumn('name');
            }
        });
    }
}
