<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanEngagement extends Model
{
    protected $table ='PlanEngagements';

    public $timestamps = false;

    protected $guarded = ['id'];
}
