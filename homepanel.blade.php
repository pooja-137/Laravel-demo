@include ('menubar')
<html>
    <head>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/_all-skins.css') }}">
    </head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <div>
        @yield ('nav')
    <div>
<br>
    <div class="content-wrapper">  
        <section class="content-header">
            <h1>
                मुख्यपेज
            </h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <!-- Small boxes (Stat box) -->
            <div class="row mainRow" id="main-content">

                <!-- ./col -->
                  <!-- ./col -->
                  <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua" style="padding-bottom: 20px;">
                        <div class="inner">

                            <h4>ग्राहक</h4>
                        </div>
                        <div  >
                            <img src="{{asset('img\client.png')}}" class="img-fluid img-icon"  alt="avatar">
                        </div>
                        <a href="" class="small-box-footer">माहिती पहा  <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua" style="padding-bottom: 20px;">
                        <div class="inner">
                    
                            <h4>व्यापारी </h4>
                        </div>
                        <div  >
                            <img src="{{asset('img\customer.png')}}" class="img-fluid img-icon" alt="avatar">
                        </div>
                        <a href="" class="small-box-footer">माहिती पहा  <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                   

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua" style="padding-bottom: 20px;">
                        <div class="inner">
                         
                            <h4>ड्रायवर </h4>
                        </div>
                        <div  >
                            <img src="{{asset('img\driver.png')}}" class="img-fluid img-icon" alt="avatar">                   
                        </div>
                        
                        <a href="" class="small-box-footer">माहिती पहा  <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua" style="padding-bottom: 20px;">
                        <div class="inner">
                         
                            <h4>हमाल </h4>
                        </div>
                        <div  >
                            <img src="{{asset('img\loader.png')}}" class="img-fluid img-icon"  alt="avatar">              
                        </div>
                        
                        <a href="" class="small-box-footer">माहिती पहा  <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->

      
     
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua" style="padding-bottom: 20px;">
                        <div class="inner">
                            <h4>वाहन   </h4>
                        </div>
                        <div  >
                            <img src="{{asset('img\vehicle.png')}}" class="img-fluid img-icon"  alt="avatar">
                        </div>
                        <a href="" class="small-box-footer">माहिती पहा  <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                            
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua" style="padding-bottom: 20px;">
                        <div class="inner">
                           
                            <h4>व्यवहार    </h4>
                        </div>
                        <div  >
                            <img src="{{asset('img\deal.png')}}" class="img-fluid img-icon"  alt="avatar">
                        </div>
                        <a href="" class="small-box-footer">माहिती पहा  <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->    
                
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua" style="padding-bottom: 20px;">
                        <div class="inner">
                            <h4>जमा खर्च    </h4>
                        </div>
                        <div>
                            <img src="{{asset('img\saving_expense.png')}}" class="img-fluid img-icon"  alt="avatar">
                        </div>
                        <a href="" class="small-box-footer">माहिती पहा  <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua" style="padding-bottom: 20px;">
                        <div class="inner">
                         
                            <h4>खान  </h4>
                        </div>
                        <div >
                            <img src="{{asset('img\maal.png')}}" class="img-fluid img-icon"  alt="avatar">
                        </div>
                        <a href="" class="small-box-footer">माहिती पहा  <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- right col -->
    </div>
</div>
 
<!-- ./wrapper -->
@include('scripts');
@include('profile');
 </body>
 </html>
