<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Controllers\Traits\FilterByUser;

/**
 * Class Property
 *
 * @package App
 * @property string $transaction
 * @property string $type
 * @property string $cep
 * @property string $state
 * @property string $city
 * @property string $neighborhood
 * @property string $address
 * @property string $number
 * @property string $complement
 * @property string $rooms
 * @property string $suites
 * @property string $parking_slots
 * @property string $bathrooms
 * @property string $size
 * @property string $land_size
 * @property string $description
 * @property string $price
*/
class Property extends Model
{
    use SoftDeletes, FilterByUser;

    protected $fillable = ['transaction', 'type', 'cep', 'state', 'city', 'neighborhood', 'address', 'number', 'complement', 'rooms', 'suites', 'parking_slots', 'bathrooms', 'size', 'land_size', 'description', 'price'];
    
    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
    
    
}
