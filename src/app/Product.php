<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const LOAN = 'loan';
    const INSURANCE = 'insurance';

    protected $guarded = ['id'];

    /**
     * Return an array of product types
     * 
     * @return array List of all product types
     */
    public function getProductTypeAttribute()
    {
        return [self::LOAN, self::INSURANCE];
    }
}
