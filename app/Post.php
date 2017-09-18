<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'text'];

	/**
	 * @var array
	 */
	protected $appends = ['teaser', 'datetime'];

	/**
	 * A post belongs to a user
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo( User::class );
	}


	/**
	 * A post can have many tags
	 */
	public function tags()
	{
		return $this->belongsToMany( Tag::class  );
	}


    public function getRouteKeyName()
    {
        return 'slug';
    }
    
	/**
	 * Create slug from title before storing to DB
	 *
	 * @param $value
	 */
	public function setTitleAttribute($value)
	{
	 	$this->attributes['title'] = $value;
	 	
	 	$this->attributes['slug']  = str_slug($value);
	}


	/**
	 * @return bool|string
	 */
	public function getDatetimeAttribute()
	{
		return date('Y-m-d', strtotime($this->created_at));
	}

	/**
	 * @return string
	 */
	public function getTeaserAttribute()
	{
		return word_limiter( $this->text, 60 );
	}


	/**
	 * @return mixed|string
	 */
	public function getRichTextAttribute()
	{
		return add_paragraphs( filter_url( e($this->text) ) );
	}
}
