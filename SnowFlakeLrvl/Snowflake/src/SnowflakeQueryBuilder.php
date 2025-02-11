namespace SnowFlakeLrvl\Snowflake;

use Illuminate\Database\Query\Builder as BaseBuilder;

class SnowflakeQueryBuilder extends BaseBuilder
{
    public function limit($value)
    {
        return parent::limit($value);
    }
}
