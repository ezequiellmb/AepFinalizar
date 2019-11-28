<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller
{
  public function index()
  {
    // carregar a model
      $this->load->model('produto_model');
      // echo '<pre>';
      // print_r($this->user_model->getUsers(2));
      // echo '</pre>';

      $data['usuarios'] = $this->produto_model->getUsers();
      $data['cor'] = 'gray';
  $this->load->view('lista-produto', $data);
  }

  public function forminsere()
  {
    $data['titulo'] = 'Cadastrar Produto';
$data['edita']  = false;
$data['acao']   = 'insereDb';

$this->load->view('form-produto', $data);
  }

  public function insereDb()
  {
    $data = [
  'nome'  => $_POST['nome'],
  'descricao' => $_POST['descricao'],
  'quantidade' => $_POST['quantidade'],
];
// carregar a model
$this->load->model('Produto_model');
$this->Produto_model->insere($data);
$this->index();
  }

  public function formaltera()
  {
    // carregar a model
$this->load->model('Produto_model');
// recupera o parametro
$id = $_GET['id'];
// alimenta o array que vai pra view
$data['titulo'] = 'Editar Produtos';
$data['altera']  = true;
$data['usuarios'] = $this->Produto_model->getUsers($id);
$data['acao']   = 'alteraDb';
$this->load->view('form-produtoaltera', $data);
  }

  public function alteraDb()
  {
    $data = [
         'id'   => $_POST['id'],
         'nome'  => $_POST['nome'],
         'descricao' => $_POST['descricao'],
         'quantidade' => $_POST['quantidade'],
       ];
  }

  public function deleteDb()
  {
    // carregar a model
    $this->load->model('Produto_model');
    // recupera o parametro
    $id = $_GET['id'];
    $data = [
        'id' => $id
    ];
    $this->Produto_model->exclui($data);
    $this->index();
  }
}
