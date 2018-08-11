<html>
	<head>
		<meta charset="utf-8">
		<title>Document</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	</head>
	<body>
		
		<div id="app">
			
		</div>
		<script type="text/javascript" src="{{ asset('js/app.js')}}"></script>
	</body>
</html>