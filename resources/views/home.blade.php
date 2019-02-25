<!DOCTYPE html>
	<html>
	<head>
	<!-- Styles 
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
		<title></title>
		<style>
            html, body {
                background-color: #fcc5be;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 250;
                height: 100vh;
                margin: 0;
            }
            nav.navbar {
    			background-color: #44221f;

			}
			nav.navbar ul.nav li a {
   			 font-family:  'Nunito', sans-serif;
   			 color:#fcc5be;
 			}
 			nav.navbar  div.nav a{
				color:white;
 			}

        </style>
	</head>
	<body>
		@include('navbar')
		@yield('content')

		<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>	
	</body>
	</html>