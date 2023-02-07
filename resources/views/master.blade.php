<!DOCTYPE html>
<html lang="en">
  <head>
  @include('layouts.head') 
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->

          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->

    </div>
    <!-- container-scroller -->
    @include('layouts.script') 
    <!-- End custom js for this page -->
  </body>
</html>