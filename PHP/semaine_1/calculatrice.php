<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="resultat.php">
        <input type="number" step="0.01" name="nbr1">
        <select name="operateur">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select> 
        <input type="number" step="0.01" name="nbr2">
        <input type="submit" value="Envoyer">
    </form>

    
</body>
</html>