<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    const PENDING = 'pending';
    const APPROVED = 'approved';
    const DENIED = 'denied';

    const PROPRIETOR = 'proprietor';
    const CORPORATION = 'corporation';

    

    protected $guarded = ['id'];

    public function product() 
    {
        return $this->belongsTo('App\Product');
    }

    public function detail() 
    {
        return $this->hasOne('App\LoanDetail');
    }

    /**
     * Return the mapped status message of the loan record
     * 
     * @return string The status message
     */
    public function getStatusMessageAttribute()
    {
        $messages = [
            self::PENDING       => 'Your application is still in progress',
            self::APPROVED      => 'Your application was approved',
            self::DENIED        => 'Your application was denied'
        ];
        return $messages[$this->attributes['status']];
    }

    /**
     * Return the status class
     * 
     * @return string The status class
     */
    public function getStatusClassAttribute()
    {
        $statuses = [
            self::PENDING   => 'bgm-gray',
            self::DENIED    => 'bgm-red',
            self::APPROVED  => 'bgm-darkblue',
        ];
        return $statuses[$this->attributes['status']];
    }

    /**
     * Create a concatinated contact person by first_name, middle_name and last_name
     * 
     * @return string The contact person full name
     */
    public function getContactPersonAttribute()
    {
        return implode(" ", [$this->attributes['first_name'], $this->attributes['middle_name'], $this->attributes['last_name']]);
    }

    /**
     * Create an array of requirements
     * 
     * @return array The list of requirements
     */
    public function getRequirementsListAttribute()
    {
        return explode(',', $this->attributes['requirements']);
    }

    /**
     * Generate a random tracking code
     * 
     * @param integer $length The length of the code. Defaults to 5
     * 
     * @return string
     */
    public static function generateTrackingCode($length = 10)
    {
        $key = '';
        $chars = array_merge(range(0, 9), range('a', 'z'), range(0, 9), range('A', 'Z'), range(0, 9));
        shuffle($chars);
        $chars = str_shuffle(str_rot13(join('', $chars)));
        $split = ceil($length / 5);
        $size = strlen($chars);
        $splitSize = ceil($size / $split);
        $chunkSize = $splitSize + mt_rand(1, 5);
        $chunkArray = array();

        while ($split != 0) {
            $strip = substr($chars, mt_rand(0, $size - $chunkSize), $chunkSize);
            array_push($chunkArray, strrev($strip));
            $split--;
        }

        foreach ($chunkArray as $set) {
            $adjust = ((($length - strlen($key)) % 5) == 0) ? 5 : ($length - strlen($key)) % 5;
            $setSize = strlen($set);
            $key .= substr($set, mt_rand(0, $setSize - $adjust), $adjust);
        }

        return strtoupper(str_rot13(str_shuffle($key)));
    }
}
