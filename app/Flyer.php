<?php

/**  Need more docs **/



namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
    /**
     * Fillable fields for a flyer
     * @var array
     */
    protected $fillable = [
        'street',
        'city',
        'state',
        'country',
        'postcode',
        'price',
        'description'
    ];

    public static function locatedAt($postcode, $street) {
        $postcode = str_replace("-"," ",$postcode);
        $street = str_replace("-"," ",$street);

        return static::where(compact('postcode', 'street'))->firstOrFail();
    }

    /**
     * @param Photo $photo
     * @return Model
     */
    public function addPhoto(Photo $photo) {
        return $this->photos()->save($photo);
    }

    public function getPriceAttribute($price) {
        return '&pound;'.number_format($price);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos() {
        return $this->hasMany('App\Photo');
    }

    /**
     * A flyer is owned by a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner() {
        return $this->belongsTo('App\User', 'user_id');
    }

    /**
     * Determine if the given user created the flyer
     * 
     * @param User $user
     * @return bool
     */
    public function ownedBy(User $user) {
        return $this->user_id == $user->id;
    }
}
