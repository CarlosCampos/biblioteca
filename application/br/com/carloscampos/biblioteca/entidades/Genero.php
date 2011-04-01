<?php
namespace br\com\carloscampos\biblioteca\entidades
{

	abstract class Genero {
		private $id;
		private $nome;

		public function setId(){
			$this->id = $id;}

			public function setNome(){$this->nome = $nome;}

			public function getId(){
				return $this->id = $id;
			}

			public function getNome(){
				return $this->nome = $nome;
			}
	}
}