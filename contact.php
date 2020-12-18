<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
  <link rel="icon" type="image/png" href="./img/favicon.png"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css" defer>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/popper.min.js"></script>
  <script src="./js/jquery.min.js"></script>
  <script src="./js/passwords.js"></script>
  <script src="./js/cartScript.js" defer></script>
  <style>
    #map{
      height: 400px;
      width: 100%;
    }
  </style>
</head>
<body>
  
  <?php require './navbar.php'; ?>
  
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Contacte-nos</li>
    </ol>
  </nav>

  <main>

    <div class="container mt-5 contactContainer">
      <div class="row-col d-flex justify-content-around">
        <aside>
          <h3>Contacto</h3>
          <h6>Telefone</h6>
          <p>918273645</p>
          <h6>Endereço de e-mail</h6>
          <p>fbawtft@zoo.pt</p>
          <h6>Morada</h6>
          <p>Av. GrandesBestas nº 7689</p>
          <h6>Código-postal</h6>
          <p>1000-100 Zoolândia</p>
        </aside>

        <aside class="col-6">
          <form action="" method="post">
            <div class="form-group">
              <label for="" class="d-block">Nome</label>
              <input class="nameInput" type="text" name="name" id="name">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Endereço de e-mail</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Selecione o motivo</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Compra tickets</option>
                <option>Pergunta sobre animais</option>
                <option>Pergunta sobre plantas</option>
                <option>Pergunta sobre a loja</option>
                <option>Outras questões</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Mensagem</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Digite o motivo pelo qual nos contactou."></textarea>
            </div>
            <button type="submit">Enviar</button>
          </form>
        </aside>
      </div>
    </div>

    <?php require './shoppingCartSidebar.php'; ?>

    <div id="map"></div>

    <script>
      function initMap(){
        var options = {
          zoom:15,
          center:{lat:38.720537, lng:-9.145902}
        }
        
        // New map
        var map = new google.maps.Map(document.getElementById('map'), options);

        // Add marker
        var marker = new google.maps.Marker({
          position:{lat:38.720537, lng:-9.158900},
          map: map,
          icon: {
            path: google.maps.SymbolPath.CIRCLE,
            scale: 10
          }
        })
      }
    </script>

    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNGOyb_87IOla4Qz3-PDj18qDfyYPoo3s&callback=initMap&libraries=&v=weekly"
      defer
    ></script>

  </main>

  <?php require_once './footer.html'; ?>
  
</body>
</html>