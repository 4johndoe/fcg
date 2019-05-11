<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image)
            ? $this->image
            : 'profile/b1SuL3Rg89LJ077bMsKKF2jLgE3v52N2lLbXP14H.png';

        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
