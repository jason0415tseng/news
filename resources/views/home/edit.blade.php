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
        <h2>News Edit</h2>
        <form method="POST" action="/news/{{$news->id}}" class="form-horizontal">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Title</label>  
                <div class="col-md-4">
                    <input value="{{$news->title}}" id="title" name="title" type="text" placeholder="" class="form-control input-md"> 
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="Content">Content</label>
                <div class="col-md-4">                     
                  <textarea class="form-control" id="content" name="content">{{$news->content}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="button1id"></label>
                <div class="col-md-8">
                  <button type="submit" class="btn btn-success">OK</button>
                  <a href="/news" id="button2id" name="button2id" class="btn btn-danger">Cancel</a>
                </div>
            </div>
        </form>
  </div>
</body>
</html>