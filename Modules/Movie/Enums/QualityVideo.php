<?php

namespace Modules\Movie\Enums;

use Spatie\Enum\Enum;

/**
 * @method static self SD()
 * @method static self HD()
 * @method static self FHD()
 * @method static self QHD()
 * @method static self K2()             2K quality (PSR-1)
 * @method static self K4()             4K quality (PSR-1)
 * @method static self partial_4k()     for series
 * @method static self K8()             8K quality (PSR-1)
 * @method static self partial_8k()     for series
 * @method static self VR()
 * @method static self AR()
 */
final class QualityVideo extends Enum {}
