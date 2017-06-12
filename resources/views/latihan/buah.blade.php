<!DOCTYPE html>
<html>
<head>
	<title>Looping</title>
</head>
<body>
<center>
	<h2>Buah</h2>
	@foreach($buah as $data)
		{{$data}}<hr>
	@endforeach

	<h2>Makhluk Hidup</h2>
	@foreach($mahlukhidup as $data)
		{{$data}}<hr>
	@endforeach

	<h2>Komputer</h2>
	@foreach($komputer as $data)
		{{$data}}<hr>
	@endforeach
</center>
</body>
</html>