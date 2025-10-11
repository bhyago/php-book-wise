<?php
$id = $_REQUEST['id'];
$db = new DB();
$livros = $db->livros($id);
  
view('livro', compact('livro'));
?>