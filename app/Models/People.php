<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    protected $table = 'people';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     * tarefas relacionadas a uma pessoa
     */
    public function tasks(){
        return $this->belongsToMany(Tasks::class,'people_on_task','people_id','task_id');
    }

}
