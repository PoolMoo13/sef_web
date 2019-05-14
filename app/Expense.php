<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'expenses';

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
    protected $fillable = ['name', 'amount', 'area_id', 'user_id'];

    public function area()
    {
        return $this->belongsTo('App\Area');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
