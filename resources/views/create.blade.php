<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>

  .container-fluid {
    padding: 60px 50px;
  }
  input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.createForm {
  border-radius: 5px;
  padding: 30px 30% 30px 30%;
}
.container{
    width: 100%;
    background-color: #f4511e;
    margin-bottom: 20px;
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
          </ul>
        </div>
      </nav>


      @if (isset($project))

        <div class="container">
            <h2 style="text-align:center; padding:20px 0px 20px 0px;color:white">Edit Project</h2>
            <div class="createForm">
            <form name="form" id="form" method="POST" action="{{url('update',['id'=>$project->id])}}">
                @csrf
                {{ csrf_field() }}
                <label for="fname">Image URL</label>
                <input value="{{$project->image}}" type="text" id="image" name="image" placeholder="Image">

                <label for="lname">Project Name</label>
                <input value="{{$project->name}}"  type="text" id="name" name="name" placeholder="Project Name">

                <label for="lname">Project Website</label>
                <input value="{{$project->url}}"  type="text" id="url" name="url" placeholder="Project Website">

                <label for="lname">Project Year</label>
                <input value="{{$project->year}}"  type="text" id="year" name="year" placeholder="Project Year">

                <label for="subject">Content</label>
                <textarea  id="content" name="content" placeholder="Write something.." style="height:100px" required>{{$project->content}}</textarea>

                <button type="submit" class="btn btn-success"> Update </button>
            </form>
            </div>
        </div>

        @else
        <div class="container">
            <h2 style="text-align:center; padding:20px 0px 20px 0px;color:white">Add New Project</h2>
            <div class="createForm">
            <form name="form" id="form" method="POST" action="{{url('store')}}">
                @csrf
                {{ csrf_field() }}
                <label for="fname">Image URL</label>
                <input type="text" id="image" name="image" placeholder="Image">

                <label for="lname">Project Name</label>
                <input   type="text" id="name" name="name" placeholder="Project Name">

                <label for="lname">Project Website</label>
                <input  type="text" id="url" name="url" placeholder="Project Website">

                <label for="lname">Project Year</label>
                <input   type="text" id="year" name="year" placeholder="Project Year">

                <label for="subject">Content</label>
                <textarea  id="content" name="content" placeholder="Write something.." style="height:100px" ></textarea>

                <button type="submit" class="btn btn-success"> Add </button>
            </form>
            </div>
        </div>
      @endif





</body>
</html>
