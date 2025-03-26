<?php
abstract class Document {
    abstract public function save();
}

class PDFDocument extends Document {
    public function save() {
        print("Документ сохранен в формате PDF.<br>");
    }
}

class WordDocument extends Document {
    public function save() {
        print("Документ сохранен в формате Word.<br>");
    }
}

class ExcelDocument extends Document {
    public function save() {
        print("Документ сохранен в формате Excel.<br>");
    }
}

$pdfDocument = new PDFDocument();
$wordDocument = new WordDocument();
$excelDocument = new ExcelDocument();

$pdfDocument->save();
$wordDocument->save();
$excelDocument->save();