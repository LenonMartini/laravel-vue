<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies';
    public $timestamps = false;


    public function FilterCompany($social_reason = null){
            
            if(!$social_reason){
                
                return $this->get();

            }else{

                return $this->where('social_reason', 'LIKE', "%{$social_reason}%")
                 ->get();
            }

            
    }

}
