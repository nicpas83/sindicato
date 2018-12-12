<!DOCTYPE html>
<html lang="en">
    @include('framework::sections.head')
    <body id="page-top">
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </body>
</html>
