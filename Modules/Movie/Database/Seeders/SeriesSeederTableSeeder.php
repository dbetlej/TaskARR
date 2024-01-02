<?php

namespace Modules\Movie\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Enums\VisibilityStatus;
use Modules\Movie\Entities\Series;

class SeriesSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $seriesData = [
            [
                'creator_id' => 1,
                'name' => 'Mr. Robot',
                'url' => 'https://www.primevideo.com/-/pl/detail/Mr-Robot/0ND5POOAYD6A4THTH7C1TD3TYE',
                'short_description' => 'A show about a cybersecurity engineer and hacker, Elliot Alderson.',
                'description' => 'Mr. Robot follows Elliot Alderson, a cybersecurity engineer and hacker who suffers from social anxiety disorder and clinical depression.',
                'visibility' => VisibilityStatus::public(),
                'seasons' => 4,
            ],
            [
                'creator_id' => 1,
                'name' => 'F.R.I.E.N.D.S',
                'url' => 'https://www.netflix.com/title/70153404',
                'short_description' => 'A sitcom revolving around a group of friends in New York City.',
                'description' => 'F.R.I.E.N.D.S is a classic sitcom that follows the lives, relationships, and comedic escapades of six friends living in Manhattan.',
                'visibility' => VisibilityStatus::public(),
                'seasons' => 10,
            ],
            [
                'creator_id' => 1,
                'name' => 'Winter King',
                'url' => 'https://www.hbomax.com/series/urn:hbo:series:GY41sggKrwoN4AIAAAAGx',
                'short_description' => 'A series depicting political intrigue and power struggles in a medieval fantasy world.',
                'description' => 'Winter King is a gripping series set in a medieval fantasy world, focusing on political intrigue, power struggles, and the impending threat of an otherworldly winter.',
                'visibility' => VisibilityStatus::public(),
                'seasons' => 3,
            ],
            [
                'creator_id' => 1,
                'name' => 'Rick and Morty',
                'url' => 'https://www.hbomax.com/series/urn:hbo:series:GY3CwmA44WU7UswAAAAM_',
                'short_description' => 'An animated series about the misadventures of an eccentric and alcoholic scientist and his grandson.',
                'description' => 'Rick and Morty is an animated series that follows the misadventures of an eccentric and alcoholic scientist, Rick Sanchez, and his good-hearted but easily influenced grandson, Morty Smith.',
                'visibility' => VisibilityStatus::public(),
                'seasons' => 7,
            ],
            [
                'creator_id' => 1,
                'name' => 'Game of Thrones',
                'url' => 'https://www.hbo.com/game-of-thrones',
                'short_description' => 'A fantasy series based on the novels by George R.R. Martin.',
                'description' => 'Game of Thrones is a fantasy series set in the fictional continents of Westeros and Essos, depicting power struggles among noble families vying for control of the Iron Throne.',
                'visibility' => VisibilityStatus::public(),
                'seasons' => 8,
            ],
            [
                'creator_id' => 1,
                'name' => 'The Witcher',
                'url' => 'https://www.netflix.com/title/80189685',
                'short_description' => 'A fantasy series following a monster hunter in a world of magic.',
                'description' => 'The Witcher follows Geralt of Rivia, a monster hunter known as a Witcher, as he navigates a world filled with supernatural creatures and political strife.',
                'visibility' => VisibilityStatus::public(),
                'seasons' => 2,
            ],
            [
                'creator_id' => 1,
                'name' => 'Stranger Things',
                'url' => 'https://www.netflix.com/title/80057281',
                'short_description' => 'A thrilling series about supernatural events in a small town.',
                'description' => 'Stranger Things is a thrilling series that follows a group of kids in a small town as they encounter supernatural occurrences and government secrets.',
                'visibility' => VisibilityStatus::public(),
                'seasons' => 4,
            ],
            [
                'creator_id' => 1,
                'name' => 'Breaking Bad',
                'url' => 'https://www.netflix.com/title/70143836',
                'short_description' => 'A high-stakes drama about a chemistry teacher turned methamphetamine manufacturer.',
                'description' => 'Breaking Bad follows Walter White, a high school chemistry teacher turned methamphetamine manufacturer, as he descends into the criminal underworld.',
                'visibility' => VisibilityStatus::public(),
                'seasons' => 5,
            ],
            [
                'creator_id' => 1,
                'name' => 'The Crown',
                'url' => 'https://www.netflix.com/title/80025678',
                'short_description' => 'A historical drama depicting the reign of Queen Elizabeth II.',
                'description' => 'The Crown is a historical drama that chronicles the reign of Queen Elizabeth II, exploring the political rivalries, romance, and personal intrigues behind the great events that shaped the second half of the 20th century.',
                'visibility' => VisibilityStatus::public(),
                'seasons' => 5,
            ],
            [
                'creator_id' => 1,
                'name' => 'The Mandalorian',
                'url' => 'https://www.disneyplus.com/series/the-mandalorian/3jLIGMDYINqD',
                'short_description' => 'A Star Wars series following a bounty hunter in the outer reaches of the galaxy.',
                'description' => 'The Mandalorian follows the adventures of a lone bounty hunter in the outer reaches of the galaxy, far from the authority of the New Republic.',
                'visibility' => VisibilityStatus::public(),
                'seasons' => 2,
            ],
            [
                'creator_id' => 1,
                'name' => 'The Office',
                'url' => 'https://www.peacocktv.com/stream-tv/the-office',
                'short_description' => 'A mockumentary-style sitcom set in an office environment.',
                'description' => 'The Office is a mockumentary-style sitcom that depicts the everyday lives of office employees working at the Dunder Mifflin Paper Company.',
                'visibility' => VisibilityStatus::public(),
                'seasons' => 9,
            ],
            [
                'creator_id' => 1,
                'name' => 'Black Mirror',
                'url' => 'https://www.netflix.com/title/70264888',
                'short_description' => 'An anthology series exploring the dark side of technology.',
                'description' => 'Black Mirror is an anthology series that delves into the dark and often twisted possibilities of technology and its impact on modern society.',
                'visibility' => VisibilityStatus::public(),
                'seasons' => 5,
            ],
            [
                'creator_id' => 1,
                'name' => 'Narcos',
                'url' => 'https://www.netflix.com/title/80025172',
                'short_description' => 'A crime drama depicting the rise and fall of drug cartels.',
                'description' => 'Narcos chronicles the rise and fall of drug kingpins and the efforts of law enforcement to bring them down, focusing on the cocaine trade in Colombia.',
                'visibility' => VisibilityStatus::public(),
                'seasons' => 3,
            ],
            [
                'creator_id' => 1,
                'name' => 'Sherlock',
                'url' => 'https://www.netflix.com/title/70202589',
                'short_description' => 'A modern adaptation of Sherlock Holmes detective stories.',
                'description' => 'Sherlock is a modern adaptation of Arthur Conan Doyle\'s classic Sherlock Holmes detective stories, following the brilliant but eccentric detective and his loyal friend, Dr. John Watson.',
                'visibility' => VisibilityStatus::public(),
                'seasons' => 4,
            ],
            [
                'creator_id' => 1,
                'name' => 'The Big Bang Theory',
                'url' => 'https://www.hbomax.com/series/urn:hbo:series:GVU4Tlgffgy3BwEAADwNp',
                'short_description' => 'A sitcom centered around socially awkward physicists and their friends.',
                'description' => 'The Big Bang Theory follows a group of socially awkward physicists and their interactions with each other, exploring love, friendship, and scientific endeavors.',
                'visibility' => VisibilityStatus::public(),
                'seasons' => 12,
            ],
            [
                'creator_id' => 1,
                'name' => 'Peaky Blinders',
                'url' => 'https://www.netflix.com/title/80002479',
                'short_description' => 'A crime drama following a gangster family in post-World War I Birmingham.',
                'description' => 'Peaky Blinders is a crime drama that follows the Shelby crime family in the aftermath of World War I as they expand their criminal empire in Birmingham, England.',
                'visibility' => VisibilityStatus::public(),
                'seasons' => 6,
            ],
            [
                'creator_id' => 1,
                'name' => 'House of Cards',
                'url' => 'https://www.netflix.com/title/70178217',
                'short_description' => 'A political drama exploring the ruthless world of Washington, D.C. politics.',
                'description' => 'House of Cards delves into the ruthless world of politics, following the manipulative and ambitious politician Frank Underwood as he climbs the political ladder in Washington, D.C.',
                'visibility' => VisibilityStatus::public(),
                'seasons' => 6,
            ],
            [
                'creator_id' => 1,
                'name' => 'Better Call Saul',
                'url' => 'https://www.netflix.com/title/80021955',
                'short_description' => 'A prequel to Breaking Bad, focusing on the transformation of Jimmy McGill into Saul Goodman.',
                'description' => 'Better Call Saul is a prequel to Breaking Bad, following the transformation of Jimmy McGill, a small-time lawyer, into the morally challenged lawyer Saul Goodman.',
                'visibility' => VisibilityStatus::public(),
                'seasons' => 6,
            ],
            [
                'creator_id' => 1,
                'name' => 'Ozark',
                'url' => 'https://www.netflix.com/title/80117552',
                'short_description' => 'A crime drama about a financial planner forced to relocate his family to the Ozarks.',
                'description' => 'Ozark follows a financial planner who is forced to relocate his family to the Ozarks after a money-laundering scheme goes wrong, getting involved with local criminals and facing numerous challenges.',
                'visibility' => VisibilityStatus::public(),
                'seasons' => 4,
            ],
            [
                'creator_id' => 1,
                'name' => 'The Haunting of Hill House',
                'url' => 'https://www.netflix.com/title/80189221',
                'short_description' => 'A horror series based on the novel by Shirley Jackson.',
                'description' => 'The Haunting of Hill House is a horror series that explores the lives of siblings haunted by their paranormal experiences in their old home, Hill House.',
                'visibility' => VisibilityStatus::public(),
                'seasons' => 2,
            ],
            [
                'creator_id' => 1,
                'name' => 'Daredevil',
                'url' => 'https://www.netflix.com/title/80018294',
                'short_description' => 'A superhero series following blind lawyer Matt Murdock.',
                'description' => 'Daredevil follows Matt Murdock, a blind lawyer by day and vigilante crime-fighter by night, using his heightened senses to fight crime in Hell\'s Kitchen, New York City.',
                'visibility' => VisibilityStatus::public(),
                'seasons' => 3,
            ],
            [
                'creator_id' => 1,
                'name' => 'The Boys',
                'url' => 'https://www.amazon.com/The-Boys/dp/B07QQQ52FL',
                'short_description' => 'A dark superhero series based on the comics by Garth Ennis.',
                'description' => 'The Boys is a dark superhero series that explores a world where superheroes abuse their powers, and a group of vigilantes sets out to take them down.',
                'visibility' => VisibilityStatus::public(),
                'seasons' => 3,
            ],
            [
                'creator_id' => 1,
                'name' => 'Money Heist',
                'url' => 'https://www.netflix.com/title/80192098',
                'short_description' => 'A Spanish heist crime drama about a planned robbery.',
                'description' => 'Money Heist follows a group of robbers who plan and execute a heist on the Royal Mint of Spain, led by a criminal mastermind known as the Professor.',
                'visibility' => VisibilityStatus::public(),
                'seasons' => 5,
            ],
            [
                'creator_id' => 1,
                'name' => 'The Umbrella Academy',
                'url' => 'https://www.netflix.com/title/80186863',
                'short_description' => 'A superhero series following a dysfunctional family of adopted superheroes.',
                'description' => 'The Umbrella Academy follows a dysfunctional family of adopted superheroes as they reunite to solve the mystery of their father\'s death and prevent an impending apocalypse.',
                'visibility' => VisibilityStatus::public(),
                'seasons' => 3,
            ],
        ];

        foreach ($seriesData as $data) {
            Series::updateOrCreate(
                [
                    'name' => $data['name']
                ],
                $data
            );
        }
    }
}
