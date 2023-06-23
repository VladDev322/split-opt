<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory;
  protected $fillable = ['name', 'code', 'price', 'category_id', 'description', 'image', 'invertor', 'wifi', 'silent'];

  public function category()
  {
    return $this->belongsTo(Category::class);
  }

  public function getPriceForCount()
  {
    if (!is_null($this->pivot)) {
      return $this->pivot->count * $this->price;
    }
    return $this->price;
  }

  public function scopeInvertor($query)
  {
    return $query->where('invertor', 1);
  }

  public function scopeWifi($query)
  {
    return $query->where('wifi', 1);
  }

  public function scopeSilent($query)
  {
    return $query->where('silent', 1);
  }

  public function setInvertorAttribute($value)
  {
    $this->attributes['invertor'] = $value === 'on' ? 1 : 0;
  }

  public function setWifiAttribute($value)
  {
    $this->attributes['wifi'] = $value === 'on' ? 1 : 0;
  }

  public function setSilentAttribute($value)
  {
    $this->attributes['silent'] = $value === 'on' ? 1 : 0;
  }

  public function isInvertor() //hit
  {
    return $this->invertor === 1;
  }

  public function isWiFi() //new
  {
    return $this->wifi === 1;
  }

  public function isSilent() //recommend
  {
    return $this->silent === 1;
  }
}