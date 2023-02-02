<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Performance extends Model
{
    use CrudTrait;
    use HasFactory;


    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'performance';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    //protected $fillable = ['venue_id','name_of_performance', 'performance_date'];
    //,'name_of_performance', 'performance_date', 'image', ];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public static function boot()
    {
        //when someone is deleting an article we are also deleting its image
        parent::boot();
        static::deleting(function($obj) {
            Storage::delete(Str::replaceFirst('storage/','public/', $obj->image));
        });
    }

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        // destination path relative to the disk above
        $destination_path = "performance";

        // if the image was erased
        if ($value==null) {
            // delete the image from disk
            Storage::delete(Str::replaceFirst('storage/','public/',$this->{$attribute_name}));

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        $disk = "public";
        // filename is generated -  md5($file->getClientOriginalName().random_int(1, 9999).time()).'.'.$file->getClientOriginalExtension()
        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);
        $this->attributes[$attribute_name] = 'storage/' . $this->attributes[$attribute_name];

    }


    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function venue()
    {
        return $this->belongsToMany(Venue::class, 'performance_venue','performance_id', 'venue_id');
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
