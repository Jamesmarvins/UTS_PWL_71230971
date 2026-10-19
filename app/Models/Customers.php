<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Customer extends Model
{
    use HasFactory;
 
    protected $primaryKey = 'customer_id';
 
    protected $fillable = [
        'first_name',
        'last_name',
        'email_address',
    ];
 
    public function sales()
    {
        return $this->hasMany(Sale::class, 'customer_id', 'customer_id');
    }
}