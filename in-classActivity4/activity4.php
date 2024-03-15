<!DOCTYPE html>
<html lang="en">

<?php
 $converted_value=0;
 $from_value=0;
 
                    $rates = array(
                        "FUSD" => array(
                            "TUSD" => 1,   // USD to USD
                            "TCAD" => 1.35, // USD to CAD
                            "TEUR" => 0.92  // USD to EUR
                        ),
                        "FCAD" => array(
                            "TUSD" => 0.74,  // CAD to USD
                            "TCAD" => 1,    // CAD to CAD
                            "TEUR" => 0.68  // CAD to EUR
                        ),
                        "FEUR" => array(
                            "TUSD" => 1.09, // EUR to USD
                            "TCAD" => 1.47, // EUR to CAD
                            "TEUR" => 1     // EUR to EUR
                        )
                    );

                    if (isset($_GET['from_value'], $_GET['from_currency'], $_GET['to_currency'])) {
                        $from_value = $_GET['from_value'];
                        $from_currency = $_GET['from_currency'];
                        $to_currency = $_GET['to_currency'];

                        //Print Conversion
                        $converted_value = $from_value * $rates[$from_currency][$to_currency];
                    }
                    ?>


<head>
    <title>Java Jam Coffee House</title>
    <meta name="description" content="CENG 311 Inclass Activity 1" />
</head>
<body>
    <form method="GET">
        <table>
            <tr>
                <td>
                    From:
                </td>
                <td>
                    <input type="number" name="from_value" value="<?php echo $from_value ?>" />
                </td>
                <td>
                    Currency:
                </td>
                <td>
                    <select name="from_currency">
                        <option value="FUSD" <?php if(isset($_GET['from_currency']) && $_GET['from_currency'] == 'FUSD') echo 'selected'; ?>>USD</option>
                        <option value="FCAD" <?php if(isset($_GET['from_currency']) && $_GET['from_currency'] == 'FCAD') echo 'selected'; ?>>CAD</option>
                        <option value="FEUR" <?php if(isset($_GET['from_currency']) && $_GET['from_currency'] == 'FEUR') echo 'selected'; ?>>EUR</option>
                    </select>
                </td>   
            </tr>
            <tr>
                <td>
                    To:
                </td>
                <td>
                    <input type="text" name="to_value" value="<?php echo $converted_value ?>" readonly />
                </td>
                <td>
                    Currency:
                </td>
                <td>
                    <select name="to_currency">
                        <option value="TUSD" <?php if(isset($_GET['to_currency']) && $_GET['to_currency'] == 'TUSD') echo 'selected'; ?>>USD</option>
                        <option value="TCAD" <?php if(isset($_GET['to_currency']) && $_GET['to_currency'] == 'TCAD') echo 'selected'; ?>>CAD</option>
                        <option value="TEUR" <?php if(isset($_GET['to_currency']) && $_GET['to_currency'] == 'TEUR') echo 'selected'; ?>>EUR</option>
                    </select>
                </td>   
            </tr>
            <tr>
				<td>

				</td>
				<td>

				</td>
				<td>

				</td>
                <td colspan="4">
                    <input type="submit" value="Convert" />
                </td>
            </tr>
        </table>
    </form>     
</body>
</html>