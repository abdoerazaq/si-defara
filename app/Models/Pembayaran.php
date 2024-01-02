<?php

namespace App\Models;

use App\Models\Member;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembayaran extends Model
{
    use HasFactory;
    public function members(){
        return $this->belongsTo(Member::class);
    }

        protected $fillable = [
        'members_id',
        'tanggal_bayar',
        'keterangan',
    ];

}
