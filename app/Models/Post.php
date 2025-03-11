<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use CrudTrait;

    const STATUS = [
        0 => 'Pending',
        1 => 'Confirmed',
        2 => 'Cancel',
    ];

    protected $fillable = [
        'title',
        'image',
        'description',
        'status'
    ];
    
    public function getStatusTextAttribute(){
        return self::STATUS[$this->status] ?? '';
    }
}
