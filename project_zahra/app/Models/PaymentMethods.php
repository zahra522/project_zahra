<php
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentMethod extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'payment_methods';

    protected $fillable = [
        'code',
        'name',
        'icon',
        'type',
        'status',
        'default_fee',
        'default_percentage_fee',
        'default_cost',
        'default_percentage_cost',
    ];

    protected $casts = [
        'default_percentage_fee' => 'decimal:2',
        'default_percentage_cost' => 'decimal:2',
    ];
}
