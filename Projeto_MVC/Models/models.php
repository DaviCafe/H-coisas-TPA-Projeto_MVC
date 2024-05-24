<?php

class Projeto
{
private $id;
private $nome;
private $duracao;

private $con;
}

public function _ construct(Sid-null, Snome-null, $duracao-null)
{
$this->id - Sid;
$this->nome Snome;
$this->duracao Sduracao;
$this->con = new PDO (SERVIDOR, USUARIO, SENHA);
}

public function all() {
$sql = $this->con->prepare('SELECT FROM ver_projeto');
$sql->execute():
$rows = $sql->fetchAll (PDO:: FETCH_CLASS);
Srows return:
}

public function create(){
$sql $this->con->prepare('INSERT INTO projeto (nome, duracao) VALUES (?,?)');
$sql->execute([$this->nome, $this->duracao]);
}

public function read(){

$sql $this->con->prepare('SELECT FROM ver projeto WHERE id=?');
$sql->execute([$this->id]); Srow $sql->fetchObject();
return $row;
}

public function update() {
$sql = $this->con->prepare('UPDATE projeto SET nome?, duracao? WHERE id=?');
$sql->execute([$this->nome, $this->duracao, $this->id]);
}

public function delete() {
$sql = $this->con->prepare('DELETE FROM projeto WHERE id=?');
$sql->execute(($this->id));
}