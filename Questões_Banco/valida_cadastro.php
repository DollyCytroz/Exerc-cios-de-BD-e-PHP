<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php

    $host  = "localhost:3306";
    $user  = "root";
    $pass  = "";
    $base  = "carros";
    $conexao  = mysqli_connect($host, $user, $pass, $base);


    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $id = $_POST["id"];
        $modelo = $_POST["modelo"]; 
        $fabricante = $_POST["marca"];
        $input = mysqli_query($conexao, "INSERT INTO tb_carros (id ,fabricante , modelo) VALUES ('$id' ,'$fabricante', '$modelo');");
        $resultadoQueryMySQL = mysqli_query($conexao, "select * from tb_carros where id");
        echo
          "<center><table border=3px>
            <tr>
              <td>id</td>
              <td>Montadora</td>
              <td>Modelo</td>
            </tr>";
        while ($escrever = mysqli_fetch_array($resultadoQueryMySQL)) {
          echo
          "</td><td>" . $escrever["id"] .
          "</td><td>" . $escrever["modelo"] .
          "</td><td>" . $escrever["fabricante"] . "</td></tr>";
        }
        echo "</table></center>";
        echo "</br></br>";  
      }
    mysqli_close($conexao);
?>