<?php
class Pagination{
	private $table;
	private $RecordPages;
	private $Pages = 1;
	private $CurrentPage = 1;
	private $orderby = null;
	private $where = null;
	private $total;

	function __construct($table,$count){
		$this->table = $table;
		$this->RecordPages = $count;
		$this->reloadPages();
	}
	
	private function reloadPages(){
		$query = mysql_query("SELECT * FROM ".$this->table." ");
		$this->total = mysql_num_rows($query);

		if($this->total>$this->RecordPages){
			$t =$this->total/$this->RecordPages;
			$pages = intval(round($t,PHP_ROUND_HALF_EVEN));
			$final = $pages*$this->RecordPages;
			if($final < $this->total)
				$this->Pages = $pages+1;
			else
				$this->Pages = $pages;
		}else{
			$this->Pages = 1;
		}
	}
	public function getCurrentPage(){return $this->CurrentPage;}
	public function getPages(){return $this->Pages;}
	public function getTotal(){return $this->total;}
	public function setOrderBy($orderby){$this->orderby = $orderby;}
	public function setWhere($where){$this->where = $where;}

	public function mostrar($page){
		if($page<=$this->Pages){
			$this->CurrentPage = $page;
			$records = ($page-1) * $this->RecordPages;
			$sql ="SELECT * FROM ".$this->table;
			if($this->where != null){
				$sql = $sql." WHERE ".$this->where[0].$this->where[1].$this->where[2];
			}
			if($this->orderby != null){
				$sql = $sql." ORDER BY ".$this->orderby[0]." ".$this->orderby[1];
			}
			$sql = $sql." LIMIT ".$records.",".$this->RecordPages." ";
			$query = mysql_query($sql);
			return $query;
		}
		return false;
	}
}

?>