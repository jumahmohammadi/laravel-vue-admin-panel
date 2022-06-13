<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
	 <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	 <link href="{{ asset('css/circular-style.css') }}" rel="stylesheet">
	 <link href="{{ asset('css/style.css') }}" rel="stylesheet">
	 <link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet">
    <title>Laravel Vue Admin panel</title>
</head>

<body >
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper" >
	   <div class="container-fluid dashboard-content">
		 @yield('content')
	   </div>		
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
   
   
	<script src="{{ asset('js/jquery-3.3.1.min.js') }}" ></script>
	<script src="{{ asset('js/bootstrap.js') }}" ></script>
	<script src="{{ asset('js/main-js.js') }}" ></script>
</body>
 
</html>

            