<!DOCTYPE html>
<html lang="en">

{{--Load Header--}}
@include('layouts.header')

<body>

    {{--Load Side Menu--}}
    @include('layouts.side-menu')
    <!-- /# sidebar -->

    {{--Load Header Menu--}}
    @include('layouts.header-menu')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
            @yield('content')
            </div>
        </div>
    </div>
        {{--Load Footer--}}
        @include('layouts.footer')
   

</body>
</html>