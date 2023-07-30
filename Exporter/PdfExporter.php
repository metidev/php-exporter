<?php
include "Exporter.php";
class PdfExporter extends Exporter
{
    protected $format = '.pdf';

    /**
     * @throws Exception
     */
    public function export()
    {
        $file_name = "pdf-file-" . random_int(100, 999) . $this->format;
        $file_path = __DIR__ . "/files/$file_name";
        file_put_contents($file_path, "{$this->data['title']}\n{$this->data['content']}");
        echo "$file_name successfully exported\n";
    }
}
$obj = new PdfExporter(['title' => 'test', 'content' => 'test2']);
$obj->export();