<?php
class BadExporter{
    public static function export_to_text($title,$content){
        echo "export to text [$title,$content]\n";
    }
    public static function export_to_PDF($title,$content){
        echo "export to pdf [$title,$content]\n";
    }
    public static function json_export($title,$content){
        echo "export to json [$title,$content]\n";
    }
}