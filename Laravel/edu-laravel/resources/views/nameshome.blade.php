<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Names Home</title>
</head>
<body>
    <a href="/names">names</a>
    <br>
    <br>
    {{-- {{}} : php에서 echo와 같은 기능을 blade 템플릿의 작성방법으로 쓰기 --}}
    <a href="{{url('/names');}}">names</a>
    <br>
    <br>
    {{-- 라라벨에서 추천하는 방식(유지보수쉬움) : 라우트의 이름을 정해서 사용한다 --}}
    <a href="{{route('names.index');}}">names</a>
</body>
</html>