{{-- 상속 : @extends --}}
{{-- 실제 호출한건 blade.blade.php 파일이지만, 상속받은 layout.blade.php파일의 @include('layout.inc.header')가 출력됨 --}}
@extends('layout.layout')

{{-- 부모 템플릿에 해당하는 yield 부분에 자리를 차지 --}}
{{-- 부모와 동일한 key값에 자식의 값이 있다면 자식값을 사용, 없다면 부모값을 사용 --}}
@section('title', '자식 타이틀')

{{-- 처리해야하는 코드가 많을 경우에는, @section~@endsection 에 소스코드를 기재해서 사용 --}}
@section('contents')
    <hr>
    <h2>콘텐츠 섹션입니다.</h2>
    <p>ㅇ아아아아아아</p>
    <p>콘텐츠 끝</p>
    <hr>
@endsection

@section('test')
    <h2>자식의 섹션입니다.</h2>
    <p>자식자식</p>
    <hr>
@endsection

{{-- 조건문 --}}
@section('if')
    <h5>IF</h5>
    @if($data['gender'] === '남자')
        <span>남자남자</span>
        <hr>
    @elseif($data['addr'] === '대구')
        <span>대구대구</span>
        <hr>
    @else
        <span>모든 조건 탈락</span>
        <hr>
    @endif
@endsection

@section('for')
    <h5>FOR</h5>
    @for($i = 0; $i < 5; $i++)
        <span>{{$i}}</span>
    @endfor
    <hr>
@endsection

{{-- foreach와 forelse의 경우, $loop변수가 생성되고 사용 할 수 있다. --}}
@section('foreach')
    <h5>FOREACH</h5>
    @foreach($data as $key => $value)
        {{-- count : 루프의 총 갯수 , iteration : 루프가 현재 실행된 횟수 --}}
        <span>{{$loop->count.' >> '.$loop->iteration}}</span>
        <span>{{$key.' : '.$value}}</span>
        <br>
    @endforeach
    <hr>
@endsection

@section('forelse')
    <h5>FORELSE</h5>
    @forelse($data2 as $key => $value)
        <span>{{$key.' : '.$value}}</span>
    @empty
        {{-- 배열이 빈 경우 출력 됨 --}}
        <p>빈배열이에요.</p>
    @endforelse
    <hr>
@endsection