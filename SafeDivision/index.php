
<!DOCTYPE html>
<html>
<head>
    <title>Safe Division Lab</title>
</head>
<body>

    <h2>Safe Division Calculator</h2>

    <form method="POST" action="">
        <label>Number A:</label>
        <input type="number" name="numberA" step="any" required>

        <br><br>

        <label>Number B:</label>
        <input type="number" name="numberB" step="any" required>

        <br><br>

        <button type="submit" name="submit">Divide</button>
    </form>

    <?php

    if (isset($_POST['submit'])) {

        $numberA = (float) $_POST['numberA'];
        $numberB = (float) $_POST['numberB'];

        try {

            if ($numberB == 0) {
                throw new Exception("You cannot divide by zero!");
            }

            $result = $numberA / $numberB;

            echo "<h3>Result: " . htmlspecialchars((string)$result) . "</h3>";

        } catch (Exception $e) {

            echo "<p style='color: red;'>"
                . htmlspecialchars($e->getMessage())
                . "</p>";

        }

    }

    ?>

</body>
</html>
