<!DOCTYPE html>
<html>
<head>
    <title>My Laravel App</title>
</head>
<body>

@include('partials.nav') <!-- insert a nav.blade.php file content file into current file -->

<hr>

@yield('content') <!--This is the place where the 'content' section will appear -->

<hr>

@include('partials.footer', ['name' => 'Boshra'])  <!-- insert a footer.blade.php file content file into current file,in this case we padd data as well-->
</body>
</html>