
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
      <title>Lição 1</title>
  </head>
  <body>
<header>
<nav class="navbar navbar-dark bg-dark">


    <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="#">Active</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
  </ul>
</nav>
</header>
    <h1>Lição 1</h1>
    <aside>
      <div id="formulario">  
        <form action='primeiroposte.php' method='post'>
          <h2>Formulario</h2>
          <div class="form-group">
            <label for="exampleInputEmail1">Email:</label><br/>
            <input name='email' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Coloque seu email"><br/>
            <small id="emailHelp" class="form-text text-muted">Não de sua senha para ninguem.</small>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Senha:</label><br/>
            <input name='senha' type="password" class="form-control" id="exampleInputPassword1" placeholder="Coloque sua senha">
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
        
          <center><button type="submit" class="btn btn-primary">Enviar</button></center>
        </form>
      </div>
    </aside>  

<p>Magna orci duis elit sociosqu arcu donec tortor sagittis ridiculus ex, blandit etiam risus himenaeos egestas quam massa hendrerit
   platea, nisl aptent vivamus dapibus vulputate aliquet justo tempor finibus. Tempus placerat himenaeos torquent vehicula ipsum
    malesuada porta finibus, dictum sed arcu maecenas amet inceptos mollis cursus, porttitor elit ornare tincidunt nunc dui consequat.
   Leo convallis fringilla natoque suspendisse euismod ridiculus sapien ullamcorper, neque nisl consectetur lectus facilisis vivamus
  cubilia, malesuada amet quam nascetur eu adipiscing erat. Nisl torquent malesuada mollis turpis habitant odio condimentum, netus
   et facilisis est viverra sollicitudin, laoreet ultricies commodo nec porttitor dolor. Duis ut ultricies parturient himenaeos
  tempus nascetur tellus suspendisse aenean, vel praesent litora class pulvinar nunc congue tristique fusce, semper tortor conubia
   ante varius turpis etiam curae. Ligula dapibus donec ad rutrum ut phasellus potenti interdum elementum nam est, non enim egestas
  pellentesque id litora parturient sem class maecenas. Vitae mus auctor natoque sollicitudin felis posuere convallis,
   per facilisis nostra eget neque sagittis donec leo, odio ex aliquam vehicula rhoncus magnis. Interdum dolor dis mi commodo
   sit quisque nullam suspendisse proin class pellentesque, hac cras consectetur massa feugiat egestas nascetur mauris torquent.
   Venenatis parturient pulvinar mi elit magna consequat augue facilisis ad cubilia, sollicitudin efficitur hendrerit natoque
    id convallis mollis maximus fames non, aliquet ex feugiat felis dui magnis at aptent dictumst.</p>

  </body>
</html>