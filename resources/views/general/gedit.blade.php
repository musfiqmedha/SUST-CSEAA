
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html>
<html lang="en">

<head>

     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>User profile form requirement</title>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">
    <!-- Bootstrap Core CSS -->
<!--     <link href="css/bootstrap.min.css" rel="stylesheet"> -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">

    <!-- Custom CSS -->
    <style>
    /*body {
        padding-top: 70px;
      
    }

    .othertop{margin-top:10px;}*/
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SCAA</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>
      <li><a href="#">COMMITTE</a></li>
      <li><a href="#">PAST LEADERS</a></li>
      <li><a href="#">TOURS</a></li>
      <li><a href="#">EVENT</a></li>
      <li><a href="#">SPORTS</a></li>
      <li><a href="#">NEWS</a></li>
      <li><a href="#">NOTICE</a></li>
      <li><a href="#">GALARY</a></li>
      <li><a href="#">SCHOLARSHIP</a></li>
      <li><a href="#">CONTACT</a></li>
      <li><a href="gedit">EDIT PROFILE</a></li>



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
    </ul>
  </div>
</nav>



   <div class="container">
<div class="row">
<div class="col-md-10 ">


<form class="form-horizontal" method="post" action="{{url('gedits')}}" enctype="multipart/form-data">
  {{ csrf_field() }}

<!-- Form Name -->
<legend> Profile form requirement</legend>

<!-- Text input-->




<div class="form-group">
  <label class="col-md-4 control-label" for="full_name">Name (Full name)</label>  
  <div class="col-md-4">
 <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-user">
        </i>
       </div>
       <input id="Name (Full name)" name="full_name" type="text" placeholder="Name (Full name)" class="form-control input-md">
      </div>

    
  </div>

  
</div>



<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="file">Upload photo</label>
  <div class="col-md-4">
    <input id="Upload photo" name="file" class="input-file" type="file">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Registration">Registration</label>  
  <div class="col-md-4">

  <div class="input-group">
       <div class="input-group-addon">

        
       </div>
       <input id="Date Of Birth" name="registration" type="text" placeholder="Registration" class="form-control input-md">
      </div>
  
    
  </div>
</div>






<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="gender">Gender</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="Gender-0">
      <input type="radio" name="gender" id="Gender-0" value="1" checked="checked">
      Male
    </label> 
    <label class="radio-inline" for="Gender-1">
      <input type="radio" name="gender" id="Gender-1" value="2">
      Female
    </label> 
    <label class="radio-inline" for="Gender-2">
      <input type="radio" name="gender" id="Gender-2" value="3">
      Other
    </label>
  </div>
</div>






<div class="form-group">
  <label class="col-md-4 control-label col-xs-12" for="Permanent Address">Permanent Address</label>  
  <div class="col-md-2  col-xs-4">
  <input id="Permanent Address" name="p_district" type="text" placeholder="District" class="form-control input-md ">
  </div>

  <div class="col-md-2 col-xs-4">

  <input id="Permanent Address" name="p_area" type="text" placeholder="Area" class="form-control input-md ">
  </div>

  
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Permanent Address"></label>  
  <div class="col-md-2  col-xs-4">
  <input id="Permanent Address" name="p_street" type="text" placeholder="Street" class="form-control input-md ">
  
  </div>

  

  
</div>




<div class="form-group">
  <label class="col-md-4 control-label col-xs-12" for="Temporary Address">Temporary Address</label>  
  <div class="col-md-2  col-xs-4">
  <input id="Temporary Address" name="t_district" type="text" placeholder="District" class="form-control input-md ">
  </div>

  <div class="col-md-2 col-xs-4">

  <input id="Temporary Address" name="t_area" type="text" placeholder="Area" class="form-control input-md ">
  </div>

  
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Temporary Address"></label>  
  <div class="col-md-2  col-xs-4">
  <input id="Temporary Address" name="t_street" type="text" placeholder="Street" class="form-control input-md ">
  
  </div>

  

  
</div>







<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="skills">Skills</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-graduation-cap"></i>
        
       </div>
     <input id="Skills" name="skills" type="text" placeholder="Skills" class="form-control input-md">
      </div>
 
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Phone number ">Phone number </label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-phone"></i>
        
       </div>
    <input id="Phone number " name="number " type="text" placeholder="Primary Phone number " class="form-control input-md">
    
      </div>
     
  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email Address</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-envelope-o"></i>
        
       </div>
    <input id="Email Address" name="email" type="text" placeholder="Email Address" class="form-control input-md">
    
      </div>
  
  </div>
</div>







<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="language">Languages Known</label>
  <div class="col-md-4">
  
  
  

<div class="othertop">
    

     <input type="text" name="language" id="Languages"  placeholder="Language">
    </div>
    
  </div>
</div>





<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="overview">Overview (max 200 words)</label>
  <div class="col-md-4">                     
    <textarea class="form-control" rows="10"  id="Overview (max 200 words)" name="overview"></textarea>
  </div>
</div>


{{-- <div class="form-group">
  <label class="col-md-4 control-label" ></label>  
  <div class="col-md-4">
  <a  class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Submit</a>
  <a  class="btn btn-danger" value=""><span class="glyphicon glyphicon-remove-sign"></span> Clear</a>
    
  </div>
</div> --}}
 <button type="submit" class="btn btn-primary" style="background-color:blue;margin:auto;display:block">Submit</button>

</form>

</div>
<div class="col-md-2 hidden-xs">
<img src="http://websamplenow.com/30/userprofile/images/avatar.jpg" class="img-responsive img-thumbnail ">
  </div>


</div>
   </div>
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
