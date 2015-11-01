<!doctype html>
<html ng-app="mapApp">
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header>
        @include('includes.header')
    </header>

    <div id="content">

            @yield('content')

    </div>
</div>
</body>
</html>