<?php
require './src/config/global.php';
$mensaje = "";
$id = 1;
$sql = 'SELECT * FROM users WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$users = $statement->fetch(PDO::FETCH_OBJ);

if (isset ($_POST['name'])  && isset($_POST['email']) ) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = 'UPDATE users SET name=:name, email=:email, username=:username, password=:password WHERE id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':name' => $name, ':email' => $email, ':username' => $username, ':password' => $password, ':id' => $id])) {
    header("Location: ./perfil.php");
    $mensaje = "Perfil Actualizado";
  }
 
} ?>

<?php require './src/themes/header.php'; ?>

<div class="cleared"></div>

<div class="container">
    <div class="wrap">
              
              <div style="text-align:center;">
                </br></br>
                <h2>Bienvenido, <?= $users->name; ?></h2>
                <p>Zona de usuario.</p>
                <?= $mensaje; ?>

                </br>

                <form method="post">
                  <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" value="<?= $users->name; ?>" name="name" id="name" class="form-control">
                  </div>

                  </br>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" value="<?= $users->email; ?>" name="email" id="email" class="form-control">
                  </div>

                  </br>

                  <div class="form-group">
                    <label for="email">Usuario</label>
                    <input type="text" value="<?= $users->username; ?>" name="username" id="username" class="form-control">
                  </div>

                  </br>

                  <div class="form-group">
                    <label for="email">Password</label>
                    <input type="password" value="<?= $users->password; ?>" name="password" id="password" class="form-control">
                  </div>

                  </br>

                  </br>

                  <div class="form-group">
                    <button type="submit" class="btn btn-info">Update person</button>
                  </div>
              </form>

                <div class="cleared"></div>


              </div>
              
            </div>
    </div>
</div>

</br></br></br></br>

<div class="cleared"></div>

<?php require './src/themes/footer.php'; ?>