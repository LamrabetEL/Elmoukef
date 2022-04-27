<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

/**
 * Class Review
 *
 */
class PlatformReview extends Model
{
     /**
     * Fillables for the database
     *
     * @access protected
     *
     * @var array $fillable
     */
    protected $fillable = array(
        'rating', 'review', 'categorie_id', 'review_date', 'user_id'
    );

    /**
     * Get user.
     *
     * @return polymorphic relation
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get category.
     *
     * @return polymorphic relation
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    
}
