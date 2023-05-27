<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>新規作成</h1>
    <form action="{{route('blog.store')}}" method="post">
        @csrf
        <div>
            <label for="name">名前</label>
            <input type="text" id="name" name="name">
        </div>

        <div>
            <label>性別</label>
            <input type="radio"  name="gender" value="0">男
            <input type="radio"  name="gender" value="1">女
        </div>

        <div>
            <label for="title">タイトル</label>
            <input type="text" id="title" name="title">
        </div>

        <div>
            <label for="content">内容</label>
            <input type="text" id="content" name="content">
        </div>

        <div>
            <label for="teacher">担当講師</label>
            <input type="text" id="teacher" name="teacher">
        </div>

        <div>
            <label for="score">点数</label>
            <input type="number" id="score" name="score">
        </div>
        <div>
            <button>新規作成</button>
        </div>
    </form>
</body>
</html>