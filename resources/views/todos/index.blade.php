

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset = "UTF-8">
    
    <meta name="viewport" content ="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <title> ToDos</title>
</head>

<body>

<div class="container">
	
  <h1 class="text-center my-5"> List of Todos</h1>
  <div class="row justify-content-center">
	<div class="col-md-8 ">
	
	<div class="card card-default">
	   <div class="card-header">
		   Todos
	   </div>
   <div class="card-body">
	   <ul class="list-group">
		   @foreach($todos as $todo)
			   <li class="list-group-item">

			   {{$todo->name}}
			   
			   </li>

		   @endforeach
	   </ul>

   </div>
   </div>
	</div>
  </div>
</div>
</body>
</html>


