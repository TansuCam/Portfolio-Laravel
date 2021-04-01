<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
.jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 120px 25px;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }

  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
    height: 570px;
  }
  .thumbnail img {
    width: 80%;
    height: 10%;
    margin-bottom: 10px;
    padding-top: 25px;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }

  </style>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{URL::to('/')}}">Portfolio</a></li>
            <li><a href="{{URL::to('/create')}}">Add New Project +</a></li>
          </ul>
        </div>
      </nav>
<div class="jumbotron text-center">
  <h1>Company</h1>
  <p>We specialize in blablabla</p>

</div>

<!-- Container (Portfolio Section) -->
<div class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4 style="margin-bottom: 5%">What we have created</h4>
  <div class="row text-center">
      @foreach ($project as $key => $value)


    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="{{$value->image}}" alt="Paris" style="width: 320px;height:300px">
        <a class="btn btn-success" href="{{URL::to('edit',['id'=>$value->id])}}">Edit</a>
        <a class="btn btn-danger" href="{{URL::to('destroy',['id'=>$value->id])}}">Delete</a>
        <h3><strong>{{$value->name}}</strong></h3>
        <a href="{{$value->url}}">{{$value->url}}</a>
        <p style="padding-right:30px;padding-left:30px">{{$value->content}}</p>
        <p>{{$value->year}}</p>

      </div>

    </div>
    @endforeach
  </div>
</div>

</body>
</html>
