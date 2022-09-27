<!DOCTYPE HTML>
<html> 
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		
		<!-- CSS only -->
		<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/97658cfd90.js" crossorigin="anonymous"></script>
		<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />

  		<script src="https://cdn.tiny.cloud/1/3hq0l6w53wcahj8a7w2cur6ud8b8ajlofgpztw1p570h39ql/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
	</head>
	<body class="single is-preload">
		
		@yield('content')

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

			<script type="text/javascript" src="{{asset('js/bootstrap.min.css')}}"></script>
			<!-- JavaScript Bundle with Popper -->
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

			<script type="text/javascript" src="/admin/dist/js/jquery.colorbox-min.js"></script>
			<script type="text/javascript" src="/packages/barryvdh/elfinder/js/standalonepopup.js"></script>
			<script src="https://cdn.tiny.cloud/1/05u79h3746sbdty0lbss0p6pr7tgv86qyrl6is8imnb9fyew/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
			<script src="{{asset('/admin/admin.js')}}"></script>
			<script type="text/javascript">
				tinymce.init({
				    selector: '.editor',
				    plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
				    toolbar_mode: 'floating',
				    relative_urls : false,
				    file_picker_callback : elFinderBrowser
				});
			</script>
	</body>
</html>