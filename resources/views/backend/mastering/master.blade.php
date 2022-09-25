
<!DOCTYPE html>
<html lang="en">
    <head>
        @include('backend/includes/head');
    </head>
    <body class="sb-nav-fixed">
        @include('backend/includes/nav');
        
        <div id="layoutSidenav">
        @include('backend/includes/sidebar');
           
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        @yield('content')
                        
                        
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    
                </footer>
            </div>
        </div>
        @include('backend/includes/script');
        
    </body>
</html>

