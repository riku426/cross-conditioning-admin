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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('employee_id')->unsigned()->nullable()->comment('担当者');
            $table->foreign('employee_id')
                ->references('id')
                ->on('employees')
                ->onDelete('cascade');

            $table->string('family_name')->nullable()->comment('名前(姓)');
            $table->string('given_name')->nullable()->comment('名前(名)');
            $table->string('family_name_kana')->nullable()->comment('名前(セイ)');
            $table->string('given_name_kana')->nullable()->comment('名前(メイ)');
            $table->string('age')->nullable()->comment('年齢');
            $table->integer('gender_id')->nullable()->comment('性別');
            $table->longText('comment')->nullable()->comment('コメント');

            $table->date('last_time')->nullable()->comment('前回来店');
            $table->date('next_time')->nullable()->comment('次回来店');

            $table->softDeletes();
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
        Schema::dropIfExists('customers');
    }
};
