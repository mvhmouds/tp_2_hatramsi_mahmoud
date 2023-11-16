<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire des adresses </title>
    <style>
        body {
            font-family: "Arial", sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            text-align: center;
        }

        .adresse-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-bottom: 10px;
            color: #2859ff;
            font-size: 60px;

            
        }

        input {
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
    </style>
</head>
<body>
    <div class="container">
        <form action="formulaire.php" method="post" class="adresse-form">
            <label for="num_adresses">Combien d'adresses avez-vous ?</label>
            <input type="number" name="num_adresses" required>
            <button type="submit" class="btn-suivant">Suivant</button>
        </form>
    </div>
</body>
</html>
