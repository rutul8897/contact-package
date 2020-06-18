<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
</head>
<body>
	<h1>Contact Us</h1>
	<form action="{!! route('contact') !!}" method="POST">
		@csrf
		<input type="text" name="name" placeholder="Enter Name">
		<input type="text" name="email" placeholder="Enter email">
		<textarea name="description"></textarea>
		<input type="submit" value="submit">
	</form>
</body>
</html>