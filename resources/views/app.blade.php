<!DOCTYPE html>
<html lang="en">
  <head>
  @include('layouts.head') 
  @livewireStyles
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
      @include('partials.sidebar') 
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
        @include('partials.header') 
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
          @include('partials.footer') 
          </footer>
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