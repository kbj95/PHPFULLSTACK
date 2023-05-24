<?php

// 연습문제
// 1.모델명 : Category
// 2.팩토리, 마이그레이션, 시더까지 다 만들어주세요.
// 3.categorys 테이블의 컬럼은 아래와 같습니다.
// id : pk, auto_increment
// no : unique, char(1)
// name : unique, varchar(30)
// active_flg : default('1'), char(1)

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $primaryKey = 'id';
}
