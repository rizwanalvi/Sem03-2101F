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
