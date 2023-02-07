<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Achtbaan</title>
</head>
<body>
    <h1>De 5 snelste achtbanen van Europa</h1>

    <form action="create.php" method="post">
        <label for="achtbaan">Naam achtbaan:</label><br>
        <input type="text" name="achtbaan" id="achtbaan"><br>

        <label for="pretpark">Naam Pretpark:</label><br>
        <input type="text" name="pretpark" id="pretpark"><br>

        <label for="land">Naam Land:</label><br>
        <input type="text" name="land" id="land"><br>

        <label for="snelheid">Topsnelheid(KM):</label><br>
        <input type="number" name="snelheid" id="snelheid"><br>

        <label for="hoogte">Hoogte(M):</label><br>
        <input type="number" name="hoogte" id="hoogte"><br>

        <label for="opening">Datum eerste opening</label><br>
        <input type="date" name="opening" id="opening"><br>

        <label for="cijfer">Cijfer voor achtbaan:</label><br>
        <input type="range" name="cijfer" id="cijfer"><br>

        <input type="submit" value="Sla op">
    </form>
</body>
</html>