<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">

    @include('publicPart.includes.head')

</head>

<body>
@include('publicPart.includes.header')
@yield('content')
@include('publicPart.includes.footer')
@include('publicPart.includes.scripts')
</body>
</html>