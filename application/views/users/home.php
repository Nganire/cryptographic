<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>encrypt and decrypt messages</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

   <script src="main.js"></script>
</head>
<body>
<div class="container">
<form action="/Process/encrypt_text" method="post">
<lable>Encrypt</lable><br>
<textarea rows="4" cols="100" name="text" placeholder="Type a message to encrypt"></textarea><br>
<input type="submit" value="encrypt" name="encrypt">
</form>
<hr>
<form action="/Process/decrypt_text" method="post">
<lable>Decrypt</lable><br>
<textarea rows="4" cols="100" name="text" placeholder="Type a message to encrypt"></textarea><br>
<input type="submit" value="Dencrypt" name="dencrypt">
</form>
</div>

</body>
</html>