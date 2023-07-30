<?php
include "Exporter.php";

class TextExporter extends Exporter
{
    protected $format = '.txt';

    /**
     * @throws Exception
     */
    public function export()
    {
        $file_name = "text-file-" . random_int(100, 999) . $this->format;
        $file_path = __DIR__ . "/files/$file_name";
        file_put_contents($file_path, "{$this->data['title']}\n{$this->data['content']}");
        echo "$file_name successfully exported\n";
    }
}

$textExporter = new TextExporter(['title' => 'test', 'content' => 'test2']);
$textExporter->export();