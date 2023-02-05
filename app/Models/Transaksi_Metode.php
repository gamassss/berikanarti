<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi_Metode extends Model
{
    use HasFactory;

		public function transaksi()
		{
			$this->belongsTo(Transaksi::class);
		}

		public function metode()
		{
			$this->belongsTo(MetodePembayaran::class);
		}
}
