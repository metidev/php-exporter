<?php
namespace Exporter;

class JsonExporter extends Exporter
{
    protected $format = '.json';

    /**
     * @throws Exception
     */
    public function export()
    {
        $file_name = "json-file-" . random_int(100, 999) . $this->format;
        $file_path = __DIR__ . "/files/$file_name";
        file_put_contents($file_path, json_encode($this->data, true));
        echo "$file_name successfully exported\n";
    }
}