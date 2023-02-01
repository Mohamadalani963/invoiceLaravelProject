<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoiceAttachment extends Model
{
    use HasFactory;
    public function invoices()
    {
        return $this->belongsTo(invoices::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
