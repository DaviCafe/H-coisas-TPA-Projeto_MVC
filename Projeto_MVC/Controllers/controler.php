<?php
require_once 'model/Projeto.php';
class ProjetoController
public function all() {
$obj new Projeto ();
$projetos $obj->all();
require_once 'view/Projeto_all.php';
}
public function create() (
$obj new Projeto();
if(isset($_POST['nome'])){
$obj->setNome ($_POST['nome']);
$obj->setDuracao ($_POST['duracao']);
$obj->create();
$projeto $obj->read();
Jelse{
$projeto = (object) (