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
        Schema::create('juku_blogs', function (Blueprint $table) {
            $table->id();
            $table->string('name',20); //生徒の名前
            $table->boolean('gender'); //性別
            $table->string('title'); //タイトル
            $table->longText('content'); //内容
            $table->string('teacher',20); //先生の名前
            $table->tinyInteger('score'); //小テストの点数
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
        Schema::dropIfExists('juku_blogs');
    }
};
