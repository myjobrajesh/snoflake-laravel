namespace SnowFlakeLrvl\Snowflake;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Connection;
use Illuminate\Database\Query\Builder;

class SnowflakeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('db.connector.snowflake', function() {
            return new SnowflakeConnector();
        });

        $this->app->resolving('db', function ($db) {
            $db->extend('snowflake', function ($config, $name) {
                $connector = $this->app->make('db.connector.snowflake');
                $pdo = $connector->connect($config);
                return new Connection($pdo, $config['database'], $config['prefix'], $config);
            });
        });
    }
}