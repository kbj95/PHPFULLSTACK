<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <h1>Test.index!!!</h1>
    <h5>{{$name}}</h5>
    <hr>
    <a href="{{route('tasks.index');}}">Tasks.index</a>
    <hr>
    <a href="{{route('tasks.show',['task' => 13]);}}">Tasks.show</a>
    <hr>
    <form action="{{route('tasks.update',['task' => 1]);}}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="php506">
        <input type="hidden" name="pw" value="506">
        <input type="hidden" name="name" value="admin">
        <button type="submit">UPDATE</button>
    </form>
    <hr>
    {{-- 1.Tasks.edit 이동 가능하도록 구현해주세요(세그먼트 파라미터의 값은 999) --}}
    <a href="{{route('tasks.edit',['task' => 999]);}}">Tasks.edit</a>
    {{-- 2.Tasks.store 이동 가능하도록 구현해주세요(유저가 입력한 데이터가 출력되도록 해주세요.id&pw) --}}
    <hr>
    <form action="{{route('tasks.store');}}" method="post">
        @csrf
        <input type="text" name="u_id">
        <input type="password" name="u_pw">
        <button type="submit">STORE</button>
    </form>
</body>
</html>