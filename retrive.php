<?php
    include 'start.php';
    $result = mysqli_query($conn, "SELECT * FROM std");
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Username: " . htmlspecialchars($row['username']) . "<br>Email: " . htmlspecialchars($row['email']) . "<br>Age: " . htmlspecialchars($row['age']) . "<br>";
            echo '<form action="delete.php" method="POST" style="display:inline;">';
            echo '<input type="hidden" name="username" value="' . htmlspecialchars($row['username']) . '">';
            echo '<input type="hidden" name="email" value="' . htmlspecialchars($row['email']) . '">';
            echo '<input type="hidden" name="age" value="' . htmlspecialchars($row['age']) . '">';
            echo '<input type="submit" value="Delete">';
            echo '</form><br><br>';
        }
    } else {
        echo "Nothing was found.";
    }
    mysqli_close($conn);
    ?>