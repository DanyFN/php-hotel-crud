<?php include __DIR__ . '/server.php'; ?>
<?php include __DIR__ . '/partials/header.php'; ?>

        <main>
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
                        </tr>
                        <!-- Fine Singola Stanza -->
                    <?php } ?>

                </tbody>
            </table>
            <!-- Fine Tabella -->
        </main>

    </body>
</html>
