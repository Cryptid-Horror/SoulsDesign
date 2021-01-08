<?php

namespace App\Models\Character;

use Config;
use DB;
use App\Models\Model;
use App\Models\Feature\FeatureCategory;
use App\Models\Character\CharacterCategory;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Services\EmbedService;

class CharacterImage extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'character_id', 'user_id', 'species_id', 'subtype_id', 'rarity_id', 'url',
        'extension', 'use_custom_thumb', 'hash', 'sort', 
        'x0', 'x1', 'y0', 'y1',
        'description', 'parsed_description',
        'is_valid', 'ext_url', 'genotype', 'phenotype', 'free_markings', 'adornments'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'character_images';

    /**
     * Whether the model contains timestamps to be saved and updated.
     *
     * @var string
     */
    public $timestamps = true;
    
    /**
     * Validation rules for image creation.
     *
     * @var array
     */
    public static $createRules = [
        'species_id' => 'required',
        'rarity_id' => 'required',
        'image' => 'required_without:ext_url|nullable|mimes:jpeg,gif,png|max:20000',
        'thumbnail' => 'nullable|mimes:jpeg,gif,png|max:20000',
        'ext_url' => 'required_without:image|nullable|url|max:20000',
    ];
    
    /**
     * Validation rules for image updating.
     *
     * @var array
     */
    public static $updateRules = [
        'character_id' => 'required',
        'user_id' => 'required',
        'species_id' => 'required',
        'rarity_id' => 'required',
        'description' => 'nullable',
    ];
    
    /**********************************************************************************************
    
        RELATIONS

    **********************************************************************************************/
    
    /**
     * Get the character associated with the image.
     */
    public function character() 
    {
        return $this->belongsTo('App\Models\Character\Character', 'character_id');
    }
    
    /**
     * Get the user who owned the character at the time of image creation.
     */
    public function user() 
    {
        return $this->belongsTo('App\Models\User\User', 'user_id');
    }
    
    /**
     * Get the species of the character image.
     */
    public function species() 
    {
        return $this->belongsTo('App\Models\Species\Species', 'species_id');
    }
    
    /**
     * Get the subtype of the character image.
     */
    public function subtype() 
    {
        return $this->belongsTo('App\Models\Species\Subtype', 'subtype_id');
    }
    
    /**
     * Get the rarity of the character image.
     */
    public function rarity() 
    {
        return $this->belongsTo('App\Models\Rarity', 'rarity_id');
    }

    /**
     * Get the features (traits) attached to the character image, ordered by display order.
     */
    public function features() 
    {
        $ids = FeatureCategory::orderBy('sort', 'DESC')->pluck('id')->toArray();

        $query = $this->hasMany('App\Models\Character\CharacterFeature', 'character_image_id')->where('character_features.character_type', 'Character')->join('features', 'features.id', '=', 'character_features.feature_id')->select(['character_features.*', 'features.*', 'character_features.id AS character_feature_id']);

        return count($ids) ? $query->orderByRaw(DB::raw('FIELD(features.feature_category_id, '.implode(',', $ids).')')) : $query;
    }
    
    /**
     * Get the designers/artists attached to the character image.
     */
    public function creators() 
    {
        return $this->hasMany('App\Models\Character\CharacterImageCreator', 'character_image_id');
    }
    
    /**
     * Get the designers attached to the character image.
     */
    public function designers() 
    {
        return $this->hasMany('App\Models\Character\CharacterImageCreator', 'character_image_id')->where('type', 'Designer')->where('character_type', 'Character');
    }
    
    /**
     * Get the artists attached to the character image.
     */
    public function artists() 
    {
        return $this->hasMany('App\Models\Character\CharacterImageCreator', 'character_image_id')->where('type', 'Artist')->where('character_type', 'Character');
    }

    /**********************************************************************************************
    
        SCOPES

    **********************************************************************************************/

    /**
     * Scope a query to only include images visible to guests and regular logged-in users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeImages($query, $user = null)
    {
        if(!$user || !$user->hasPower('manage_characters')) return $query->where('is_visible', 1)->orderBy('sort')->orderBy('id', 'DESC');
        else return $query->orderBy('sort')->orderBy('id', 'DESC');
    }

    /**********************************************************************************************
    
        ACCESSORS

    **********************************************************************************************/

    /**
     * Gets the file directory containing the model's image.
     *
     * @return string
     */
    public function getImageDirectoryAttribute()
    {
        return 'images/characters/'.floor($this->id / 1000);
    }

    /**
     * Gets the file name of the model's image.
     *
     * @return string
     */
    public function getImageFileNameAttribute()
    {
        return $this->id . '_'.$this->hash.'.'.$this->extension;
    }

    /**
     * Gets the path to the file directory containing the model's image.
     *
     * @return string
     */
    public function getImagePathAttribute()
    {
        return public_path($this->imageDirectory);
    }
    
    /**
     * Gets the URL of the model's image.
     *
     * @return string
     */
    public function getImageUrlAttribute()
    {
        if(!isset($this->ext_url)) { return asset($this->imageDirectory . '/' . $this->imageFileName); }
        else
        {
            $service = new EmbedService();
            $content = $service->getEmbed($this->ext_url);
            if(isset($content[0]['url'])) return $content[0]['url'];
            else if($content[1] != null) return $content[1];
            else return '#';
        }
    }

    /**
     * Gets the file name of the model's thumbnail image.
     *
     * @return string
     */
    public function getThumbnailFileNameAttribute()
    {
        return $this->id . '_'.$this->hash.'_th.'.$this->extension;
    }

    /**
     * Gets the path to the file directory containing the model's thumbnail image.
     *
     * @return string
     */
    public function getThumbnailPathAttribute()
    {
        return $this->imagePath;
    }
    
    /**
     * Gets the URL of the model's thumbnail image.
     *
     * @return string
     */
    public function getThumbnailUrlAttribute()
    {
        if($this->use_custom_thumb || !isset($this->ext_url)) { return asset($this->imageDirectory . '/' . $this->thumbnailFileName); }
        else
        {
            $service = new EmbedService();
            $content = $service->getEmbed($this->ext_url);
            if(isset($content[0]['thumbnail_url'])) return $content[0]['thumbnail_url'];
            else if($content[1] != null) return $content[1];
            else return '#';
        }
    }

    /**
     * Gets the display string for designers.
     *
     * @return string
     */
    public function getDisplayDesignersAttribute()
    {
        $designers = [];
        foreach($this->designers as $designer) {
            $designers[] = $designer->displayLink();
        }
        if(!count($designers)) $designers[] = 'N/A';
        return implode(', ', $designers);
    }

    /**
     * Gets the display string for artists.
     *
     * @return string
     */
    public function getDisplayArtistsAttribute()
    {
        $artists = [];
        foreach($this->artists as $artist) {
            $artists[] = $artist->displayLink();
        }
        if(!count($artists)) $artists[] = 'N/A';
        return implode(', ', $artists);
    }
}
