<?php

namespace App\Models;

use App\Models\Type_Employes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory, Notifiable;
    
    public function getRouteKeyName()
    {
        return 'name';
    }
    protected $table = 'employes';
    protected $fillable = ['fullname', 'email', 'password','numTel','nbjourconge','salaire','idtype_employer'];

    public function Type()
    {
        return $this->belongsTo(Type_Employes::class,'idtype_employer','id');
    }
    public function demandes()
    {
        return $this->hasMany(demandecongée::class);
    }



    // protected $hidden = [
    //     'pin_code', 'remember_token',
    // ];

    // public function check()
    // {
    //     return $this->hasMany(Check::class);
    // }

    // public function attendance()
    // {
    //     return $this->hasMany(Attendance::class);
    // }
    // public function latetime()
    // {
    //     return $this->hasMany(Latetime::class);
    // }
    // public function leave()
    // {
    //     return $this->hasMany(Leave::class);
    // }
    // public function overtime()
    // {
    //     return $this->hasMany(Overtime::class);
    // }
    // public function schedules()
    // {
    //     return $this->belongsToMany('App\Models\Schedule', 'schedule_employees', 'emp_id', 'schedule_id');
    // }

}
