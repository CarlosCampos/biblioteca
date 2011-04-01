<?php
namespace br\com\carloscampos\biblioteca\actions
{
	use br\com\carloscampos\biblioteca\utils\AbstractAction;
		use br\com\carloscampos\biblioteca\entidades\Autor;
	use br\com\carloscampos\biblioteca\dao\AutorMysqlDao;
    use br\com\carloscampos\biblioteca\view\AutorForm;
class AutorAction extends AbstractAction
{
	
	public function render()
	{
		if($_POST){
		$autor = new Autor();
		$autor -> setNome($_POST['nome']);
		try {
		$dao = new AutorMysqlDao();
		$dao -> save($autor);
		echo 'Autor salvo com sucesso';
		}catch (\PDOException $e){
		echo $e->getMessage();
		}
	
	}else{
		echo  new AutorForm();
	}
	} 
}
}