<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incremeting = true;
    protected $fillable = [];

    //Metodo para adicionar validações antes de savar
    public function beforeSave(){
        return true;
    }
    
    //Metodo para adicionar validações antes de savar
    public function save(array $options = []){
        try {
            if(!$this->beforeSave()){
                return false;
            }
            return parent::save($options);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

}