@includeIf('panel.layout.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @includeIf('panel.layout.navbar')
        @includeIf('panel.layout.siderbar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->
        @includeIf('panel.layout.footer')
