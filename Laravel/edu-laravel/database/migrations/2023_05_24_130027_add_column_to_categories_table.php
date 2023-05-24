<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // php artisan make:migration add_column_to_tests_table : 칼럼 수정하기
    // 바꾸고싶은 내용으로 스키마에 작성후 php artisan migrate 로 실행하면 수정완료

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            // 칼럼명을 바꾸고 싶은경우↓
            // $table->renameColumn('바꿀칼럼명', '새칼럼명');
            // 칼럼을 수정하고 싶은경우↓ : change()메소드 사용
            $table->string('name', 50)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            //
        });
    }
};
