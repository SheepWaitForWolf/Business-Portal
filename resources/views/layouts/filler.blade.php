 <div>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper profile-bg">
      @yield('Breadcrumb')

    <!-- Main content -->
    <section class="content">

      @yield('Content')

      @yield('Form')

      @yield('Modal')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

      @include('layouts.footer')

      @include('layouts.control-sidebar')
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->