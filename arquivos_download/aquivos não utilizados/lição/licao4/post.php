<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css.css">
    <title>dd post</title>
</head>
<body>
<div id="all">
    <form action="fazendopost.php" method="post">
        <h2>Textos</h2>

        <div class="form-group">
            <label for="exampleInputEmail1" >Titulo:</label><br/>
            <input type="text" class="form-control" name="titulo" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titulo">
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1" ></label><br/>
            <input type="text" class="form-control" name="texto" class="texto001" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escreva o seu texto" padding: 150px 300px;>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1" ></label><br/>
            <input type="text" class="form-control" name="nome" class="texto001" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escreva o seu Nome">
        </div>
        <br/>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
</body>
</html>