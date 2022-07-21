<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cort-tify</title>
    <link rel="stylesheet" href="{{asset('assets/style2.css')}}">
    
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
  
  <header class="grid" >
    @include('user.layouts.header')
  </header>
    <section>
     @yield('content')
    </section>
  
    <footer>
    @include('user.layouts.footer')
    </footer>
    
</body>
</html>