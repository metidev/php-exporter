<?php
namespace Exporter;

use Exception;

class CSVExporter extends Exporter
{
    protected $format = '.csv';

    /**
     * @throws Exception
     */
    public function export()
    {
        $file_name = "csv-file-" . random_int(100, 999) . $this->format;
        $file_path = __DIR__ . "/files/$file_name";
        file_put_contents($file_path, "{$this->data['title']},{$this->data['content']}");
        echo "$file_name successfully exported\n";
    }
}