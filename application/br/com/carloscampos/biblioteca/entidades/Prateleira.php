<?php
namespace br\com\carloscampos\biblioteca\entidades
{

	abstract class Pessoa {
		private $id;
		private $posicao;

		public function setId(){
			$this->id = $id;}

			public function setPosicao(){
				
				$this->posicao = $posicao;}

			public function getId(){
				return $this->id = $id;
			}

			public function getPosicao(){
				return $this->posicao = $posicao;
			}
	}
}