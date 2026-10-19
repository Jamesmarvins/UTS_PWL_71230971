<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Sale extends Model
{
    use HasFactory;
 
    protected $table = 'sales';
    protected $primaryKey = 'purchase_number';
    public $incrementing = false;
    protected $keyType = 'string';
 
    protected $fillable = [
        'purchase_number',
        'date_of_purchase',
        'customer_id',
        'item_code',
    ];
 
    protected $casts = [
        'date_of_purchase' => 'date:Y-m-d',
    ];
 
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }
 
    public function item()
    {
        return $this->belongsTo(Item::class, 'item_code', 'item_code');
    }
}