<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // 230522 추가

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//--------------------------------------------------------------------------
// 라우트 정의
//--------------------------------------------------------------------------
// 문자열 리턴
Route::get('/hi', function(){
    return '안녕하세요.';
});

// view 리턴(뷰 파일이 없으면 에러발생, .env 파일에 APP_DEBUG=true면 에러의 상세정보 출력, false면 500에러)
Route::get('/myview',function(){
    return view('myview');
});


//--------------------------------------------------------------------------
// HTTP 메소드 대응하는 라우터
//--------------------------------------------------------------------------
Route::get('/home',function(){
    return view('home');
});

// GET 요청에 대한 처리
Route::get('/method', function(){
    return 'GET Mehod!!';
});

// POST 요청에 대한 처리 (insert)
Route::post('/method', function(){
    return 'POST Mehod!!';
});

// PUT 요청에 대한 처리 (update)
Route::put('/method', function(){
    return 'PUT Method!!';
});

// DELETE 요청에 대한 처리 (delete)
Route::delete('/method', function(){
    return 'DELETE Method!!';
});

// 모든 요청에 대한 처리 (아래에 적어서 위에있는 Route는 적용되지않고 any로 적용 겹쳐서 사용하지않도록 주의!!!)
// Route::any('/method', function(){
//     return 'ANY Method!!';
// });

// 특정 메소드 요청에 대한 처리
Route::match(['get','post'],'/method', function(){
    return 'MATCH Method!!';
});


//--------------------------------------------------------------------------
// 라우트에서 파라미터 제어
//--------------------------------------------------------------------------
// 쿼리 스트링으로 파라미터 획득
// $request 변수의 데이터 타입이 Request 타입
Route::get('/query', function(Request $request){
    return $request->id.", ".$request->name;
    // http://localhost/query?id=admin&name=kim
    // id, name 은 키, admin 과 kim은 값
});

// URL 세그먼트로 지정 파라미터 획득
// 세그먼트 : http://localhost/query/1 에서 "/1"부분
// 세그먼트가 없을 경우 404 NOT FOUND ERROR 가 뜬다.
Route::get('/segment/{id}', function($id){
    return 'segment ID : '.$id;
    // http://localhost/segment/30 => segment ID : 30로 출력
});

// URL 세그먼트로 지정 파라미터 획득 : 기본값 설정
// 세그먼트가 없을 경우 지정한 기본 값(여기서는 base가 기본값)으로 설정
// Route::get('/segment2/{id?}', function($id = 'base'){
//     return 'segment2 ID : '.$id;
// });

// request로도 세그먼트 파라미터를 획득 가능, 
// 세그먼트 파라미터가 없어도 404에러 발생 안함(기본값은 없음)
Route::get('/segment2/{id?}', function(Request $request){
    return "segment2 ID : ".$request->id;
});

// request로 세그먼트 파라미터 획득할 때 기본값 셋팅하는 법
// Route::get('/segment2/{id?}', function(Request $request){
//     if(empty($request->id)){
//         return "segment2 ID : 기본 값";
//     }
//     else{
//         return "segment2 ID : ".$request->id;
//     }
// });


//--------------------------------------------------------------------------
// 라우트의 이름 지정
//--------------------------------------------------------------------------
Route::get('/names/home', function(){
    return view('nameshome');
});

Route::get('/names', function(){
    return 'name.index !!!';
})->name('names.index');


//--------------------------------------------------------------------------
// 라우트의 매칭 실패시 대체 라우트 정의
// 가장 마지막에 정의 : 보통 에러 처리를 마지막에 정의
//--------------------------------------------------------------------------
Route::fallback(function(){
    return ' 잘못된 경로로 접속하셨습니다.';
    // 보통은 에러페이지를 만들어서 view('파일명')로 return 
});

//--------------------------------------------------------------------------
// 라우트의 그룹 및 공통경로설정
//--------------------------------------------------------------------------
// middleware() : 지정된 값과 매칭될때만 요청된 주소에 접근할 수 있도록 허용
// 공통 경로 : prefix()
// 그룹화 : group()
Route::prefix('users')->group(function(){
    Route::get('/login', function(){
        return 'Login!!';
    })->name('users.login');
    Route::get('/logout', function(){
        return 'Logout!!';
    })->name('users.logout');
    Route::get('/registration', function(){
        return 'Registration!!';
    })->name('users.registration');
});

//--------------------------------------------------------------------------
// 서명 라우터
//--------------------------------------------------------------------------
use Illuminate\Support\Facades\URL;
Route::get('/makesign', function(){
    // 일반 URL 링크 생성하기
    // $baseUrl = route('invitation',['invitation' => 5816, 'group' => 678]);
    $baseUrl = route('sign');

    // 서명된 URL 링크 생성하기
    // $signUrl = URL::signedRoute('invitation',['invitation' => 5816, 'group' => 678]);
    $signUrl = URL::signedRoute('sign');

    // 유효기간이 있는 서명된 URL 링크 생성하기 ( 주로 사용 )
    $limitSignUrl = URL::temporarySignedRoute('sign', now()->addSecond(10));

    return $baseUrl."<br><br>".$signUrl."<br><br><a href='".$limitSignUrl."'>서명된 URL 링크(유효기간있음)</a>";
});

Route::get('/sign', function(){
    return "Sign!!!";
})->name('sign')->middleware('signed');
// })->name('invitation')->middleware('signed');
