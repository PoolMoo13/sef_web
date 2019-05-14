<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'areas';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'current_amount', 'amount', 'user_id', 'active'];

    public function expenses()
    {
        return $this->hasMany('App\Expense');
    }
    public function incomes()
    {
        return $this->hasMany('App\Income');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
