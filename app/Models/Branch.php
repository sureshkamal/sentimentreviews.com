<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Store;
use Illuminate\Support\Str;


class Branch extends Authenticatable
{
    use  HasFactory;

    /**
     * The primary key attribute.
     *
     * @var <int>
     */
    protected $primaryKey = 'branch_id';
    protected $keyType = 'integer';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'store_name',
    //     'store_slug',
    //     'store_admin_id',
    //     'store_admin_email'
    // ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    // // Automatically generate slug from name before saving
    // public static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($store) {
    //         $store->store_slug = Str::slug($store->name, '-');
    //     });
    // }
   
}
