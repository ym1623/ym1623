<?php
class Testlib extends controller{
	public function __construct(){
		parent::Controller();
		$this->load->library('level');
				
	}
	
	public function index(){
        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />";
		//$this->levelTest();
		$a=$this->setMultiLevel();
        echo "<br>";
        echo decbin($a);//100010
        echo "<br>";
        $this->setSingle();
        echo '<br>以下是详细权限列表<br>';
        $this->singleDetail();
	}
	
	public function levelTest(){
		$a=$this->level->GetLevel('10100101100000');
		print_r($a);
	}
	
	public function setMultiLevel(){
		$a=array(1,5);
		echo "<br>复合权限为：<br>";//权限1，5
		echo $b=$this->level->SetLevel($a);//100010---
        return $b;
	}

    public function setSingle(){
        
        echo $this->level->SetLevel(3);//8
        echo "<br>";
        echo decbin($this->level->SetLevel(3));//1000
        echo "<br>";
        echo $this->level->GetLevel($this->level->SetLevel(3));//
        echo "<br>";
        echo $this->level->GetLevelAsString($this->level->SetLevel(3)); 
       
    }

    public function singleDetail() {
        for($i=0;$i<14;$i++) {
            echo $this->level->SetLevel($i).'----'.$this->level->GetLevelAsString($this->level->SetLevel($i)).'<br>';

        }
    }
}
?>