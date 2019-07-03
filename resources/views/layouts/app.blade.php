<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SCAA</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     {{-- <link href="{{ asset('css/styles.css') }}" rel="stylesheet"> --}}
     <!-- Bootstrap core CSS -->
     {{-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">  --}}

    <!-- Custom styles for this template -->
     <link href="{{asset('css/simple-sidebar.css')}}" rel="stylesheet">
     <style type="text/css">
     html, body {
               /*background-image: url("/img/back.jpg"); */
                background-color: #fff;
                
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
              
                

               
           

                margin: 0;
                 height: 100%;
                -webkit-background-size: cover;
              -moz-background-size: cover;
                background-size: cover;
                 background-size: 100% 100%;

        }



        .block {
    display: block;
    width: 100%;
    border: none;
    background-color: #4CAF50;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
}

.block:hover {
    background-color: #ddd;
    color: black;
}
/* CSS for Credit Card Payment form */
.credit-card-box .panel-title {
    display: inline;
    font-weight: bold;
}
.credit-card-box .form-control.error {
    border-color: red;
    outline: 0;
    box-shadow: inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(255,0,0,0.6);
}
.credit-card-box label.error {
  font-weight: bold;
  color: red;
  padding: 2px 8px;
  margin-top: 2px;
}
.credit-card-box .payment-errors {
  font-weight: bold;
  color: red;
  padding: 2px 8px;
  margin-top: 2px;
}
.credit-card-box label {
    display: block;
}
/* The old "center div vertically" hack */
.credit-card-box .display-table {
    display: table;
}
.credit-card-box .display-tr {
    display: table-row;
}
.credit-card-box .display-td {
    display: table-cell;
    vertical-align: middle;
    width: 50%;
}
/* Just looks nicer */
.credit-card-box .panel-heading img {
    min-width: 180px;
}
        </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        SCAA
                    </a>
                </div>

               
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="">Login</a></li>
                            <li><a href="">Register</a></li>
                        @else
                            <li><a href="" ><i class="fas fa-building"></i></a></li>
                            <li><a href=""><i class="fas fa-briefcase"></i></a></li>


               @if(Auth::user()->role_id ==1)
                           

                                <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        SCAA
                    </a>
                </li>
                <li>
                    <a href="/committee">COMMIITTEE</a>
                </li>
                <li>
                    <a href="pastleader">PAST LEADERS</a>
                </li>

                <li>
                    <a href="#">GENERAL MEMBERS</a>
                </li>
                <li>
                    <a href="#">TOURS</a>
                </li>
               <!--  <li>
                    <a href="#">EVENTS</a>
                </li> -->
                <li>
                    <a href="news">NEWS</a>
                </li>
                <li>
                    <a href="/notice">NOTICE</a>
                </li>
               <li>
                    <a href="#">SCHOLARSHIP</a>
                </li>

                 <li>
                    <a href="/sports">SPORTS</a>
                </li>


                <li>
                    <a href="/photo">GALLARY</a>
                </li>
                <li>
                    <a href="event">EVENT</a>
                </li>
                <li>
                    <a href="report">REPORT</a>
                </li>


            </ul>
        </div>
       

    </div>
    
     <div id="page-content-wrapper">
            <div  class="container-fluid">
                
                
               
                <a href="#menu-toggle"  class="btn btn-secondary" id="menu-toggle" >Update</a>
            </div>
        </div>
             
             @else

             <a  class="navbar-brand" href="aprofile">Profile</a>
             <a  class="navbar-brand" href="offer">Offer Scholarship</a>

              

                            




                            @endif

                            



                             <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
      <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    {{-- <script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script> --}}
</body>
</html>
