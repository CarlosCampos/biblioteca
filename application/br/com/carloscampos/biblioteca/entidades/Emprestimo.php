<?php
namespace br\com\carloscampos\biblioteca\entidades
{

	class Emprestimo {
		private $id;
		private  $data;
		private $dataDevolucao;
		private $multa;
		private $usuario;
		private $livros;
		
			public function setId(){
			$this->id = $id;}

			public function getId(){
				return $this->id = $id;}
			
			
				public function setData(){
			$this->data = $data;}

			public function getData(){
			$this->data = $data;}
			
			
				public function setDataDevolucao(){
			$this->datadevolucao = $datadevolucao;}

			public function getDataDevolucao(){
				return $this->datadevolucao = $datadevolucao;
			}
			
				public function setMulta(){
			$this->multa = $multa;}

			public function getMulta(){
				return $this->multa = $multa;
			}
			
		public function setUsuario(){
			$this->usuario = $usuario;}

			public function getUsuario(){
				return $this->usuario = $usuario;
			}
	public function setBibliotecario(){
			$this->bibliotecario = $blibiotecario;}

			public function getUsuario(){
				return $this->bibliotecario = $blibiotecario;
			}
	public function setLivros(){
			$this->livros = $livros;}

			public function getLivros(){
				return $this->livros= $livros;
			}
		
	}
}