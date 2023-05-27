<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>詳細表示</h1>
    <div>
        <a href="{{ route('blog.index')}}">一覧ページへ</a>
    </div>
    <div>
        <table>
            <tr>
                <th>名前</th>
                <td>{{ $blog->name }}</td>
            </tr>
            <tr>
                <th>性別</th>
                <td>{{ $gender }}</td>
            </tr>
            <tr>
                <th>タイトル</th>
                <td>{{ $blog->title }}</td>
            </tr>
            <tr>
                <th>内容</th>
                <td>{{ $blog->content }}</td>
            </tr>
            <tr>
                <th>担当講師</th>
                <td>{{ $blog->teacher }}</td>
            </tr>
            <tr>
                <th>点数</th>
                <td>{{ $blog->score }}</td>
            </tr>   
        </table>
    </div>
  
</body>
</html>