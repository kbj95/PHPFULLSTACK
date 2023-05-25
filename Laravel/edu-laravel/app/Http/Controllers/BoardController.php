<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // DB객체 사용

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //-------------------------
        // 쿼리 빌더
        //-------------------------
        // select
        // $result = DB::select('SELECT * FROM categories');
        // $no = '5';
        // $result = DB::select(
        //     'SELECT * FROM categories WHERE no = :no'
        //     , ['no' => $no]
        // );

        // + 다른 방식(키없이)으로 적는법 
        // $result = DB::select(
        //     'SELECT * FROM categories WHERE no = ? and no = ?'
        //     , [$no, 7]
        // );

        $input = ['4','7','8']; // categories의 no 컬럼

        // 게시글 번호, 게시글 제목, 카테고리명을 출력해 주세요. (게시글 번호로 오름차순 정렬 후 상위 5개만) ver1
        // $result = DB::select(
        //     'SELECT
        //         b.bno AS "게시글 번호"
        //         ,b.btitle AS "게시글 제목"
        //         ,cate.name AS "카테고리명"
        //     FROM boards AS b
        //     INNER JOIN categories AS cate
        //         ON b.category = cate.no
        //     WHERE cate.no = ? OR cate.no = ? OR cate.no = ?
        //     ORDER BY b.bno ASC
        //     LIMIT 5'
        //     , [$input[0],$input[1],$input[2]]
        // );
        // 게시글 번호, 게시글 제목, 카테고리명을 출력해 주세요. ver2
        // $result = DB::select(
        //     'SELECT
        //         b.bno
        //         ,b.btitle
        //         ,cate.name
        //     FROM boards AS b, categories AS cate
        //     WHERE b.category = cate.no AND cate.no in(?,?,?)
        //     ORDER BY b.bno
        //     LIMIT 5'
        //     , $input
        // );

        // insert
        // $result = DB::insert(
        //     'insert into boards(
        //         category
        //         ,btitle
        //         ,bcontent
        //         ,created_at
        //         ,updated_at
        //     )
        //     values(
        //         :category
        //         ,:btitle
        //         ,:bcontent
        //         ,now()
        //         ,now()
        //     )
        //     '
        //     ,[
        //         'category' => '8'
        //         ,'btitle' => '제목test'
        //         ,'bcontent' => '내용test'
        //     ]
        // );

        // 방금 등록한 게시글의 제목을 test, 내용을 testtest로 변경해주세요.
        // update
        // $result = DB::update('
        //     UPDATE boards
        //     SET btitle = :btitle
        //         ,bcontent = :bcontent
        //     WHERE bno = (SELECT MAX(bno) FROM boards)
        // ',[
        //     'btitle' => 'test'
        //     ,'bcontent' => 'testtest'
        // ]);

        // delete
        // $result = DB::delete('
        //     DELETE FROM boards
        //     WHERE bno in(?,?)
        // ',[
        //     20001,20002
        // ]);


        //-------------------------
        // 쿼리 빌더
        //-------------------------
        $no1 = '5';
        $no2 = '8';
        // $result = DB::table('categories')->WHERE('no','=',$no)->get(); // get() : 체이닝을 실행해서 데이터를 가져오겠다.
        // $result = DB::table('categories')->WHERE('no','=',$no)->dd(); // dd() : 체이닝기법으로 적은걸 쿼리문으로 반환하는 메소드  *Tip ! dd();하고 주석으로 TODO : 해야할 일 적기

        // select * from categories where no = ? or no = ?
        // $result = DB::table('categories')->WHERE('no', $no1)->orWHERE('no', $no2)->dd(); // 부등호를 생략하면 "=" 로 인식

        // select * from categories where in (?, ?)
        // $result = DB::table('categories')->whereIn('no',[$no1,$no2])->dd();

        // select * from categories where no NOT IN ('5', '8')
        // $result = DB::table('categories')->whereNotIn('no',[$no1,$no2])->get();

        // select id, no, name from categories
        // $result = DB::table('categories')->select('id','no','name')->get();

        // select id, no, name from categories order by name desc
        // $result = DB::table('categories')->select('id','no','name')->orderBy('name','desc')->get(); // orderByDesc()도 있음

        // *** 주의해서 사용 (사용하지 않는것이 좋다) *** whereRaw() ->prepare Statement로 검색하지않고 string으로 바로 검색해서 보안에 취약함 
        // $result = DB::table('categories')->whereRaw('no = '.$no1);

        // first() : Limit 1과 비슷한 작동, 실패 시 false 리턴
        // $result = DB::table('boards')->orderBy('bno','desc')->first();

        // firstOrFail() : first() 같은 동작을 하는데, 실패시 결과가 예외 발생(엘로퀀트{=라라벨의 ORM} 모델 객체에서만 사용 가능)

        // $result = DB::table('boards')->count(); // 결과의 레코드수를 반환
        // $result = DB::table('boards')->max('bno'); // 해당 컬럼의 최대치를 반환

        // 트랜잭션 transaction 
        // DB::beginTransaction(); // 트랜잭션 시작
        // DB::rollBack(); // (실패시) 롤백
        // DB::commit(); // (성공시) 커밋

        // 연습문제 : 카테고리가 활성화 되어 있는 게시글의 카테고리 별 갯수를 출력해 주세요.
        // 카테고리 번호, 카테고리 명, 갯수를 체이닝을 이용해서 검색
        // $result = DB::table('categories')->select('no')->get();
        $result = DB::table('boards AS b')
            ->join('categories AS c','b.category','=','c.no')
            ->select('c.no','c.name',DB::raw('count(b.category)'))
            // ->selectRaw('count(b.category)')
            ->where('c.active_flg','1')
            ->groupBy('c.no','c.name')
            ->get();

        return var_dump($result);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
