<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title></title>
  </head>
  <body>

   <div class="container">
     {{-- @include('partials.header') --}}

     @yield('content')

     {{-- @include('partials.footer') --}}
   </div>

  </body>
</html>
