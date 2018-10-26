<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SourceOfIncome;

class LoanDetail extends Model
{
    protected $guarded = ['id'];

    public function loan()
    {
        return $this->belongsTo('App\Loan');
    }
}
