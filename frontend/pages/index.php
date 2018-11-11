<?php 
    include_once('../../config.php');
?>
<html>
  <head>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0/angular.js"></script>
        <script src="http://code.angularjs.org/1.3.0/angular-route.js"></script>
        <script src="<?php echo URL_FRONTEND ?>js/rotas.js"></script>
</head>
<body>
   <ul>
       <li><a href="home">Lançamentos</a></li>
       <li><a href="tp-lancamento">Tipos de Lançamento</a></li>
   </ul>
    
   <div ng-view>
       <!--Conteúdo da view será carregado aqui-->
   </div>