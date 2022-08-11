<?php
require './src/config/global.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM programs WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$program = $statement->fetch(PDO::FETCH_OBJ);
?>

<?php require './src/themes/header.php'; ?>

<div class="barra">
  <h1>ESTAS POR SUMARTE!</h1>
</div>

<div class="cleared"></div>

<div class="container">
    <div class="wrap">

            <div class="grid-2">
              <div>
                <img style="border: none;" alt="programas" src="<?= $program->imagen; ?>" width="100%" height="auto" />
                  
              </div>
              
              <div>
                </br></br>
                <h2><?= $program->programa; ?></h2>
                <p><?= $program->detalle; ?></p>

                <div class="cleared"></div>

                  <div style="width: 100%;">
                        
                    <div class="columns-1">
                      <div style="font-size: 12px; text-align: center; color:white;">Lugar:</br>
                      <?= $program->ubicacion; ?></div>
                    </div>

                    <div class="columns-2">
                      <div style="font-size: 12px; text-align: center; color:white;">Duración:</br>
                      <?= $program->duracion; ?></div>
                    </div>

                    <div class="cleared"></div>
                      </br>
                    <div class="cleared"></div>

                    <div class="columns-1">
                      <div style="font-size: 12px; text-align: center; color:white;">Fecha:</br>
                      <?= $program->fecha; ?></div>
                    </div>

                    <div class="columns-2">
                      <div style="font-size: 12px; text-align: center; color:white;">Hora Partida:</br>
                      <?= $program->horaPartida; ?></div>
                    </div>

                    <div class="cleared"></div>

                      </br>

                    <div class="cleared"></div>

                      <a href="sumate.php?id=<?= $program->id ?>">
                        <div class="grid-item-btn">Sumate!</div>
                      </a>

                <div class="cleared"></div>

              </div>
              
            </div>
    </div>
</div>

</br></br>

<div class="cleared"></div>

<?php require './src/themes/footer.php'; ?>