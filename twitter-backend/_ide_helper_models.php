<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Favorite
 *
 * @property-read \App\Models\Account $account
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Favorite newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Favorite newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Favorite query()
 */
	class Favorite extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Follow
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Follow newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Follow newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Follow query()
 */
	class Follow extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Follower
 *
 * @property-read \App\Models\Account $account
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Follower newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Follower newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Follower query()
 */
	class Follower extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Timeline
 *
 * @property-read \App\Models\Favorite $favorite
 * @property-read \App\Models\Favorite $originalFavorite
 * @property-read \App\Models\Tweet $tweet
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Timeline newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Timeline newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Timeline onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Timeline query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Timeline withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Timeline withoutTrashed()
 */
	class Timeline extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tweet
 *
 * @property-read \App\Models\Account $account
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tweet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tweet newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Tweet onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tweet query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Tweet withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Tweet withoutTrashed()
 */
	class Tweet extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 */
	class User extends \Eloquent {}
}

