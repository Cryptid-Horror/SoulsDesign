<?php

namespace App\Models\User;

use App\Models\Model;

class Wishlist extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_wishlists';

    /**********************************************************************************************

        RELATIONS

    **********************************************************************************************/

    /**
     * Get the user this set of settings belongs to.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User\User', 'user_id');
    }

    /**
     * Get this wishlist's items.
     */
    public function items()
    {
        return $this->hasMany('App\Models\User\WishlistItem');
    }

    /**********************************************************************************************

        ACCESSORS

    **********************************************************************************************/

    /**
     * Gets the URL for the wishlist.
     *
     * @return string
     */
    public function getUrlAttribute()
    {
        return $this->user->url.'/wishlists/'.$this->id;
    }

    /**
     * Displays the wishlist's name as a formatted link.
     *
     * @return string
     */
    public function getDisplayNameAttribute()
    {
        return '<a href="'.$this->url.'">'.$this->name.'</a>';
    }

    /**********************************************************************************************

        OTHER FUNCTIONS

    **********************************************************************************************/

    /**
     * Displays the count of an item in a wishlist.
     *
     * @param int                   $id
     * @param \App\Models\User\User $user
     *
     * @return int
     */
    public function itemCount($id, $user)
    {
        if (!$this->id) {
            $wishlist = 0;
        } else {
            $wishlist = $this->id;
        }

        $item = WishlistItem::where('item_id', $id)->where('wishlist_id', $wishlist);
        if (!$wishlist) {
            $item = $item->where('user_id', $user->id);
        }
        $item = $item->first();

        if ($item) {
            return $item->count;
        }

        return null;
    }
}
