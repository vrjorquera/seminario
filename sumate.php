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
  <h1>TE ACABAS DE SUMAR A ESTA ACTIVIDAD!</h1>
</div>

<div class="cleared"></div>

<div class="container">
    <div class="wrap">
              
              <div style="text-align:center;">
                </br></br>
                <h2><?= $program->programa; ?></h2>
                <p>Ya eres parte de esta actidad!</p>
                <p>Recuerda que puedes darte de baja en cualquier momento!</p>
                

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

                    <p>Descarga el evento para tu calendario.</p>
                    <p>Comparte.</p>


              </div>
              
            </div>
    </div>
</div>

</br></br></br></br>

<div class="cleared"></div>

<?php require './src/themes/footer.php'; ?>