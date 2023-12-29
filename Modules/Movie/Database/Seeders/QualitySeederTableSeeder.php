<?php

namespace Modules\Movie\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Movie\Entities\Quality;
use Modules\Movie\Enums\QualityAudio;
use Modules\Movie\Enums\QualityVideo;

class QualitySeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videoQualities = QualityVideo::toArray();
        $audioQualities = QualityAudio::toArray();
        $id = 1;

        foreach ($videoQualities as $video) {
            foreach ($audioQualities as $audio) {
                $qualityDataWithoutHDR = [
                    'id' => $id,
                    'creator_id' => 1,
                    'hdr' => false,
                    'quality_video' => $video,
                    'quality_audio' => $audio,
                ];

                $qualityDataWithHDR = [
                    'id' => $id + 1,
                    'creator_id' => 1,
                    'hdr' => true,
                    'quality_video' => $video,
                    'quality_audio' => $audio,
                ];

                Quality::updateOrCreate(['id' => $id], $qualityDataWithoutHDR);
                Quality::updateOrCreate(['id' => $id + 1], $qualityDataWithHDR);

                $id += 2;
            }
        }
    }
}
