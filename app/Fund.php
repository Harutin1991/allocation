<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    protected $table = 'fund';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'allocation_fund_template_id', 'percentage', 'amount'
    ];

    public function resolveChildRouteBinding($childType, $value, $field)
    {
        // TODO: Implement resolveChildRouteBinding() method.
    }
    
    public function allocationFundTemplate()
    {
        return $this->hasOne('App\AllocationFundTemplate', 'id','allocation_fund_template_id');
    }
}
