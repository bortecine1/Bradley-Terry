<?php

declare(strict_types=1);

namespace Algorithm\Rating;

/**
 * Bradley Terry modelini kullanarak derecelendirme gücünü hesaplar.
 * En: Calculate rating strength using Bradley Terry model
 *
 * @package Algorithm\Rating
 * @license MIT License
 * @copyright Selman Kocahal
 * @see     https://en.wikipedia.org/wiki/Bradley%E2%80%93Terry_model
 */
final class BradleyTerry
{
    /**
     * Tarihi performanslara (galibiyetler/mağlubiyetler) göre en güçlü takımı en zayıf takıma göre derecelendirir.
     *
     * En: Rank the strongest team to the weakest team based on historical performances (wins/losses).
     */
    public function rating(array $history, int $iterations = 20): array
    {
        $keys = \array_keys($history);
        $temp = [];

        foreach ($keys as $key) {
            $temp[$key] = 1;
        }

        $p = $temp;

        for ($i = 0; $i < $iterations; ++$i) {
            foreach ($history as $idx => $row) {
                $W = \array_sum($row);
                $d = 0;

                foreach ($history as $idx2 => $_) {
                    if ($idx === $idx2) {
                        continue;
                    }

                    $d += ($history[$idx][$idx2] + $history[$idx2][$idx]) / ($temp[$idx] + $temp[$idx2]);
                }

                $p[$idx] = $W / $d;
            }

            $sum = \array_sum($p);

            foreach ($p as $idx => $_) {
                $p[$idx] /= $sum;
            }

            $temp = $p;
        }

        return $p;
    }
}
