namespace SnowFlakeLrvl\Snowflake;

use Illuminate\Database\Connectors\Connector;
use Illuminate\Database\Connectors\ConnectorInterface;
use PDO;

class SnowflakeConnector extends Connector implements ConnectorInterface
{
    public function connect(array $config)
    {
        $dsn = "odbc:Driver={SnowflakeDSIIDriver};Server={$config['host']};Database={$config['database']};Schema={$config['schema']};Warehouse={$config['warehouse']}";
        return new PDO($dsn, $config['username'], $config['password'], $this->getOptions($config));
    }
}