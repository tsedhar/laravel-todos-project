

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset = "UTF-8">
    
    <meta name="viewport" content ="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> ToDos</title>
</head>

<body>
<h1> List of Todos</h1>
<ul>
	@foreach($todos as $todo)
		<li>
			{{$todo->name}}
		</li>
	@endforeach
</ul>
</body>
</html>


