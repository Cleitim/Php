<html>
<?php require_once ("cabecalho.php") ?>
    <body>
        <?php require_once ("menu.php"); ?>
    
        <div>
            <h1>Contato</h1>
        </div>
        <form action="enviarcontato.php" method="post">
            <input type="text" id="nome" name="nome" class="span6" placeholder="Nome"><br>
            <input type="email"name="email" required class="span6" placeholder="Email"><br>
            <input type="text" name="assunto" class="span8" placeholder="Assunto"><br>
            <textarea type=text" name="descricao" class="span8" placeholder="Descrição"></textarea> <br>
            <button class="btn" type="submit">Enviar</button>
            
        </form>
         <script type="text/javascript" src="js/bootstrap.js"></script>
         <?php require_once ("radape.php"); ?>
     </body>
   
</html>