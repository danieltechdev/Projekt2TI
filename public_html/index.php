<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep Internetowy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        .product {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }

        .product img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <h1>Sklep Internetowy</h1>

    <?php
    // Inkludujemy plik z połączeniem do bazy danych
    include '../includes/db.php';

    // Pobieramy produkty z bazy danych
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Przetwarzanie wyników
        while ($row = $result->fetch_assoc()) {
            echo "<div class='product'>";
            echo "<h3>{$row["name"]}</h3>";
            echo "<img src='{$row["image_path"]}' alt='{$row["name"]}'>";
            echo "<p>{$row["description"]}</p>";
            echo "<p>Cena: {$row["price"]} zł</p>";
            echo "<p>Dostępna ilość: {$row["available_quantity"]}</p>";
            echo "</div>";
        }
    } else {
        echo "Brak dostępnych produktów.";
    }

    // Zamykamy połączenie z bazą danych
    $conn->close();
    ?>

</body>

</html>