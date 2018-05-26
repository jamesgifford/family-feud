<?php

namespace App\Models;

use App\Helpers\HashHelper;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
    ];

    /**
     * The accessors to append to the model.
     *
     * @var array
     */
    protected $appends = ['hash_id'];

    /**
     * Attributes to hide when serializing data.
     *
     * @var array
     */
    protected $hidden = ['hash_id'];

    /**
     * Get the hashed id value.
     *
     * @param int   $id     the primary key value
     * @return string
     */
    public function getHashIdAttribute( $id )
    {
        return HashHelper::encodeKey((int)$this->id);
    }

    /**
     * Customize data serialization.
     *
     * @return array
     */
    public function toArray()
    {
        $attributes = parent::toArray();
        
        // Make sure the id attribute is always the first attribute
        return ['id' => $this->hash_id] + $attributes;
    }
}
