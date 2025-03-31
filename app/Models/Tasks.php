<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'description', 'status'];


    public function people(){
      $this->belongsToMany(People::class, 'people_on_task','task_id','people_id');
    }
}
