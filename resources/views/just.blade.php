<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<div>

	@foreach($cartlist as $item)
		<h1>{{$item->name}}</h1>
	@endforeach
</div>
</body>
</html>