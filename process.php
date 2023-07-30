<?php
include "autoload.php";
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "not submitting";
    return;
}
// form submitted
[$title, $content, $format] = [$_POST['title'], $_POST['content'], $_POST['format']];
$whiteList = ['Text', 'Pdf', 'Json','Csv'];
if (!in_array($format, $whiteList, true)) {
    echo "invalid Format";
    return;
}
$className = "Exporter\\{$format}Exporter";
if (class_exists($className)) {
    $exporter = new $className(['title' => $title, 'content' => $content]);
    $exporter->export();
}