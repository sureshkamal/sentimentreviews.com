<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
// use App\Models\Store;
use Illuminate\Support\Str;


class Nps extends Authenticatable
{
    use  HasFactory;

    protected $table = 'nps_questions';

    /**
     * The primary key attribute.
     *
     * @var <int>
     */
    protected $primaryKey = 'questionnaire_id';
    protected $keyType = 'integer';

    
   
}
