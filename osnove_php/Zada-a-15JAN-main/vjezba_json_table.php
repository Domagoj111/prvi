<?php


/**
 * Get headers from the array keys
 * @author Erik Fakin 
 * */
function getTableHeaders(array | object $input): array
{
    if (array_keys($input))
        if (is_array($input[array_key_first($input)])) {
            $objectArray = $input[array_key_first($input)];
            return array_keys($objectArray);
        }

    return array_keys($input);
}

/**
 * Get tables css styles
 *
 * @return array
 */
function getTableStyles(): array
{
    $styles["tableStyles"] = " border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        min-width: 400px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);";
    $styles["tableHeaderStyles"] = " background-color: #009879;
        color: #ffffff;
        text-align: left;
        padding: 12px 15px;";
    $styles["tableDataStyles"] = "padding: 12px 15px;";

    $styles["tableRowStyles"] = "border-bottom: 1px solid #dddddd;";
    $styles["tableRowEvenStyles"] = "background-color: #f3f3f3;";
    $styles["tableRowLastStyles"] = "border-bottom: 2px solid #009879;";

    return $styles;
}



/**
 * Generates a html table from an array of data and an optional array for
 * the table headers.
 * @return string
 * 
 */
function getTableFromArray(array $array, array $headers = []): string
{

    // Get table headers if not provided in the function.
    if (sizeof($headers) == 0) {
        $headers = getTableHeaders($array);
    }

    // Table styles
    $styles = getTableStyles();


    // Header
    $html = "<table style='" . $styles["tableStyles"] . "'>";
    $html .= "<tr style='" . $styles["tableRowStyles"] . "'>";
    foreach ($headers as $headerTitle) {
        $html .= "<th style='" . $styles["tableHeaderStyles"] . "'>" . $headerTitle . "</th>";
    }
    $html .= "</tr>";

    // Data
    foreach ($array as $key => $value) {

        // Get the right style for the row
        $rowStyle = $styles["tableRowStyles"];
        if (is_int($key)) {
            if ($key % 2 == 1) {
                $rowStyle .= $styles["tableRowEvenStyles"];
            }
            if ($key == sizeof($array) - 1) {
                $rowStyle .= $styles["tableRowLastStyles"];
                //$rowStyle = $styles["tableRowLastStyles"];
            }
        }
        $html .= "<tr style='" . $rowStyle . "'>";

        // Add data to the row
        foreach ($value as $innerKey => $innerValue) {
            $displayValue = $innerValue;

            if (is_array($innerValue)) {
                $displayValue = getTableFromArray($innerValue);
            }
            // For bool values
            if (is_bool($displayValue)) {
                if ($displayValue) {
                    $displayValue = "Da";
                } else {
                    $displayValue = "Ne";
                }
            }


            $html .= "<td style='" . $styles["tableDataStyles"] . "'>" .
                $displayValue . "</td>";
        }
        $html .= "</tr>";
    }
    $html .= "</table>";

    return $html;
}

$booksJson = file_get_contents("../knjige.json");

$books = json_decode($booksJson, true);
//$tableHeaders = ["Naslov", "Autor", "Dostupno", "Stranice", "SN"];
$tableHeaders =[];
echo getTableFromArray($books, $tableHeaders);
