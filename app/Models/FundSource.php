<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundSource extends Model
{
    use HasFactory;
    
    protected $table = 'fund_source';
    protected $primaryKey = 'source';
    public $incrementing = false;
    public $timestamps = false;
}
