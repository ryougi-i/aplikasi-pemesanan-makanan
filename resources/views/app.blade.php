<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
</head>
<body>
    {{-- navbar --}}
    @include('components.nav')
    
    {{-- content --}}
    @yield('client.layouts.content')
    






    {{-- footer --}}
    @include('components.footer')


    <script src="src/js/jquery.min.js"></script>
    <script src="src/js/bootstrap.min.js"></script>
    <script src="src/scss/vendors/plugin/js/slick.min.js"></script>
    <script src="src/scss/vendors/plugin/js/jquery.nice-select.min.js"></script>
    <script src="dist/main.js"></script>
    <script>
        function openNav() {

            document.getElementById("mySidenav").style.width = "350px";
            $('#overlayy').addClass("active");
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            $('#overlayy').removeClass("active");
        }
    </script>
</body>
</html>