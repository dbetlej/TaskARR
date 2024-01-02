<?php

namespace Modules\Movie\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Entities\Category;
use Modules\Core\Enums\PricingType;
use Modules\Core\Enums\VisibilityStatus;
use Modules\Movie\Entities\Movie;

class MovieSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $creatorId = 1;

        $genreAction = 1;
        $genreDrama = 4;

        $movies = [
            // Mr. Robot Season 1
            ['name' => 'S01E01 eps1.0_hellofriend.mov', 'length' => '00:50:00', 'short_description' => 'Cybersecurity engineer meets a mysterious figure and gets involved in a hack.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S01E02 eps1.1_ones-and-zer0es.mpeg', 'length' => '00:45:00', 'short_description' => 'An investigation uncovers a secretive group of hackers.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S01E03 eps1.2_d3bug.mkv', 'length' => '00:48:00', 'short_description' => 'Investigation amidst personal struggles and a new enemy.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S01E04 eps1.3_da3m0ns.mp4', 'length' => '00:47:00', 'short_description' => 'Inner turmoil intensifies amidst mounting challenges.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S01E05 eps1.4_3xpl0its.wmv', 'length' => '00:52:00', 'short_description' => 'Navigating a dangerous game with high stakes.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S01E06 eps1.5_br4ve-trave1er.asf', 'length' => '00:49:00', 'short_description' => 'Risking everything for a cause on a mission.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S01E07 eps1.6_v1ew-s0urce.flv', 'length' => '00:46:00', 'short_description' => 'Facing unexpected challenges and revelations.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S01E08 eps1.7_wh1ter0se.m4v', 'length' => '00:51:00', 'short_description' => 'Encountering a powerful adversary in pursuit of truth.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S01E09 eps1.8_m1rr0r1ng.qt', 'length' => '00:50:00', 'short_description' => 'Reality blurs while confronting past and present.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S01E10 eps1.9_zer0-day.avi', 'length' => '00:55:00', 'short_description' => 'Race against time to prevent a catastrophic event.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],

            // Mr. Robot Season 2
            ['name' => 'S02E01 eps2.0_unm4sk-pt1.tc', 'length' => '00:45:00', 'short_description' => 'The fallout from the hack continues as secrets unravel.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S02E02 eps2.0_unm4sk-pt2.tc', 'length' => '00:50:00', 'short_description' => 'Consequences deepen, revealing new layers of the conspiracy.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S02E03 eps2.1_k3rnel-pan1c.ksd', 'length' => '00:48:00', 'short_description' => 'Navigating through chaos, an unexpected threat emerges.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S02E04 eps2.2_init1.asec', 'length' => '00:47:00', 'short_description' => 'A new beginning brings unforeseen challenges and opportunities.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S02E05 eps2.3_logic-b0mb.hc', 'length' => '00:52:00', 'short_description' => 'A dangerous game of intellect and strategy ensues.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S02E06 eps2.4_m4ster-s1ave.aes', 'length' => '00:49:00', 'short_description' => 'Exploring the intricate web of alliances and betrayals.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S02E07 eps2.5_h4ndshake.sme', 'length' => '00:46:00', 'short_description' => 'An unexpected agreement presents both risk and reward.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S02E08 eps2.6_succ3ss0r.p12', 'length' => '00:51:00', 'short_description' => 'Stepping into new roles brings unforeseen consequences.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S02E09 eps2.7_init5.fve', 'length' => '00:50:00', 'short_description' => 'Setting the stage for a collision course with destiny.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S02E10 eps2.8_h1dden-pr0cess.axx', 'length' => '00:55:00', 'short_description' => 'Unraveling mysteries leads to unexpected revelations.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S02E11 eps2.9_pyth0n-pt1.p7z', 'length' => '00:52:00', 'short_description' => 'A journey into the unknown begins with surprising discoveries.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S02E12 eps2.9_pyth0n-pt2.p7z', 'length' => '00:53:00', 'short_description' => 'The culmination of events brings unforeseen consequences.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],

            // Mr. Robot Season 3
            ['name' => 'S03E01 eps3.0_power-saver-mode.h', 'length' => '00:47:00', 'short_description' => 'Exploring new modes while facing challenges.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S03E02 eps3.1_undo.gz', 'length' => '00:48:00', 'short_description' => 'Reversing past decisions brings unforeseen consequences.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S03E03 eps3.2_legacy.so', 'length' => '00:46:00', 'short_description' => 'Dealing with the legacy of previous 1s.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S03E04 eps3.3_metadata.par2', 'length' => '00:45:00', 'short_description' => 'Navigating through metadata leads to new revelations.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S03E05 eps3.4_runtime-err0r.r00', 'length' => '00:50:00', 'short_description' => 'Facing critical errors with high stakes.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S03E06 eps3.5_kill-pr0cess.inc', 'length' => '00:49:00', 'short_description' => 'Attempting to terminate a crucial process.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S03E07 eps3.6_fredrick+tanya.chk', 'length' => '00:48:00', 'short_description' => 'Challenges involving named individuals lead to discoveries.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S03E08 eps3.7_dont-delete-me.ko', 'length' => '00:47:00', 'short_description' => 'Urgent reasons to refrain from deletion arise.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S03E09 eps3.8_stage3.torrent', 'length' => '00:51:00', 'short_description' => 'Advancing to the next stage amidst torrential challenges.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S03E10 shutdown -r', 'length' => '00:52:00', 'short_description' => 'A 4tic shutdown triggers unexpected events.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],

            // Mr. Robot Season 4
            ['name' => 'S04E03 403 Forbidden', 'length' => '00:48:00', 'short_description' => 'Confronting forbidden territories with dire consequences.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S04E04 404 Not Found', 'length' => '00:47:00', 'short_description' => 'Search for answers amidst missing pieces and confusion.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S04E05 405 Method Not Allowed', 'length' => '00:52:00', 'short_description' => 'Navigating obstacles with limited choices available.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S04E06 406 Not Acceptable', 'length' => '00:49:00', 'short_description' => 'Dealing with unacceptable situations and their repercussions.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S04E07 407 Proxy Authentication Required', 'length' => '00:46:00', 'short_description' => 'Authentication challenges lead to unexpected alliances.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S04E08 408 Request Timeout', 'length' => '00:51:00', 'short_description' => 'Urgency to act amidst time running out.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S04E09 409 Conflict', 'length' => '00:50:00', 'short_description' => 'Confronting conflicts with no easy resolutions.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S04E10 410 Gone', 'length' => '00:55:00', 'short_description' => 'Dealing with the aftermath of irreversible decisions.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S04E11 eXit', 'length' => '00:52:00', 'short_description' => 'A journey towards an unexpected exit point.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S04E12 whoami', 'length' => '00:53:00', 'short_description' => 'Identity crisis amidst evolving circumstances.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],
            ['name' => 'S04E13 Hello, Elliot', 'length' => '00:48:00', 'short_description' => 'An unexpected encounter with surprising consequences.', 'qualityId' => 30, 'seriesId' => 1, 'vodId' => 1, 'categories' => [$genreDrama, $genreAction]],

            // Transformers
            ['name' => 'Transformers 1', 'length' => '02:23:00', 'short_description' => 'Alien robots bring their battle to Earth with humanity caught in the middle.', 'qualityId' => 86, 'seriesId' => null, 'vodId' => 2, 'categories' => [$genreDrama, $genreAction]],
        ];

        foreach ($movies as $movie) {
            $qualityId = $movie['qualityId'];
            $seriesId = $movie['seriesId'];
            $vodId = $movie['vodId'];

            $movieModel = Movie::updateOrCreate(
                [
                    'name' => $movie['name']
                ],
                [
                    'creator_id' => $creatorId,
                    'quality_id' => $qualityId,
                    'series_id' => $seriesId,
                    'vod_id' => $vodId,
                    'short_description' => $movie['short_description'],
                    'visibility' => VisibilityStatus::public(),
                    'length' => $movie['length']
                ]
            );

            $categories = $movie['categories'] ?? [];
            $this->attachCategories($movieModel, $categories);
        }
    }

    private function attachCategories($movie, $categories): void
    {
        foreach ($categories as $categoryId) {
            $movie->categories()->sync($categoryId);
        }
    }
}
