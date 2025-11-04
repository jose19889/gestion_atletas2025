<?php 
namespace App\Models;
use CodeIgniter\Model;
class StatusModel extends Model
{
    protected $table = 'statuses';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['name', 'desc'];
    protected $useAutoIncrement = true;
    

    public function __construc(){
        $this->load->database();
      
        $db      = \Config\Database::connect();
        $builder = $db->table('statuses');
      }


      public function getcountryinfo(){
        $db      = \Config\Database::connect();
        $query   = $db->query('SELECT  c.id, c.name as comisaria , c.email, c.comisario_jefe, c.contacto, p.name as pname, b.name as bname, ci.name as cname
         FROM comisarias c
          JOIN provinces p ON c.province_id = p.id  
          JOIN cities ci ON c.city_id = ci.id 
           JOIN barrios b ON c.barrio_id = b.id ',
        );
        $results = $query->getResultArray();
        return $results;
      }


    public function user()
    {
        return $this->belongsTo('name', 'App\Models\UserModel');
        // $this->belongsTo('propertyName', 'model', 'foreign_key', 'owner_key');
    }


    public function getstatus()
    {
      //   $db      = \Config\Database::connect();
      //   $query   = $db->query('SELECT  name  FROM roles');
      //   $results = $query->getResultArray();
      // // $results = $query->getResult();
      //   return $results;
    return $this->findAll();
    }


}