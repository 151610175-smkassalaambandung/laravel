<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Daftar : {{$data}} {{$data2}}</h2>
	@foreach($query as $key)
	<li>{{$key}}</li>
	@endforeach
</body>
</html>