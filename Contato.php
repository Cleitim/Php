<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Site Simples em PHP" />
        <meta name="viewport" content="width-device-width, initial-scale-1" />
        <title>Site Simples em PHP</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/estilo.css">  
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>
    </head>
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