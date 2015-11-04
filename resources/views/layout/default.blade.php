<!doctype html>
<html ng-app="panApp">
<head>
    @include('includes.head')
</head>
<body>

    <header>
        @include('includes.header')
    </header>

    <div id="content">

            @yield('content')

    </div>
</div>
</body>
</html>