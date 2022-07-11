<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body>

  <?php
  // aqui teriamos algo como SELECT * FROM "TABELA" ORDER BY ID DESC 
  // de retorno teriamos 
  $bd = [
    ['postagem' => 'Bla Bla Bla 15'],
    ['postagem' => 'Bla Bla Bla 14'],
    ['postagem' => 'Bla Bla Bla 13'],
    ['postagem' => 'Bla Bla Bla 12'],
    ['postagem' => 'Bla Bla Bla 11'],
    ['postagem' => 'Bla Bla Bla 10'],
    ['postagem' => 'Bla Bla Bla 9'],
    ['postagem' => 'Bla Bla Bla 8'],
    ['postagem' => 'Bla Bla Bla 7'],
    ['postagem' => 'Bla Bla Bla 6'],
    ['postagem' => 'Bla Bla Bla 5'],
    ['postagem' => 'Bla Bla Bla 4'],
    ['postagem' => 'Bla Bla Bla 3'],
    ['postagem' => 'Bla Bla Bla 2'],
    ['postagem' => 'Bla Bla Bla 1'],
  ];

  ?>

  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <?php
      $cont = 0;
      $break = 1;
      $color = true;
      //for para dizer quantos slide teremos
      for ($p = 1; $p <= 3; $p++) {
      ?>
        <div class="swiper-slide">
        <?php
          //for que passa pelos dados recuperados pelo db
          for ($i = $cont; $i < count($bd); $i++) { ?>

            <div class="<?php echo $color == true ? "principal" : "segundario" ?>"><?= $bd[$i]['postagem'] ?></div>
          
          <?php
          //total que ira quebrar 15/5 = 3 slide de 5
          if($break == 5){
            $break = 1;
            $color = true;
            break;
          }
          $break += 1;
          $cont += 1;
          $color = false;
          ?>
          
          <?php  } ?>
        </div>
      <?php
      }
      ?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>

</html>


<!-- Demo styles -->
<style>
  html,
  body {
    position: relative;
    height: 100%;
  }

  body {
    background: #eee;
    font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 14px;
    color: #000;
    margin: 0;
    padding: 0;
  }

  .swiper {
    width: 100%;
    height: 100%;
  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;

    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .principal {
    background-color: red;
  }

  .segundario {
    background-color: rgb(0, 185, 0);
  }

  .swiper-slide>div {
    width: 160px;
    height: 160px;
    margin: 5px;
  }
</style>