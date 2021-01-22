<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datakategori extends Model
{
    protected $table = 'table_kategori';
    protected $fillable=['kategori','keterangan'];
}
