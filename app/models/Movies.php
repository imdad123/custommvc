<?php 
use Illuminate\Database\Eloquent\Model as Eloquent;
class Movies extends Eloquent
{
    protected $fillable = ["moviename", "releasedate"];
}

?>