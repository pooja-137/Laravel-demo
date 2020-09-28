<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}" defer></script>
<title>Hello World</title>
</head>
<body>
<div class="container">
<form action="/data" method="post">
@csrf
    <div class="form-group">
    <!-- we can change lanuguage by two methods
    1. create {language}.json file in lang folder(Remember it should not be included in nested folder under lang)
    2. create {viewFileName}.php file in lang/{langcode}/ -->
        <label class="control-label">{{__('name')}}</label>
        <input type="text" name="uname" class="form-control" placeholder="Enter name" />
    </div>
    <div class="form-group">
        <label class="control-label">{{__('password')}}</label>
        <input type="password" name="pswd" class="form-control" placeholder="Enter password"/>
    </div>
    <div class="form-group">
        <button class="btn btn-warning form-control" type="submit">Save</button>
    </div>
</form>
</div>
    <!-- replacable content -->
<div>
    @yield('abc')
</div>
<!-- replacable content ends here -->

<!-- importing images from public folder -->
<img src="{{asset('img\flower2.jpg')}}" height="40px" width="40px" alt="file not found">
<!-- This can be used for importing bootstrap css and js files also -->

</body>
</html>
