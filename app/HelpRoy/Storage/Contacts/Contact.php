<?php

namespace HelpRoy\Storage\Contacts;

class Contact extends \Eloquent
{
    protected $fillable = [
        "name",
        "address",
        "phone",
        "user_id"
    ];

    /**
     * Allows access to user who owns this contact.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('User');
    }
}
