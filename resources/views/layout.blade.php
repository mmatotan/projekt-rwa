<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
		.header{
			width: 100%;
			height: 18%;
			position: top center;
			text-align: center;
			font-size: 50px;
			border: 1px solid black;
		}

		.footer{
			position: bottom;
			width: 100%;
			bottom: 0;
			text-align: left;
			font-size: 10px;
			border: 1px solid black;
		}
    
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<div class = "container">
    <div class="header">
            <div style="text-align:right; font-size:25px">
                <a href="/">Homepage</a>
                <a href="{{ route('o-nama') }}">O nama</a>
                <a href="{{ route('kontakt') }}">Kontakt</a>
                <a href="{{ route('jela') }}">Ponuda jela</a>
				<a href="{{ route('novosti') }}">Novosti</a>
				<a href="{{ route('login') }}">Login</a>
				<a href="{{ route('webshop') }}">Dostava</a>
			</div>
			</div>
		</div>
		<h1>Restoran</h1>
	</div>
	</div>

    @yield('content')

    <div class="footer">
			copyright
	</div>
</body>
</html>