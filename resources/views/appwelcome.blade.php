<!DOCTYPE html>
<html lang="en">
  <head>
  @include('layouts.head') 
  </head>
  <body>
    <div class="container-scroller">
          @yield('content')
    </div>
    <!-- container-scroller -->
    @include('layouts.script') 
    <!-- End custom js for this page -->
  </body>
</html>