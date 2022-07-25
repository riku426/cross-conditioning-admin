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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('family_name')->nullable()->comment('名前(姓)');
            $table->string('given_name')->nullable()->comment('名前(名)');
            $table->string('family_name_kana')->nullable()->comment('名前(セイ)');
            $table->string('given_name_kana')->nullable()->comment('名前(メイ)');
            $table->string('age')->nullable()->comment('年齢');
            $table->integer('gender_id')->nullable()->comment('性別');

            $table->date('move_start')->nullable()->comment('出勤開始日');
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
        Schema::dropIfExists('employees');
    }
};
