<!DOCTYPE html>
<html lang="en">
@section('title', 'Dashboard')
@include('templates.header')

<body style="background-color: #C8FBE8">
    @include('templates.navbar')
    @yield('content')
    @include('templates.scripts')
</body>

</html>
