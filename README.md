# SEMESTER III
#  GIT VERSION CONTROLLING SYSTEM
   1.   Register Git Hub Account and Share you account link.
   2.   Push your Html Code to your account
   3.   All the Practice code should be push to you Git Hub repository.
#  JWT IMPLEMENTATION
   1. Install Laravel 9
      i. composer create-project laravel/laravel DumApp-jwt
      ii. cd DumApp-jwt
   2. Install and set up JWT
      i. composer require php-open-source-saver/jwt-auth
   3. Next, we need to make the package configurations public. Copy the JWT configuration file from the vendor to confi/jwt.php with this command:
      i. php artisan vendor:publish --provider="PHPOpenSourceSaver\JWTAuth\Providers\LaravelServiceProvider"
   4. Now, we need to generate a secret key to handle the token encryption. To do so, run this command:
      i. php artisan jwt:secret
      ii.   This will update our .env file
   5. Configure AuthGuard - Inside the config/auth.php
   'defaults' => [
        'guard' => 'api',
        'passwords' => 'users',
    ],


    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
                'driver' => 'jwt',
                'provider' => 'users',
        ],

    ],

    6.   Modify the User model
    In order to implement the PHPOpenSourceSaverJWTAuthContractsJWTSubject contract on our User model, we’ll use two methods: getJWTCustomClaims() and getJWTIdentifier().
      Replace the code in the app/Models/User.php file, with the following:
      namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

}