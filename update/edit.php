<?php include __DIR__ . "/server.php"; ?>
<?php include __DIR__ . "/../partials/header.php"; ?>

<main>
  <h2>Modifica stanza numero: </h2>
<!-- template utente x dati -->
<form action="<?php echo $path_base . "update/update.php" ?>" method="post">
  <input type="hidden" name="roomid" value="<?php echo $room["id"]; ?>">
  <div>
    <label>Numero della stanza</label>
    <input type="text" name="roomnumber" value="<?php echo $room["room_number"]; ?>">
  </div>
  <div>
    <label>Piano</label>
    <input type="text" name="roomfloor" value="<?php echo $room["floor"]; ?>">

  </div>
  <div>
    <label>Letti</label>
    <input type="text" name="roombeds" value="<?php echo $room["beds"]; ?>">

  </div>
  <div>
    <input type="submit" value="salva">
  </div>

</form>
</main>
