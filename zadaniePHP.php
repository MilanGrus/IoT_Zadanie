
<?php

header("Content-type: text/css");

$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.7em';
$border = '1px solid';

echo "<table>";
echo '<td>hello</td>'

?>

table {
    margin: 8px;
}

td {
    font-family: <?=$font_family?>;
    font-size: <?=$font_size?>;
    color: #FF0000;
    border: <?=$border?> #000;
}
