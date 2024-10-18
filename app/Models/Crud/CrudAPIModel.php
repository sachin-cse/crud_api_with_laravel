<?php

namespace App\Models\Crud;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrudAPIModel extends Model
{
    use HasFactory;

    protected $table = 'laravel_crud_api';

    protected $primaryKey = 'id';

    protected $fillable = ['name','email'];

    const UPDATED_AT = null;
}
