<?php

namespace Modules\Movie\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Modules\Core\Entities\Category;
use Modules\Core\Entities\Price;
use Modules\Movie\Entities\Vod;

class VodSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $vods = [
            [
                'id' => 1,
                'creator_id' => 1,
                'position' => 1,
                'name' => 'Netflix',
                'url' => 'https://www.netflix.com/',
                'short_description' => 'Stream TV shows and movies online',
                'description' => 'Netflix is a streaming service that offers a wide variety of TV shows, movies, anime, documentaries, and more on thousands of internet-connected devices.',
                'favorite' => true,
                'prices' => [
                    ['name' => 'Basic Plan', 'price' => 8.99],
                    ['name' => 'Standard Plan', 'price' => 13.99],
                    ['name' => 'Premium Plan', 'price' => 17.99],
                ],
                'bought' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'creator_id' => 1,
                'position' => 2,
                'name' => 'Disney+',
                'url' => 'https://www.disneyplus.com/',
                'short_description' => 'Disney, Pixar, Marvel, Star Wars, and National Geographic.',
                'description' => 'Disney+ is the home for your favorite movies and TV shows from Disney, Pixar, Marvel, Star Wars, and National Geographic.',
                'favorite' => true,
                'prices' => [
                    ['name' => 'Essential', 'price' => 7.99],
                    ['name' => 'Plus', 'price' => 13.99],
                ],
                'bought' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'creator_id' => 1,
                'position' => 3,
                'name' => 'Prime Video',
                'url' => 'https://www.amazon.com/Amazon-Video/',
                'short_description' => 'Watch TV shows and movies including award-winning Amazon Originals.',
                'description' => 'Prime Video offers thousands of movies and TV episodes, including popular licensed and self-published content plus critically acclaimed Amazon Originals.',
                'favorite' => true,
                'prices' => [
                    ['name' => 'Prime Monthly', 'price' => 12.99],
                    ['name' => 'Prime Annual', 'price' => 119.00],
                    ['name' => 'Rent', 'price' => 0],
                    ['name' => 'Purchase', 'price' => 0],
                ],
                'bought' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'creator_id' => 1,
                'position' => 4,
                'name' => 'SkyShowTime',
                'url' => 'https://www.sky.com/watch/showtime',
                'short_description' => 'Enjoy exclusive TV shows and more with SkyShowTime.',
                'description' => 'SkyShowTime offers a selection of exclusive TV shows, movies, and more with a range of subscription options.',
                'favorite' => true,
                'prices' => [
                    ['name' => 'Entertainment Package', 'price' => 10.99],
                    ['name' => 'Cinema Package', 'price' => 14.99],
                ],
                'bought' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'creator_id' => 1,
                'position' => 5,
                'name' => 'HBO Max',
                'url' => 'https://www.hbomax.com/',
                'short_description' => 'Stream all your favorite HBO shows and movies.',
                'description' => 'HBO Max provides access to a vast library of HBO original series, exclusive content, blockbuster movies, and more.',
                'favorite' => true,
                'prices' => [
                    ['name' => 'Ad-Supported Plan', 'price' => 9.99],
                    ['name' => 'Ad-Free Plan', 'price' => 14.99],
                ],
                'bought' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'creator_id' => 1,
                'position' => 6,
                'name' => 'Rakuten TV',
                'url' => 'https://www.rakuten.tv/',
                'short_description' => 'Watch movies and TV shows on Rakuten TV.',
                'description' => 'Rakuten TV offers a wide range of movies and TV shows for rent or purchase, including the latest releases and classic favorites.',
                'favorite' => true,
                'prices' => [
                    ['name' => 'Gold Subscription', 'price' => 9.99],
                    ['name' => 'Platinum Subscription', 'price' => 14.99],
                    ['name' => 'Purchase', 'price' => 0],
                    ['name' => 'Rent', 'price' => 0],
                ],
                'bought' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'creator_id' => 1,
                'position' => 7,
                'name' => 'Cineman',
                'url' => 'https://www.cineman.com/',
                'short_description' => 'Discover a variety of movies and showtimes on Cineman.',
                'description' => 'Cineman offers a comprehensive database of movies, showtimes, and cinema information, making it easy to find and book tickets for your favorite films.',
                'favorite' => true,
                'prices' => [
                    ['name' => 'Basic Plan', 'price' => 7.99],
                    ['name' => 'Premium Plan', 'price' => 11.99],
                ],
                'bought' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'creator_id' => 1,
                'position' => 8,
                'name' => 'Polsat Box Go',
                'url' => 'https://www.polsatboxgo.pl/',
                'short_description' => 'Access Polsat TV shows and movies on Polsat Box Go.',
                'description' => 'Polsat Box Go provides access to Polsat TV channels, live broadcasts, and a collection of on-demand movies and TV shows.',
                'favorite' => true,
                'prices' => [
                    ['name' => 'Monthly Package', 'price' => 15.99],
                    ['name' => 'Annual Package', 'price' => 149.99],
                ],
                'bought' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'creator_id' => 1,
                'position' => 9,
                'name' => 'iTunes',
                'url' => 'https://www.apple.com/itunes/',
                'short_description' => 'Buy and rent movies and TV shows on iTunes.',
                'description' => 'iTunes offers a wide selection of movies and TV shows for purchase or rental, including exclusive content and the latest releases.',
                'favorite' => true,
                'prices' => [
                    ['name' => 'Rent', 'price' => 0],
                    ['name' => 'Purchase', 'price' => 0],
                ],
                'bought' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 10,
                'creator_id' => 1,
                'position' => 10,
                'name' => 'Player',
                'url' => 'https://www.player.pl/',
                'short_description' => 'Watch TV shows, movies, and more on Player.',
                'description' => 'Player offers a diverse range of TV shows, movies, and original productions, available for streaming and on-demand viewing.',
                'favorite' => true,
                'prices' => [
                    ['name' => 'Standard Streaming', 'price' => 9.99],
                    ['name' => 'Premium Streaming', 'price' => 14.99],
                ],
                'bought' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 11,
                'creator_id' => 1,
                'position' => 11,
                'name' => 'VodPl',
                'url' => 'https://www.vod.pl/',
                'short_description' => 'Explore a wide range of movies and series on VodPl.',
                'description' => 'VodPl offers an extensive catalog of movies and series, catering to various genres and preferences for on-demand streaming.',
                'favorite' => true,
                'prices' => [
                    ['name' => 'Standard', 'price' => 8.99],
                    ['name' => 'Premium', 'price' => 12.99],
                ],
                'bought' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 12,
                'creator_id' => 1,
                'position' => 12,
                'name' => 'TVP Vod',
                'url' => 'https://vod.tvp.pl/',
                'short_description' => 'Watch TVP series, shows, and more on TVP Vod.',
                'description' => 'TVP Vod provides access to a wide array of series, shows, and programs broadcasted by TVP, available for on-demand streaming.',
                'favorite' => true,
                'prices' => [
                    ['name' => 'Basic Access', 'price' => 6.99],
                    ['name' => 'Premium Access', 'price' => 10.99],
                ],
                'bought' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 13,
                'creator_id' => 1,
                'position' => 13,
                'name' => 'Apple TV',
                'url' => 'https://www.apple.com/apple-tv/',
                'short_description' => 'Access exclusive Apple Originals on Apple TV.',
                'description' => 'Apple TV offers exclusive Apple Originals, movies, and series, including acclaimed content available for streaming and download.',
                'favorite' => true,
                'prices' => [
                    ['name' => 'Monthly Subscription', 'price' => 4.99],
                ],
                'bought' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 14,
                'creator_id' => 1,
                'position' => 14,
                'name' => 'PlayNow',
                'url' => 'https://www.playnow.com/',
                'short_description' => 'Stream a diverse selection of movies and TV shows on PlayNow.',
                'description' => 'PlayNow offers a diverse library of movies and TV shows for streaming, catering to different tastes and preferences.',
                'favorite' => true,
                'prices' => [
                    ['name' => 'All Access Pass', 'price' => 11.99],
                    ['name' => 'Limited Pass', 'price' => 7.99],
                    ['name' => 'Rent', 'price' => 0]
                ],
                'bought' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 15,
                'creator_id' => 1,
                'position' => 15,
                'name' => 'Canal Plus',
                'url' => 'https://www.canalplus.com/',
                'short_description' => 'Discover exclusive Canal Plus content.',
                'description' => 'Canal Plus offers exclusive content, including movies, series, sports, and documentaries, available for streaming and on-demand viewing.',
                'favorite' => true,
                'prices' => [
                    ['name' => 'Standard Package', 'price' => 19.99],
                    ['name' => 'Premium Package', 'price' => 29.99],
                ],
                'bought' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 16,
                'creator_id' => 1,
                'position' => 16,
                'name' => 'Cda Premium',
                'url' => 'https://premium.cda.pl/',
                'short_description' => 'Access premium movies and series on Cda Premium.',
                'description' => 'Cda Premium offers access to a collection of premium movies and series, including exclusive content available for streaming.',
                'favorite' => true,
                'prices' => [
                    ['name' => 'Premium Subscription', 'price' => 10.99],
                    ['name' => 'Basic Subscription', 'price' => 7.99],
                ],
                'bought' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($vods as $vod) {
            $prices = Arr::get($vod, 'prices', []);
            unset($vod['prices']);

            $vodModel = Vod::updateOrCreate(
                ['id' => $vod['id']],
                $vod
            );

            foreach ($prices as $price) {
                $priceModel = Price::updateOrCreate(
                    ['name' => $price['name']], // Assuming 'name' is the unique identifier for prices
                    $price
                );

                $vodModel->prices()->syncWithoutDetaching([$priceModel->id]);
            }
        }

    }
}
