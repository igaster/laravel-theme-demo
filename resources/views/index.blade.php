<!DOCTYPE HTML>
<html lang="en">
	<head>
		{!!Theme::css('theme.css')!!}
	</head>
	<body>
		<h1> Greetings from "DEFAULT" theme  </h1>
		<ul>
			<li> This is the "{{Theme::get()}}" theme. </li>
			<li> All themes inherit the default theme. If an asset/view is not found in a theme then it will picked from this theme. </li>
			<li> This is an example of an image (located at: "{{Theme::url('img\test.gif')}}"): </li>
		</ul>
		<img src={{Theme::url('img\test.gif')}}>

		@include('links')

	</body>
</html>