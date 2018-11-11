     

<?php 
    include_once('../../../config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta name="viewport" content="width=device-width">
    <meta charset="UTF-8">
    <title>PAINEL</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URL_FRONTEND ?>css/bootstrap.css">
    <link rel="stylesheet/less" type="text/css" href="<?php echo URL_FRONTEND ?>pages/login/login.less">
    <link rel="stylesheet/less" type="text/css" href="<?php echo URL_FRONTEND ?>css/style.less">
    <script src="<?php echo URL_FRONTEND ?>js/less.min.js" type="text/javascript"></script>
  </head>
  <body>

    <div class='box' ng-app="pages" ng-controller="LoginPage">
        <div class='box-form'>
            <div class='box-login-tab'></div>
            <div class='box-login-title'>
            <div class='i i-login'></div>
            <h2>LOGIN</h2>
        </div>
        <div class='box-login'>
            <div class='fieldset-body' id='login_form'>
                <button class='b b-form i i-more' title='Mais Informações'></button>
                <form>
                    <div class="mask-loader"></div>
                    <p>
                        <span class='usario-senha-error error'>*Usuário/Senha inválida</span>
                        <span class='instabilidade-error error'>*Estamos passando por uma instabilidade no sistema. Por favor, tente mais tarde novamente.</span>
                    </p>
                    <p class='field'>
                        <label for='user'>LOGIN</label>
                        <input type='text' ng-model="login" id='user' name='user' title='Username' />
                        <span id='valida' class='i i-warning login-error'></span>
                        <span class='login-error error'>*Login inválido</span>
                    </p>

                    <p class='field'>
                        <label for='pass'>SENHA</label>
                        <input ng-model="senha" type='password' id='pass' name='pass' title='Password' />
                        <span id='valida' class='i i-warning senha-error'></span>
                        <span class='senha-error error'>*Senha inválida</span>
                    </p>
                    <p>
                        <button ng-click="submit()" />ENTRAR</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo URL_FRONTEND ?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo URL_FRONTEND ?>js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo URL_FRONTEND ?>js/angular.min.js"></script>
    <script type="text/javascript" src="<?php echo URL_FRONTEND ?>js/md5.js"></script>
    <script type="text/javascript" src="<?php echo URL_FRONTEND ?>pages/login/login.js"></script>


  </body>
</html>