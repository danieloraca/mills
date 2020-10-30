<?php
declare(strict_types=1);

namespace App\Http\Factory;

class MillsFactory
{
    private const COATING_DAMAGE = 'Coating Damage';
    private const LIGHTNING_STRIKE = 'Lightning Strike';

    public function buildMills(): array
    {
        $mills = [];
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 === 0 && $i % 5 === 0) {
                $mills[] = sprintf(
                    '%s and %s',
                    self::COATING_DAMAGE,
                    self::LIGHTNING_STRIKE
                );
                continue;
            }

            if ($i % 3 === 0) {
                $mills[] = self::COATING_DAMAGE;
                continue;
            }

            if ($i % 5 === 0) {
                $mills[] = self::LIGHTNING_STRIKE;
                continue;
            }

            $mills[] = $i;
        }

        return $mills;
    }
}
