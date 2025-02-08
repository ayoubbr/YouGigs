<?php

namespace App\Models;

use App\Core\Database;
use PDO;



class Skill{
    private int $skill_id ;
    private string $skill_name;

public function __construct(int $skills_id,string $kill_name){
    $this->skill_id = $skills_id;
    $this->skill_name = $kill_name;
}
public function create(skill $skill){
    $query = "INSERT INTO skill (skill_name ) 
    VALUES (?, ?)";

    $stmt = Database::get()->connect()->prepare($query);
    $stmt->execute([
        $skill ->getSkillId(),
        $skill->getSkillName()
    ]);

    $skill->setSkillId(Database::get()->connect()->lastInsertId());
    return $skill;
}

public function getSkillId(){return $this->skill_id;}
public function getSkillName(){return $this->skill_name;}

public function setSkillId($skill_id){$this->skill_id = $skill_id ;}
public function setSkillName($skill_name){$this->skill_name = $skill_name ;}


}