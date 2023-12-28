<?php

namespace Modules\Core\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Modules\Core\Entities\Category;
use Modules\Core\Enums\CategoryType;
use Modules\Movie\Entities\Movie;

class CategoriesDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $categories = [
            [
                'name' => 'Action',
                'short_description' => 'Action films',
                'description' => 'Action films usually include high energy, big-budget physical stunts and chases, possibly with rescues, battles, fights, escapes, destructive crises (floods, explosions, natural disasters, fires, etc.), non-stop motion, spectacular rhythm and pacing, and adventurous, often two-dimensional, "good-guy" heroes (or recently, heroines) battling "bad guys" - all designed for pure audience escapism.',
                'type' => CategoryType::genre()
            ],
            [
                'name' => 'Adventure',
                'short_description' => 'Adventure films',
                'description' => 'Adventure films are usually exciting stories, with new experiences or exotic locales, very similar to or often paired with the action film genre. They can include traditional swashbucklers or pirate films, serialized films, and historical spectacles (similar to the epics film genre), searches or expeditions for lost continents, "jungle" and "desert" epics, treasure hunts, disaster films, or searches for the unknown.',
                'type' => CategoryType::genre()
            ],
            [
                'name' => 'Comedy',
                'short_description' => 'Comedy films',
                'description' => 'Comedies are light-hearted plots consistently designed to amuse and provoke laughter (with one-liners, jokes, etc.) by exaggerating the situation, the language, action, relationships and characters. This genre of film is broad and includes many different sub-genres.',
                'type' => CategoryType::genre()
            ],
            [
                'name' => 'Drama',
                'short_description' => 'Drama Films',
                'description' => 'Drama films are serious presentations or stories with settings or life situations that portray realistic characters in conflict with either themselves, others, or forces of nature.',
                'type' => CategoryType::genre()
            ],
            [
                'name' => 'Thriller',
                'short_description' => 'Thriller Films',
                'description' => 'Thrillers are characterized and defined by the moods they elicit, giving viewers heightened feelings of suspense, excitement, surprise, anticipation and anxiety.',
                'type' => CategoryType::genre()
            ],
            [
                'name' => 'Sci-Fi',
                'short_description' => 'Science Fiction Films',
                'description' => 'Science fiction films are often speculative in nature, and may be based on incidents, ideas, or people that are plausible or possible because of some aspect of science.',
                'type' => CategoryType::genre()
            ],
            [
                'name' => 'Horror',
                'short_description' => 'Horror Films',
                'description' => 'Horror films are intended to frighten and to invoke our hidden worst fears, often in a terrifying, shocking finale, while captivating and entertaining us at the same time in a cathartic experience.',
                'type' => CategoryType::genre()
            ],
            [
                'name' => 'Romance',
                'short_description' => 'Romance Films',
                'description' => 'Romance films are romantic love stories recorded in visual media for broadcast in theaters and on cinema that focus on passion, emotion, and the affectionate romantic involvement of the main characters and the journey that their love takes through courtship or marriage.',
                'type' => CategoryType::genre()
            ],[
                'name' => 'Happy',
                'short_description' => 'Happy mood',
                'description' => 'These films are characterized by feelings of joy, pleasure, and happiness.',
                'type' => CategoryType::mood()
            ],
            [
                'name' => 'Sad',
                'short_description' => 'Sad mood',
                'description' => 'These films are characterized by feelings of sadness, sorrow, and melancholy.',
                'type' => CategoryType::mood()
            ],
            [
                'name' => 'Excited',
                'short_description' => 'Exciting mood',
                'description' => 'These films are characterized by feelings of excitement, anticipation, and thrill.',
                'type' => CategoryType::mood()
            ],
            [
                'name' => 'Bored',
                'short_description' => 'Bored mood',
                'description' => 'These films are characterized by feelings of boredom, ennui, and discontent.',
                'type' => CategoryType::mood()
            ],
            [
                'name' => 'Nervous',
                'short_description' => 'Nervous mood',
                'description' => 'These films are characterized by feelings of anxiety, stress, and tension.',
                'type' => CategoryType::mood()
            ],
            [
                'name' => 'Fearful',
                'short_description' => 'Fearful mood',
                'description' => 'These films are characterized by feelings of fear, horror, and dread.',
                'type' => CategoryType::mood()
            ],
            [
                'name' => 'Surprised',
                'short_description' => 'Surprised mood',
                'description' => 'These films are characterized by feelings of surprise, shock, and astonishment.',
                'type' => CategoryType::mood()
            ],
            [
                'name' => 'Calm',
                'short_description' => 'Calm mood',
                'description' => 'These films are characterized by feelings of peace, serenity, and tranquility.',
                'type' => CategoryType::mood()
            ],
            [
                'name' => 'Angry',
                'short_description' => 'Angry mood',
                'description' => 'These films are characterized by feelings of anger, frustration, and irritation.',
                'type' => CategoryType::mood()
            ],
            [
                'name' => 'Curious',
                'short_description' => 'Curious mood',
                'description' => 'These films are characterized by feelings of curiosity, wonder, and intrigue.',
                'type' => CategoryType::mood()
            ],
            [
                'name' => 'Happy',
                'short_description' => 'Happy mood',
                'description' => 'These films are characterized by feelings of joy, pleasure, and happiness.',
                'type' => CategoryType::mood()
            ],
            [
                'name' => 'Sad',
                'short_description' => 'Sad mood',
                'description' => 'These films are characterized by feelings of sadness, sorrow, and melancholy.',
                'type' => CategoryType::mood()
            ],
            [
                'name' => 'Excited',
                'short_description' => 'Exciting mood',
                'description' => 'These films are characterized by feelings of excitement, anticipation, and thrill.',
                'type' => CategoryType::mood()
            ],
            [
                'name' => 'Bored',
                'short_description' => 'Bored mood',
                'description' => 'These films are characterized by feelings of boredom, ennui, and discontent.',
                'type' => CategoryType::mood()
            ],
            [
                'name' => 'Nervous',
                'short_description' => 'Nervous mood',
                'description' => 'These films are characterized by feelings of anxiety, stress, and tension.',
                'type' => CategoryType::mood()
            ],
            [
                'name' => 'Fearful',
                'short_description' => 'Fearful mood',
                'description' => 'These films are characterized by feelings of fear, horror, and dread.',
                'type' => CategoryType::mood()
            ],
            [
                'name' => 'Surprised',
                'short_description' => 'Surprised mood',
                'description' => 'These films are characterized by feelings of surprise, shock, and astonishment.',
                'type' => CategoryType::mood()
            ],
            [
                'name' => 'Calm',
                'short_description' => 'Calm mood',
                'description' => 'These films are characterized by feelings of peace, serenity, and tranquility.',
                'type' => CategoryType::mood()
            ],
            [
                'name' => 'Angry',
                'short_description' => 'Angry mood',
                'description' => 'These films are characterized by feelings of anger, frustration, and irritation.',
                'type' => CategoryType::mood()
            ],
            [
                'name' => 'Curious',
                'short_description' => 'Curious mood',
                'description' => 'These films are characterized by feelings of curiosity, wonder, and intrigue.',
                'type' => CategoryType::mood()
            ],
            [
                'name' => 'Dark',
                'short_description' => 'Dark tone',
                'description' => 'These films usually have a dark or serious tone, and may involve themes of death, sorrow, or tragedy.',
                'type' => CategoryType::tone()
            ],
            [
                'name' => 'Mellow',
                'short_description' => 'Mellow tone',
                'description' => 'These films have a calm and mellow tone.',
                'type' => CategoryType::tone()
            ],
            [
                'name' => 'Intense',
                'short_description' => 'Intense tone',
                'description' => 'These films have an intense and heavy tone.',
                'type' => CategoryType::tone()
            ],
            [
                'name' => 'Light',
                'short_description' => 'Light tone',
                'description' => 'These films have a light and carefree tone.',
                'type' => CategoryType::tone()
            ],
            [
                'name' => 'Red',
                'short_description' => 'Red films',
                'description' => 'These films are dominated by the color red.',
                'type' => CategoryType::color()
            ],
            [
                'name' => 'Blue',
                'short_description' => 'Blue films',
                'description' => 'These films are dominated by the color blue.',
                'type' => CategoryType::color()
            ],
            [
                'name' => 'Green',
                'short_description' => 'Green films',
                'description' => 'These films are dominated by the color green.',
                'type' => CategoryType::color()
            ],
            [
                'name' => 'Family Relationships',
                'short_description' => 'Family relationships theme',
                'description' => 'These films focus on themes of family relationships, such as parent-child relationships, siblings, extended family, etc.',
                'type' => CategoryType::themes()
            ],
            [
                'name' => 'Friendship',
                'short_description' => 'Friendship theme',
                'description' => 'These films delve into friendships and the bonds formed between characters.',
                'type' => CategoryType::themes()
            ],
            [
                'name' => 'Personal Growth',
                'short_description' => 'Personal growth theme',
                'description' => 'These films explore themes of personal growth, self-discovery, and personal transformation.',
                'type' => CategoryType::themes()
            ],
            [
                'name' => 'War & Conflict',
                'short_description' => 'War and conflict theme',
                'description' => 'These films focus on the themes of war and conflict, from battles and strategies to the human aspect of warfare.',
                'type' => CategoryType::themes()
            ],
            [
                'name' => 'Love & Romance',
                'short_description' => 'Love and romance theme',
                'description' => 'These films center around love stories and romantic relationships, exploring the nuances of love and companionship.',
                'type' => CategoryType::themes()
            ],
            [
                'name' => 'Coming of Age',
                'short_description' => 'Coming of age theme',
                'description' => 'These films depict the journey of characters growing up or transitioning to adulthood, marking milestones and life lessons along the way.',
                'type' => CategoryType::themes()
            ],
            [
                'name' => 'Systematic Viewer',
                'short_description' => 'Recommended for systematic viewers',
                'description' => 'These films appeal to viewers who prefer a systematic approach to viewing, such as watching all films in a series or franchise, or films by a particular director or actor.',
                'type' => CategoryType::customer()
            ],
            [
                'name' => 'Chaotic Viewer',
                'short_description' => 'Recommended for chaotic viewers',
                'description' => 'These films are perfect for viewers who enjoy unpredictability in their viewing habits, such as watching films from a variety of genres, periods, and styles.',
                'type' => CategoryType::customer()
            ],
            [
                'name' => 'Self Searcher',
                'short_description' => 'Recommended for self searchers',
                'description' => 'These films would typically appeal to viewers who look for deep, thought-provoking themes, character development, and narratives that may lead to personal insight.',
                'type' => CategoryType::customer()
            ],
            [
                'name' => 'Casual Viewer',
                'short_description' => 'Recommended for casual viewers',
                'description' => 'Ideal for viewers who prefer lighthearted, easy-to-follow narratives, primarily seeking entertainment and leisure in their viewing experience.',
                'type' => CategoryType::customer()
            ],
            [
                'name' => 'Experimental Viewer',
                'short_description' => 'Recommended for experimental viewers',
                'description' => 'Perfect for viewers who aren’t afraid to try something new and often watch foreign films, independent films, and arthouse films.',
                'type' => CategoryType::customer()
            ]
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                [
                    'name' => $category['name']
                ],
                [
                    'creator_id' => 1,
                    'short_description' => $category['short_description'],
                    'description' => $category['description'],
                    'type' => $category['type']
                ]
            );
        }
    }
}
