<!DOCTYPE html>
<html lang="en">
<head>
  <title>News</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
      <h2>News List <a href="/news/create" class="btn btn-md btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> 新增</a></h2>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Title</th>
            <th>Content</th>
            <th>time</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($newsList as $news)
                <tr>
                    <td>{{$news->title}}</td>
                    <td>{{$news->content}}</td>
                    <td>{{$news->created_at}}</td>
                    <td>
                        <span class="pull-right">
                            <form method="POST" action="/news/{{$news->id}}">
                                @csrf
                                @method('DELETE')
                                <a href="/news/{{$news->id}}/edit" class="btn btn-primary">修改</a> |
                                <button class="btn btn-danger">刪除</button>
                            </form>
                        </span>                
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
</body>
</html>