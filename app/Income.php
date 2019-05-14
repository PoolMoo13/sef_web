<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'incomes';

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
