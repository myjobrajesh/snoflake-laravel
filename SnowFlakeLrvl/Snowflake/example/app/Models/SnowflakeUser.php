namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SnowflakeUser extends Model
{
    protected $connection = 'snowflake';
    protected $table = 'users';
    protected $fillable = ['name', 'email'];
    public $timestamps = false;
}
