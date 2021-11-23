<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_POST)
    {
        $risultato = $_POST["primo"] + $_POST["secondo"];
        echo "Il risultato : $risultato" ;
    }
    else
    {
    echo "<FORM ACTION= " . $_SERVER['PHP_SELF'] ." METHOD='POST'>";
    ?>
    
    <TABLE >
            <TR>
                <TD>Primo numero: <INPUT type="text" NAME="primo"></TD> 
            </TR><br>
            <TR>
                <TD>Secondo numero: <INPUT type="text" NAME="secondo"></TD> 
            </TR><br>
        </TABLE>
        <INPUT type="submit" value="Invia">
        </FORM>
    <?php
    }
    ?>
</body>
</html>