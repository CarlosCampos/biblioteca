<?php
namespace br\com\carloscampos\biblioteca\dao
{

	use br\com\carloscampos\biblioteca\utils\ConexaoMysql;

	use br\com\carloscampos\biblioteca\entidades\Autor;

	class AutorMysqlDao {
		public function getbyId($id){
			$sql = ConexaoMysql::getInstance()->prepare ('select * from autor where id=?');
			$sql->execute(array($id));
			if($obj = $sql->fetchObject()){
			$autor = new Autor();
			$autor->setId($obj->id);
			$autor->setNome($obj->nome);
			return $autor;
			}
			
		}
		
		public function remove (Autor $autor){
			$sql = ConexaoMysql::getInstance();
			
				$deleta = $sql->prepare('delete from autor where id=?');
				$deleta->bindValue($autor->getId());
				$deleta->execute();		
				}
		
		public function save(Autor $autor){
			$sql = ConexaoMysql::getInstance();
			
			if($autor ->getId()){
				$altera = $sql->prepare('update autor set nome=? where id=?');
				$altera->bindValue(1, $autor->getNome());
				$altera->bindValue(2, $autor->getId());
				$altera->execute();				
			}else{
				$salva = $sql->prepare('insert into autor set nome=?');
				$salva->bindValue(1, $autor->getNome());
				$salva->execute();	
				$autor -> setId($sql->lastInsertId());
				
			}
			
		}
		
				
	}		
		
}