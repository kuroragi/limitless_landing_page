<!DOCTYPE html>
<html lang="en">

@include('layouts.partials._head')

<body style="background-color: black;">
    @include('layouts.partials._header')

    <div id="line-container"></div>

    <main>
        @yield('content')
    </main>

    @include('layouts.partials._footer')

    @include('layouts.partials._foot')
</body>

</html>