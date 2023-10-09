<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajax in php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="container mt-5">

 
    <div class="row">
        <div class="col-lg-8">
            AJAX in php
        </div>
       
        <div class="col-lg-4">
            <button type="button" id="ID_btn" class="btn btn-success">Load Data</button>
        </div>
       
    </div>
    <div id="ID_table"></div>
  
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
        $('#ID_btn').click(function(){
          $.ajax({
            url : 'ajax_data.php',
            type : 'POST',
            success : function(data){
                $('#ID_table').html(data);
            }
          })
        })
    })
 
  </script>
</body>
</html>