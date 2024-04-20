<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">

<style>
div{padding: 10px;font-size:16px;} 
  header{
    background-color: #135D66;
    color: #E3FEF7;}
    
</style>
<title>ログイン</title>
</head>
<body>

<header>
  <nav class="navbar navbar-default" >LOGIN</nav>
</header>

<!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
<form name="form1" action="login_act.php" method="post">
ID:<input type="text" name="lid">
PW:<input type="password" name="lpw">
<input type="submit" value="ログイン">
</form>


</body>
</html>