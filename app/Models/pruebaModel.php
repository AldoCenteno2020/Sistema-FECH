<?php 
namespace App\Models;

use CodeIgniter\Model;

class pruebaModel extends Model
{
    public function obtener()
    {
        $query = $this->db->table('Docente'); 
        $query->select('id_Docente');
        return $query->get()->getResult();
    }

// SELECT * FROM "Docente"
// WHERE "id_Docente"='2' 

}

?>