<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\User;
use Illuminate\Support\Str;


class Store extends Authenticatable
{
    use  HasFactory;

    /**
     * The primary key attribute.
     *
     * @var <int>
     */
    protected $primaryKey = 'store_id';
    protected $keyType = 'integer';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'store_name',
        'store_slug',
        'store_admin_id',
        'store_admin_email'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function branches()
    {
        return $this->hasMany(Branch::class);
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
