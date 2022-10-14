<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	<!-- CSS only -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/97658cfd90.js" crossorigin="anonymous"></script>
	<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
	
	
</head>
<body>
@yield('header')
<div class="container-fluid background">
	<div class="row justify-content-center">
		<div class="col-11 main text-break">
			<div class="row justify-content-between">
				<div class="col-12">
						@yield('content')
				</div>

				<div class="col-3">
					@yield('second_col')
				</div>
				
			</div><!-- row-2nd  -->
		</div><!-- col-10  -->
	</div><!-- row-1st  -->
</div><!-- container  -->
	

<!-- JavaScript Bundle with Popper -->
<script type="text/javascript" src="{{asset('js/bootstrap.min.css')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>