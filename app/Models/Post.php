<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Lukeraymonddowning\SelfHealingUrls\Concerns\HasSelfHealingUrls;

class Post extends Model
{
    use HasFactory, HasUlids, HasSelfHealingUrls;
    protected $slug = "title";
    protected $fillable = ["title", "content", "slug"];
}
