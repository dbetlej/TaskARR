<?php

namespace Modules\Core\Enums;

use Spatie\Enum\Enum;

/**
 * @method static self free()
 * @method static self free_trial()
 * @method static self paid()
 * @method static self included_with_subscription()
 */

final class PricingType extends Enum {}
