namespace SnowFlakeLrvl\Snowflake;

use Illuminate\Database\Query\Grammars\Grammar;

class SnowflakeGrammar extends Grammar
{
    protected $selectComponents = [
        'aggregate', 'columns', 'from', 'joins', 'wheres', 'groups',
        'havings', 'orders', 'limit', 'offset', 'lock',
    ];
}