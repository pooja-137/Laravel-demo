<html>
<head>   
    @include('requiredFiles')      
</head>
<body>
    <header class="main-header">
        <!-- Logo -->
        @include('navbar')  
    </header>
    <div class="main-sidebar">
        @include('menubar')
    </div>
    <div class="content-wrapper">  
        @include('dynamicPanel')
    </div>
    <footer class="page-footer font-small white mt-auto bg-primary">
        @include('footer')
    </footer>
<body>
</html>