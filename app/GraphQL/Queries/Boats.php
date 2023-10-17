<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

final readonly class Boats
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        
        $query = \App\Models\Boat::query();


        if(isset($args['filter']['category'])) {
            $query->where('category', $args['filter']['category']);
        }

        if(isset($args['filter']['condition'])) {
            $query->where('condition', $args['filter']['condition']);
        }

        if(isset($args['filter']['model_year'])) {
            if(isset($args['filter']['model_year']['min'])) {
                $query->where('model_year', '>=', $args['filter']['model_year']['min']);
            }
            if(isset($args['filter']['model_year']['max'])) {
                $query->where('model_year', '<=', $args['filter']['model_year']['max']);
            }
        }

        if(isset($args['filter']['price_range'])) {
            if(isset($args['filter']['price_range']['min'])) {
                $query->where('price', '>=', $args['filter']['price_range']['min']);
            }
            if(isset($args['filter']['price_range']['max'])) {
                $query->where('price', '<=', $args['filter']['price_range']['max']);
            }
        }

        if(isset($args['filter']['length_range'])) {
            if(isset($args['filter']['length_range']['min'])) {
                $query->where('length', '>=', $args['filter']['length_range']['min']);
            }
            if(isset($args['filter']['length_range']['max'])) {
                $query->where('length', '<=', $args['filter']['length_range']['max']);
            }
        }

        if(isset($args['filter']['width_range'])) {
            if(isset($args['filter']['width_range']['min'])) {
                $query->where('length', '>=', $args['filter']['length_range']['min']);
            }
            if(isset($args['filter']['width_range']['max'])) {
                $query->where('width', '<=', $args['filter']['width_range']['max']);
            }
        }

        if(isset($args['filter']['country_name'])) {
            $countryName = $args['filter']['country_name'];
            // Use Eloquent to filter by country name
            $query->whereHas('city.country', function ($query) use ($countryName) {
                $query->where('country', $countryName);
            });
        }

        return $query->get();
    }
}
