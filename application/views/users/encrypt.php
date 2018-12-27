<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Your mesage</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
   <script src="main.js"></script>
</head>
<body>


   <div class="container">
   <div div style="background-color:lightblue"><h3>keep up that security. you have encrypted <?=$encrypt_count;?>  messages</h3></div>
   <a href="/process/home">Home </a>

       <h1>your enscrypted message:</h1>
       <h2><textarea rows="4" cols="50"><?= $encryptext; ?></textarea></h2>

  </div>

</body>
</html>