<?php
    include __DIR__ . '/database.php';
    
    // Query di tutte le stanze
    $sql = "SELECT * FROM `stanze`";
    $result = $conn->query($sql);

    // Creato un array vuoto da popolare con $row
    $rooms = [];

    if ($result && $result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            // I risultati ci sono e popoliamo $rooms con 'stanze'
            $rooms[] = $row;
        }
    } elseif ($result) {
        $rooms = [];
    } else {
        echo "query error";
    }

    $conn->close();
?>
