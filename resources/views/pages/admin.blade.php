<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

@if (Auth::user()->roles_id == 1)

<h2>You are not authorized to access this page</h2>
<button><a href="/">Go to homepage</a></button>

@else

<h2>This is the admin page</h2>
<p>Welcome {{Auth::user()->firstname}}!!!</p>

@endif

</body>
</html>
