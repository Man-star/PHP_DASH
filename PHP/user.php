<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
<style>
.input{
 padding:9px 80px;

}
.cont{
    width:600px;
    height:600px;
    /* background-color:wheat; */
    text-align:center;
    border:2px solid #000;
}
</style>
<form action="file.php" method="post">
<div class="cont">
         <h1 class="h1">Сколько стоит <strong>BTC?</strong></h1>
         <br> <br>
<input type="text" id="inp__name" name="inp__name" class="input"> <label>Name</label> <br> <br>
<input type="text" id="inp__sirname" name="inp__sirname" class="input"> <label>Sirname</label><br> <br>
           <input type="checkbox" name="check1" class="check" id="check1" value="checkbox1"> 
            <label id = "answer1">30000-50000$</label> <br> <br>

            <input type="checkbox" name="check2" class="check" id="check2" value="checkbox2">
            <label id = "answer2">10000-30000$</label>  <br> <br>

            <input type="checkbox" name="check3" class="check" id="check3" value="checkbox3">
            <label id = "answer3">50000$+</label>  <br> <br>


           <button name="send" id="send__user">Send</button> 
           <br>  <br>
          
    <script src=my.js></script>
</div>
</form>
<!-- <form action="login.php" method="post">
<button name="go" id="go__admin">Go in Admin</button>
</form> -->
</body>
</html>