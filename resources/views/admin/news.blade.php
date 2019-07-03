<html lang="en">
<head>
  <title>News</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

        @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
        @endif

    <h3 class="jumbotron">Post news</h3>
<form method="post" action="{{url('news')}}" enctype="multipart/form-data">
  {{csrf_field()}}

        <div class="form-group">
  <label  for="file">Upload</label>  
  <div>
 <div class="input-group">
       <div class="input-group-addon">
       
       </div>
    <input type="file" name="filename" class="form-control">
      </div>

    
  </div>

  
</div>
<br>


        <div class="form-group">
  <label  for="overview">Details</label>
  <br>
  <div >                     
    <textarea class="form-control" rows="10"  id="Overview (max 200 words)" name="details"></textarea>
  </div>
</div>
<br>


        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>
  </form>        
  </div>


<script type="text/javascript">


    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>
</body>
</html>