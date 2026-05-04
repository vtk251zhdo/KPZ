<?php

require_once "autoload.php";

$doc = new TextDocument();
$editor = new TextEditor($doc);

$editor->type("Версія 1: Початок роботи.");
$editor->save(); 
$editor->printContent();

$editor->type("Версія 2: Додано новий абзац.");
$editor->save(); 
$editor->printContent();

$editor->type("Версія 3: Якась дурня, яку треба видалити.");
$editor->printContent();

$editor->undo();
$editor->printContent();

$editor->undo();
$editor->printContent();