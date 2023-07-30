<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "not submitting";
    return;
}
// form submitted
include "Exporter/Exporter.php";
[$title, $content, $format] = [$_POST['title'], $_POST['content'], $_POST['format']];
switch ($format) {
    case 'Text':
        BadExporter::export_to_text($title, $content);
        break;
    case 'Pdf':
        BadExporter::export_to_PDF($title, $content);
        break;
    case 'Json':
        BadExporter::json_export($title, $content);
        break;

}