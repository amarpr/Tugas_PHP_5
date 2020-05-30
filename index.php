<?php

$input_satu = "true";
$input_dua = "false";
$input_tiga = true & false;
$input_empat = true & true;
echo "<p>Tabel Logika 1111</p>";
echo "
        <table border='1'>
            <tr>
                <td>Input True</td>
                <td>Input 2</td>
                <td>AND</td>
                <td>OR</td>
            </tr>

            <tr>
                <td>$input_dua</td>
                <td>$input_dua</td>
                <td>$input_tiga</td>
                <td>$input_tiga</td>
            </tr>

            <tr>
                <td>$input_dua</td>
                <td>$input_satu</td>
                <td>$input_tiga</td>
                <td>$input_empat</td>
            </tr>

            <tr>
                <td>$input_satu</td>
                <td>$input_dua</td>
                <td>$input_tiga</td>
                <td>$input_empat</td>
            </tr>

            <tr>
                <td>$input_satu</td>
                <td>$input_satu</td>
                <td>$input_empat</td>
                <td>$input_empat</td>
            </tr>
        </table>
    ";
?>