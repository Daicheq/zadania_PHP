<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>zadanie 1</h1>
    <form method="post">
        <table>
            <tr>
                <td>podaj ilość kolumn tabeli: </td>
                <td><input type="number" name='kolumny' value="1" min="1" max="10"></td>
            </tr>
            <tr>
                <td>podaj ilość wierszy tabeli:</td>
                <td><input type="number" name='wiersze' value="1" min="1" max="10"></td>
            </tr>
            <tr>
                <td>podaj liczbę początkową:</td>
                <td><input type="number" name='liczba' value="1" min="1" max="100"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="utwórz tabele"></td>
            </tr>
        </table>
    </form>

    <h2>tabela</h2>
    <table>
        <?php
        $kolumny = $_POST['kolumny'];
        $wiersze = $_POST['wiersze'];
        $liczba = $_POST['liczba'];
        for ($i = 1; $i <= $wiersze; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $kolumny; $j++) {
                echo "<td>";
                echo $liczba++;
                echo "</td>";
            }
            echo "</tr>";
        }

        ?>


    </table>
</body>

</html>
