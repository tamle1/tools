<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hi!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h1><b>GET COMMENT</b></h1>
  <br>
  @if( Session::has( 'warning' ))
  <div class="alert alert-danger alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ Session::get( 'warning' ) }}
  </div>
  @endif
  <form method="POST" action="{{route('getComment')}}">
    {{csrf_field()}}
    <div class="form-group">
      <input placeholder="Link bài viết" type="text" name="link" class="form-control">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-success">GET COMMENT</button>
    </div>
  </form>
</div>

</body>
</html>
