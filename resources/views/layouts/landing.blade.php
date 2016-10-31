<!DOCTYPE html>
<html lang='en'>

    <head>
@include('layouts.head')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">
            @include('layouts.header1')
        <div id="app">

        	<br>
        	<br>
       

        @yield('content')
    </div>

	</div>
<!-- ./wrapper -->

    </body>
</html>