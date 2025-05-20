<?php

namespace App\Models;

use CodeIgniter\Model;

class BiodataModel extends Model
{
  public function getBiodata()
  {
    return [
      'nama' => 'Muhammad Daffa Musyafa',
      'nim' => '2310817110007',
      'asal_prodi' => 'Teknologi Infomasi',
      'hobi' => 'gaming, coding, chilling, reading, watching',
      'skill' => 'Android, XML, Kotlin, desain Web/Android, figma',
      'gambar' => 'muhadapa.jpeg'
    ];
  }
}