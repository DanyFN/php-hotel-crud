<?php include __DIR__ . '/../database.php'; ?>
<?php include __DIR__ . '/server.php'; ?>
<?php include __DIR__ . '/../partials/header.php'; ?>

<main>
    <h2>Il numero della stanza è <?php echo $room['room_number']; ?></h2>
    <ul>
        <li><?php echo $room['room_number']; ?></li>
        <li><?php echo $room['floor']; ?></li>
        <li><?php echo $room['beds']; ?></li>
        <li><?php echo $room['created_at']; ?></li>
    </ul>
</main>
