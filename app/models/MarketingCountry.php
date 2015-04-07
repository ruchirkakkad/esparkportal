<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class MarketingCountry extends \Eloquent {

    use SoftDeletingTrait;

	protected $fillable = [];

    protected $table = "marketing_countries";

    protected $primaryKey = "marketing_countries_id";

}