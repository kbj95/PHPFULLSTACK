<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    <br>
    <br>
    <br>
    <form action="/method" method="POST">
        <!-- @csrf : response를 탈취하는 공격(사용자가 입력하는 정보를 탈취할 가능성)을 막는 blade 템플릿에서 제공하는 기능 -->
        @csrf
        <button type="submit">POST</button>
    </form>
    <br>
    <form action="/method" method="POST">
        @csrf
        @method('PUT')
        <button type="submit">PUT</button>
    </form>
    <br>
    <form action="/method" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">DELETE</button>
    </form>
</body>
</html>