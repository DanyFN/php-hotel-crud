<?php include __DIR__ . '/server.php'; ?>
<?php include __DIR__ . '/partials/header.php'; ?>

        <main>
          <?php if (isset($_GET["uproom"]) ) { ?>
            <p>Update stanza numero:"<?php echo $_GET["uproom"]; ?> è avvenuto con successo"</p>
          <?php } ?>
            <!-- Inizio Tabella -->
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th> NUMERO STANZA</th>
                        <th>PIANO</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($rooms as $row) { ?>
                        <!-- Singola Stanza -->
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['room_number'] ?></td>
                            <td><?php echo $row['floor'] ?></td>
                            <td>
                                <a href="<?php echo $path_base . 'show/show.php?id=' . $row['id']; ?>">Dettagli</a>
                            </td>
                            <td>
                                <a href="<?php echo $path_base . 'update/edit.php?id=' . $row['id']; ?>">Aggiorna</a>
                            </td>

                        </tr>
                        <!-- Fine Singola Stanza -->
                    <?php } ?>

                </tbody>
            </table>
            <!-- Fine Tabella -->
        </main>

    </body>
</html>
