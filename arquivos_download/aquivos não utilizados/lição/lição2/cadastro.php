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
    <title>Document</title>
</head>
<body>
<div id="all">
    <form>
        <h2>Cadastro</h2>

         <div class="form-group">
            <label for="exampleInputEmail1">Email:</label><br/>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Coloque seu email"><br/>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Senha:</label><br/>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Coloque sua senha">
        </div>

        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">você comcorda com nossas <a href="medidas_de_privacidade.php" target="_blank"> medidas de privacidade</a></label>
        </div>
        <br/>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <div class="linkLC1">
            <button type="submit" class="btn btn-primary" ><a href="index.php" class="linkLC">login</a></button>
        </div>
    </form>
</div>
</body>
</html>