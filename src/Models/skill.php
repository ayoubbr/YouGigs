<?php

namespace App\Models;

use App\Core\Database;
use PDO;



class Skill extends Crud{
    private int $skill_id ;
    private string $skill_name;

public function __construct(int $skills_id,string $kill_name){
    $this->skill_id = $skills_id;
    $this->skill_name = $kill_name;
}
public function createSkills(){
  $this->skill_id=$this->insert('user_skills',[
    'name'=>$this->skill_name,
  ]);
}

public function getSkillId(){return $this->skill_id;}
public function getSkillName(){return $this->skill_name;}

public function setSkillId($skill_id){$this->skill_id = $skill_id ;}
public function setSkillName($skill_name){$this->skill_name = $skill_name ;}


}