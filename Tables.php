<?php 

/**
 * 
 */
class Tables
{
	
	public function getTableName()
	{
		$refl = new ReflectionClass($this);
		return strtolower($refl->getName());
	}
	public function getColumnNames()
	{	
		return array_keys( get_object_vars($this));
	}
	public function getColumnValues()
	{
		return get_object_vars($this);
	}
	public function getColumnNamesNotNull()
	{	
		$ret = array();
		$obj = get_object_vars($this);
		var_dump($obj);
		foreach ($obj as $key => $value) {

			if(!is_null($value)){
				$aux = array($key => $value);
				array_push($ret, $aux);
			}
		}
		return $ret;
	}
	public function getRequireds()
	{
		$requireds = array();
		$reflection = new ReflectionClass($this);
		$atributos = $this->getColumnNames();
		
		foreach ($atributos as $key => $value) {
			$prop = new ReflectionProperty($reflection->getName(), $value);
			$comment_id = $prop->getDocComment();
			var_dump($comment_id);
			$inicioReq = strpos($comment_id, "@required=")+1;
			$aux = substr($comment_id, $inicioReq);
			$requireds[$value] = substr(substr($aux,0, strpos($aux, ";")), 9);
		
		}
		return $requireds;
	}
}

 ?>