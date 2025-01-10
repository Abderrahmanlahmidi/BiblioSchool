<?php



class Role{

    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getAllRoles(){

        $sql = "SELECT * FROM biblioschool_db.role";

        $stmt = $this->db->prepare($sql);
        $stmt -> execute();
        $var = $stmt -> fetch(PDO::FETCH_ASSOC);
        
        return $var;        
    }

    

}




?> 