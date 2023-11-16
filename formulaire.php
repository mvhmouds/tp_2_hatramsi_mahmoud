<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num_adresses = $_POST["num_adresses"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire des adresses </title>
    <style>
        body {
            font-family: "Arial", sans-serif;
            background-color: #f2f2f2;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 120px auto;
            background-color: #F8F8F8;
            padding: 70px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .adresse-form {
            display: flex;
            flex-direction: column;
            margin: -20px;

        }

        h2 {
            color: #000000;

        }

        label {
            margin-bottom: 14px;
            color: #000000;
        }

        input,
        select {
            padding: 12px;
            margin-bottom: 15px;
            border: 2px solid #3498db;
            border-radius: 4px;
            background-color: #ecf0f1;
            color: #555;
        }

        button {
            padding: 14px;
            background-color: #2859ff;
            color: #fff;
            border: none;
            border-radius: 12px;
            cursor: pointer;
        }

        button:hover {
            background-color: #1B1B1B;
        }

        .section-adresse {
            margin-bottom: 65px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="confirmation.php" method="post" class="adresse-form">
            <?php
            for ($i = 1; $i <= $num_adresses; $i++) {
            ?>
                <div class="section-adresse">
                    <h2> Adresse <?php echo $i; ?></h2>
                    <label for="rue">Rue :</label>
                    <input type="text" name="rue[]" maxlength="50" required>
                    <label for="num_rue">Numéro de Rue :</label>
                    <input type="number" name="num_rue[]" required> 
                    <br>
                    <label for="type">Type :</label>
                    <select name="type[]">
                        <option value="livraison">Livraison</option>
                        <option value="facturation">Facturation</option>
                        <option value="autre">Autre</option>
                    </select>
                    <label for="ville">Ville :</label>
                    <select name="ville[]">
                        <option value="Montreal">Montreal</option>
                        <option value="Laval">Laval</option>
                        <option value="Toronto">Toronto</option>
                        <option value="Quebec">Quebec</option>
                    </select>
                    <label for="code_postal">Code Postal :</label>
                    <input type="text" name="code_postal[]" maxlength="6" required>
                </div>
            <?php
            }
            ?>
            <button type="submit" class="btn-confirmer">Confirmer</button>
        </form>
    </div>
</body>
</html>

<?php
}
?>
