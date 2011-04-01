<?php
namespace br\com\carloscampos\biblioteca\entidades
{

	class Livro {
		private $id;
		private $titulo;
		private $ano;
		private $edicao;
		private $paginas;
		private $quantidade;
		private $editora;
		private $autor;

		public function setId(){
			$this->id = $id;}

			public function setTitulo(){
				$this->titulo = $titulo;}

				public function getId(){
					return $this->id = $id;
				}

				public function getTitulo(){
					return $this->titulo = $titulo;
				}
				public function setAno(){
					$this->ano = $ano;}

					public function getAno(){
						return $this->ano = $ano;
					}

					public function setEdicao(){
						$this->edicao = $edicao;}

						public function getEdicao(){
							return $this->edicao = $edicao;
						}
	
			public function setQuantidade(){
			$this->quantidade = $quantidade;}

			public function getQuantidade(){
				return $this->quantidade = $quantidade;
			}		
							
				public function setEditora(){
			$this->editora = $editora;}

			public function getEditora(){
				return $this->editora = $editora;
			}		

				public function setAutor(){
			$this->autor = $autor;}

			public function getAutor(){
				return $this->autor = $autor;
			}		
							
	}
}