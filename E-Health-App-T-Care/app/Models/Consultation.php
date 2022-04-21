<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Consultation extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = [
        'name',
        'CIN',
        'phone_client',
        'medicament',
        'posologie',
        'diagnostic'
    ];
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}
