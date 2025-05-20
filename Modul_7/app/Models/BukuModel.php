<?php
namespace App\Models;

use CodeIgniter\Model;

class Bukumodel extends Model
{
    protected $table = 'bookcrud';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'penulis', 'penerbit', 'tahun_terbit'];
}
?>