<html><head>
    
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="180x180" href="C:\wamp64\www\projet\logo.png">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Login</title>
    

    </head>
<body>
    <div id="form_login">
    <form method="POST" accept-charset="utf-8">
    <legend><b>Login</b></legend>
    <label>Usuário</label><br><input type="text" class="d_camplogin" name="login" required="required" required placeholder="Informe o seu usuário.."/><br><br>
    <label>Senha</label><br><input type="password" class="d_campsenha" name="senha" required="required"/>
    <input class="d_bt_login" type="submit" value="Acessar"><br>


    <div id="retornologinphp">
    <?php
                 require("login.php");
           ?>
    <br>
    </div>
   
    </form>
    
    </div>
    
</body>
</html>