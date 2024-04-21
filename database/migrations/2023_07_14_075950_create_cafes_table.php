<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCafesTable extends Migration
{
    /**
     * マイグレーションが使用するデータベース接続
     *
     * @var string
     */
    protected $connection = 'mysql';
    /**
     * マイグレーションを実行する
     *
     * @return void
     */
    public function up()
    {   
        if(!Schema::hasTable('cafes')) {
            Schema::connection('mysql')->create('cafes', function (Blueprint $table) {
                $table->id();
                $table->string('name', 50);
                $table->string('kana', 50);
                $table->string('tel', 11);
                $table->string('email', 100);
                $table->text('body');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cafes');
    }
}
