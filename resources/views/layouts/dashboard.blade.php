@include('includes.head')

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('includes.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @include('includes.header')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    @yield('content')
                    
                    @include('includes.footer')
