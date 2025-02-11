
This package is for example purpose only.



// Run composer dump-autoload
docker run --rm -v $(pwd):/app composer dump-autoload

// Example Laravel Model using Snowflake
touch app/Models/SnowflakeUser.php

// API Route for Fetching Users from Snowflake
// routes/api.php
use App\Models\SnowflakeUser;
use Illuminate\Support\Facades\Route;

Route::get('/snowflake/users', function () {
    return response()->json(SnowflakeUser::all());
});



