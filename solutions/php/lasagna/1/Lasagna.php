<?php

class Lasagna
{
    private const EXPECTED_COOK_TIME = 40;

    public function expectedCookTime()
    {
        return self::EXPECTED_COOK_TIME;
    }

    public function remainingCookTime($elapsed_minutes)
    {
        return self::EXPECTED_COOK_TIME - $elapsed_minutes;
    }

    public function totalPreparationTime($layers_to_prep)
    {
        define("LAYER_PREP_TIME", 2);

        return $layers_to_prep * LAYER_PREP_TIME;
    }

    public function totalElapsedTime($layers_to_prep, $elapsed_minutes)
    {
        return $elapsed_minutes + $this->totalPreparationTime($layers_to_prep);
    }

    public function alarm()
    {
        return 'Ding!';
    }
}
