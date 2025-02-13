<?php

namespace App\Models;

use App\Core\Database;
use PDO;



class Skill extends Crud{
    private int $skill_id ;
    private string $skill_name;

public function __construct(){
    
}
public function __call($name, $args)
{
  if($name == 'name'){
    $this->skill_name = $args[0];
  }
  if($name == 'nameid'){
    $this->skill_id = $args[0];
    $this->skill_name = $args[1];
  }
  }

public function createSkills($skill_name){
  $this->skill_id=$this->insert('skills',[
    'name'=>$this->skill_name=$skill_name
  ]);
}
public function udateskill($id,$name){$this->update('skills','id',$id,['name'=>$this->skill_name=$name]);}
public function deleteskills($id){$this->delete('skills','id',$id);}

public function fetchskills(){return $this->selectAll('skills');}
public function getSkillId(){return $this->skill_id;}
public function getSkillName(){return $this->skill_name;}

public function setSkillId($skill_id){$this->skill_id = $skill_id ;}
public function setSkillName($skill_name){$this->skill_name = $skill_name ;}


}