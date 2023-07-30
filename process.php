<?php
include "autoload.php";
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "not submitting";
    return;
}
// form submitted
[$title, $content, $format] = [$_POST['title'], $_POST['content'], $_POST['format']];
$whiteList = ['Text', 'Pdf', 'Json'];
if (!in_array($format, $whiteList, true)) {
    echo "invalid Format";
    return;
}
$exporter = new Exporter\TextExporter(['title' => $title, 'content' => $content]);
$exporter->export();
//switch ($format) {
//    case 'Text':
//        BadExporter::export_to_text($title, $content);
//        break;
//    case 'Pdf':
//        BadExporter::export_to_PDF($title, $content);
//        break;
//    case 'Json':
//        BadExporter::json_export($title, $content);
//        break;
//}