<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lottery</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(function(){
            $('#SetPeople').click(function(){
                $.post("Set.php",{MaxNumber:$('#usr').val()},function(result){
                    $("#div1").html(result);
                });
            });
            
            $('#giftbtn').click(function(){
                $.ajax({
                  url:'lottery.php',
                  success:function(result){
                    $('#Gift').html(result)
                  }
                })
            })
        })
    </script>
    
    <style>
      body{
        background-image: url("./img/maxss.jpg");
        background-size:cover;
        width:100%;
        height:100%;
      }

      button{
        margin: auto;
        width:300px;
      }
    </style>
</head>
<body>

<p>

<div align="center">
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
    設定人數
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">設定抽獎人數!</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <div class="form-group">
        <label for="usr">最大人數:</label>
        <input type="text" class="form-control" id="usr">
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="SetPeople" class="btn btn-secondary" data-dismiss="modal">設定</button>
      </div>
    </div>
  </div>
</div>

<p></p>

<div align="center">
    <button type="button" class="btn btn-danger" id="giftbtn" data-toggle="modal" data-target="#exampleModalCenter1">
    抽獎
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">恭喜您!</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" align="center">
        <img src="./img/mx03017.gif"><p></p>
        <div id="Gift">
        </div>
        <img src="./img/mx03017.gif"><p></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div id="div1">
</div>
</body>
</html>