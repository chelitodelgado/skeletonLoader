<!DOCTYPE html>
<html>
  <head>
    <title>Make Skeleton Loader con PHP Ajax usandso Bootstrap</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#">chelo404</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    
  </div>
</nav>
    <br />
    <div class="container">
      <h3 align="center">Make Skeleton Loader with PHP Ajax using Bootstrap</h3>
      <br />
      <div class="card">
        <div class="card-header">Dynamic Data</div>
        <div class="card-body" id="dynamic_content">
          
        </div>
      </div>
    </div>
  </body>
</html>

<script>
  $(document).ready(function(){

    $('#dynamic_content').html(make_skeleton());

    setTimeout(function(){
      load_content(5);
    }, 5000);

    function make_skeleton()
    {
      var output = '';
      for(var count = 0; count < 5; count++)
      {
        output += '<div class="ph-item">';
        output += '<div class="ph-col-4">';
        output += '<div class="ph-picture"></div>';
        output += '</div>';
        output += '<div>';
        output += '<div class="ph-row">';
        output += '<div class="ph-col-12 big"></div>';
        output += '<div class="ph-col-12"></div>';
        output += '<div class="ph-col-12"></div>';
        output += '<div class="ph-col-12"></div>';
        output += '<div class="ph-col-12"></div>';
        output += '</div>';
        output += '</div>';
        output += '</div>';
      }
      return output;
    }

    function load_content(limit)
    {
      $.ajax({
        url:"fetch.php",
        method:"POST",
        data:{limit:limit},
        success:function(data)
        {
          $('#dynamic_content').html(data);
        }
      })
    }

  });
</script>