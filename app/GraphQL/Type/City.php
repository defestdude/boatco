
namespace App\GraphQL\Type;

use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class City
{
    // Your resolver for the 'country' field in the City type
    public function country($city, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        // Assuming you have an Eloquent relationship between City and Country
        return $city->country; // This should automatically fetch the associated Country
    }
}