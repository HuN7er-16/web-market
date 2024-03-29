<?php

namespace App\Models\Notify;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SMS extends Model
{

    protected $table = 'public_sms';

    use HasFactory;

    protected $fillable = ['title', 'body', 'status', 'published_at'];
}
