
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SPORTS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://mdbootstrap.com/previews/docs/latest/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://mdbootstrap.com/previews/docs/latest/css/mdb.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<style>




.box{width:300px; height:250px; border:1px solid #000; border-radius:2px; float:left; margin:20px 30px;  }
.box img{width:300px; height:250px;}
.box .overlay{width:300px; height:250px; background:#fff; margin:-250px 0px 0px 0px; opacity:0.5; }
.box a{padding:5px 7px; border:1px solid #000; text-decoration:none; font-family:sans-serif; font-size:14px; margin:-140px 0px 0px 15px; display:inline-block; opacity:0; transition:all 0.5s ease-in-out;    cursor: pointer;/* z-index: 10000; */position: absolute;}



.box .overlay:hover{opacity:0.1; transition:all 0.5s ease-in-out; width:300px; margin-left:50px; float:right; }
.box:hover{box-shadow:0px 0px 10px #6A6A6A; border:1px solid #00DFDF;transition:all 0.5s ease-in-out;}
.box:hover a{opacity:1; background:#FFFFFF; color:#000000; margin:-40px 0px 0px 15px;  border-radius:1px; }
.box a:hover{border:1px solid #00DFDF;transition:all 0.5s ease-in-out;   }

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}
.whov:hover { background-color: #00695c!important; }
.view {
  background-position: center center;
  background-repeat: no-repeat;
  height: 500px;
}
.secondbase {
    background-color: rgba(255,255,255,.6); 
    margin-top: -90px;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

.circular--square {
  border-top-left-radius: 50% 50%;
  border-top-right-radius: 50% 50%;
  border-bottom-right-radius: 50% 50%;
  border-bottom-left-radius: 50% 50%;
}

.grid-container {
  display: grid;
  grid-gap: 50px;
  grid-template-columns: auto auto auto;
  background-color: #2196F3;
  padding: 10px;
}
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
.img-circular{
 width: 200px;
 height: 200px;
 background-image: url('http://strawberry-fest.org/wp-content/uploads/2012/01/Coca-Cola-logo.jpg');
 background-size: cover;
 display: block;
 border-top-left-radius: 100px;
 -webkit-border-top-left-radius: 100px;
 -moz-border-top-left-radius: 100px;
 border-bottom-right-radius: 100px;
 -webkit-border-bottom-right-radius: 100px;
 -moz-border-bottom-right-radius: 100px;
}
</style>
<body>
 <!--Main Navigation-->
<header>
<nav class="navbar navbar-expand-lg navbar-dark default-color-dark fixed-top">
    <a class="navbar-brand" href="/">SCAA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
           <li class="nav-item">
                <a class="nav-link" href="commit">COMMITTEE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="shownews">NEWS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="galary">GALARY</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="notices">NOTICE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="leader">PAST LEADER</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">TOUR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="showevent">EVENT</a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="sport">SPORTS</a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="#">SCHOLARSHIP</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="contact">CONTACT</a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="{{ url('/login') }}">JOIN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/register') }}">REGISTER</a>
            </li>
        </ul>
     
    </div>
</nav>
</header>
    <div class="view hm-white-light jarallax" data-jarallax='{"speed": 0.2}' data-jarallax-video="https://www.youtube.com/watch?v=XL_3eYx3OVE">
            <div class="full-bg-img">
                <div class="container flex-center">
                    <div class="row">
                        <div class="col-md-12 wow fadeIn">
                            <div class="text-center text-danger">
                                <h1 class="display-2 mb-2 wow fadeInDown" data-wow-delay="0.3s">Sports</h1>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="container">
   @foreach ($sports as $sport)
  <div class="main">
      <div class="box">
      <img src="{{ asset('sports_img/' . $sport->image) }}" />
        <div>
        </div>
      <a class="more" href="#name">{{$sport->description}}</a>
      
      
    </div>
    
   
    
   
  </div>
    @endforeach
</div>


<hr>
<footer class="bg-dark text-white">
    <div class="text-center py-2 lead">Copyright  <a href="" target="_blank">SUST-CSE</a></p></div>
</footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script src="https://mdbootstrap.com/previews/docs/latest/js/bootstrap.min.js"></script>
    <script src="https://mdbootstrap.com/previews/docs/latest/js/mdb.min.js"></script>
    <script src="https://mdbootstrap.com/previews/docs/latest/js/jarallax.js"></script>
    <script src="https://mdbootstrap.com/previews/docs/latest/js/jarallax-video.js"></script>
    <script>
        new WOW().init();
    </script> 
</body>
</html>