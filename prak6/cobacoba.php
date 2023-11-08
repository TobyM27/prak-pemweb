<?php

$DATA = [
    [
        "nama" => "andi",
        "nim" => "121140098"
    ],
    [
        "nama" => "toby",
        "nim" => "121140099"
    ],
    [
        "nama" => "bendry",
        "nim" => "121140111"
    ],
];

foreach ($data as $item) {
    echo "<h2>" . $item['nama'] . "</h2>";
    echo "<h3>" . $item['nim'] . "</h3>";
}

?> 