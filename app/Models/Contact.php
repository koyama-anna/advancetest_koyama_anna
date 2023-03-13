<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'gender_id', 'email', 'postcode', 'address', 'building_name', 'opinion'];

    public static function getDate($from, $until)
    {
        $date = Contact::whereBetween("created_at", [$from, $until])->get();

        return $date;
    }
}
