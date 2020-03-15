<?php

define("GBook", "gbook.dat");
require_once "../model/model.php";

$book = loadBook(GBook);

if(!empty($_REQUEST['doAdd'])) {
  $book = [time() => $_REQUEST['new']] + $book;
  saveBook(GBook, $book);
}

include "../view/view.php";