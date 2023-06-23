<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    protected $table = "pelanggarans";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','tanggal','kelas','nama','pelanggaran','bobot','sanksi'];
}

