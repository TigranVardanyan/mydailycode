<?php
function loadBook($fname) {
  if(!file_exists($fname)) return [];
  $Book = unserialize(file_get_contents($fname));

  return $Book;
}


function saveBook ($fname, $book) {
  file_put_contents($fname, serialize($book));
}