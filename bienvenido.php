<?php
require './src/config/global.php';
$sql = 'SELECT * FROM programs';
$statement = $connection->prepare($sql);
$statement->execute();
$program = $statement->fetchAll(PDO::FETCH_OBJ);
?>

<?php require './src/themes/header.php'; ?>

<div class="barra">
  <h1>ELIJE A QUE ACTIVIDAD TE VAS A SUMAR!</h1>
</div>

<div class="cleared"></div>

<div class="container">
    <div class="wrap">

            <div class="grid">
                <?php foreach($program as $program): ?>
                    <div class="grid-item">
                        <a href="actividad.php?id=<?= $program->id ?>">
                            <img style="border: none;" alt="programa" src="<?= $program->imagen; ?>" width="100%" height="auto" />
                        </a>

                        <div class="grid-item-wrap">
                            <h2 style="text-align: center;"><?= $program->programa; ?></h2>
                            <p style="font-size: 14px; text-align: center;"><?= $program->detalle; ?></p>

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

                            </div>
                        </div>

                        <div class="cleared"></div>

                        <a href="sumate.php?id=<?= $program->id ?>">
                            <div class="grid-item-btn">Sumate!</div>
                        </a>

                        </br>

                    </div>
                <?php endforeach; ?>
            </div>
    </div>
</div>

<?php require './src/themes/footer.php'; ?>