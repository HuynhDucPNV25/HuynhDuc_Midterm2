<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">
  
    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />
  
          <!-- Bootstrap CSS -->
          <link href="css/bootstrap.min.css" rel="stylesheet">
          <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
          <link href="css/tiny-slider.css" rel="stylesheet">
          <link href="css/style.css" rel="stylesheet">
          
          <!-- Javascript -->
          
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/tiny-slider.js"></script>
          <script src="js/custom.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
          <title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
   </head>
<body>
   
    
    @include('components.navbar')
    @include('components.banner')
    @yield('startProd')
    @yield('startWhyChooseUs')
	@yield('startWeHelp')
    @yield('popularProd')
	@yield('startTestimonial')	
    @yield('blog')
    @include('components.footer')
		

</body>
</html>