<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','description','status','pic'];

    const ACTIVE = 1;
    const IN_ACTIVE = 0;

    public function getStatus()
    {
        return [
            self::IN_ACTIVE => 'غیر فعال',
            self::ACTIVE => 'فعال',
        ][$this->status];
    }

    public function products()
    {
        return $this->hasMany(Product::class,'category_id');
    }

    public function brands()
    {
        return $this->hasMany(brand::class);
    }

    public function vouchers()
    {
        return $this->morphToMany(Voucher::class,'voucherables');
    }
}
