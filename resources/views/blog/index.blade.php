<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css')  }}" >
</head>
<body>
    <h1>一覧</h1>
    <div>
        <form action="{{route('blog.index')}}" method="get">
            <input type="text" name="search" placeholder="名前検索">
            <button>検索する</button>
        </form>
    </div>
    <div>
        <a href="{{ route('blog.create')}}">新規作成</a>
    </div>
    @foreach ($blogs as $blog)
    <div>
        <table>
            <tr>
                <th>名前</th>
                <td>{{ $blog->name }}</td>
            </tr>
            <tr>
                <th>タイトル</th>
                <td>{{ $blog->title }}</td>
            </tr>
            <tr>
                <th>担当講師</th>
                <td>{{ $blog->teacher }}</td>
            </tr>
        </table>
        <div>
            <a href="{{route('blog.show',['id'=> $blog->id])}}">詳細画面へ</a>
        </div>
        <div>
            <form action="{{route('blog.destroy',['id'=> $blog->id])}}" method="post">
                @csrf
                <button>削除する</button>
            </form>
        </div>
    </div>
    @endforeach
    {{-- ページネーション対応 --}}
    {{ $blogs->links() }}
    
</body>
</html>