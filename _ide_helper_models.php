<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Call
 *
 * @property int $id
 * @property string $call_no
 * @property string|null $is_waiting
 * @property string|null $responded_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Employee $employee
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Call newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Call newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Call query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Call whereCallNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Call whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Call whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Call whereIsWaiting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Call whereRespondedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Call whereUpdatedAt($value)
 */
	class Call extends \Eloquent {}
}

namespace App{
/**
 * App\Employee
 *
 * @property int $id
 * @property string $type
 * @property int|null $call_id
 * @property int $priority
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Call|null $call
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee whereCallId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee whereUpdatedAt($value)
 */
	class Employee extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

