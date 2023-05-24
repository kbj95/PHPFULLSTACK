<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // migration 파일 생성(보통은 모델 생성할때 옵션으로 많이 생성함) : php artisan make:migration create_boards_table
    // migration 실행 : php artisan migrate (up()메소드가 실행됨,근데 모든 migrations파일의 up()메소드가 실행되서 주의해야됨 )
    // migration reset(모든 migration 파일의 down()메소드를 실행) : php artisan migrate:reset
    // migration rollback(가장 마지막에 실행한 migration의 내용을 롤백) : php artisan migrate:rollback

    // 시더 (초기 데이터 생성) : database\seeders의 각 클래스 파일 확인

    // 팩토리 (더미 데이터 생성) : database\factories의 각 클래스 파일 확인

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            // 글 번호(PK), 제목, 내용, 작성일, 수정일, 삭제일, 삭제여부
            $table->id('bno'); // 글 번호 - big_int타입, pk, auto_increment
            $table->char('category', 1)->index(); // 카테고리 - char(1), not null, index 추가
            $table->string('btitle', 100); // 글 제목 - varchar(100), NOT NULL
            $table->string('bcontent',4000); // 글 내용 - varchar(4000) |*varchar 최대가 4000자|, NOT NULL
            $table->timestamps(); // 작성일 & 수정일 - created_at, updated_at를 생성, null 허용
            $table->timestamp('deleted_at')->nullable(); // 삭제일
            // 보통 플래그 줄때는 char-enum-int 순으로 빠르기때문에 char(문자열)로 많이 사용
            $table->char('deleted_flg',1)->default('0'); // 삭제여부 - char(1), default = '0', NOT NULL 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boards');
    }
};
