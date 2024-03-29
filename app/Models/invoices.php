<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class invoices extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=[];
    protected $dates = ['deleted_at'];
    public function section()
    {
        return $this->belongsTo(sections::class);
    }
    public function invoiceAttachment()
    {
        return $this->hasMany(invoiceAttachment::class);
    }

}
