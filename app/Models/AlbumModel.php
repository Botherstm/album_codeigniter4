<?php 
namespace App\Models;

use CodeIgniter\Model;

class AlbumModel extends Model
{
protected $table = 'album';
protected $primaryKey = 'id';
protected $useTimestamp = true;
protected $allowedFields = ['name', 'image', 'description'];

public function getAlbum($name = false){
    if($name === false){
        return $this->findAll();
    }
    return $this->where(['name' => $name])->first();
}
} 



?>