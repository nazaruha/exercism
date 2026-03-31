<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        /*
            // This my own custom solution 
            $sum = 0;
            $num1;
            $num2;
    
            foreach($digitsOfNumber1 as $num) {
                $num1 .= (string) $num;
            }
    
            foreach($digitsOfNumber2 as $num) {
                $num2 .= (string) $num;
            }
    
            $sum = (int) $num1 + (int) $num2;
    
            return $sum;
        */

        // After revealing the hint (haven't never heard about `implode` method)
        return (int)implode($digitsOfNumber1) + (int)implode($digitsOfNumber2);
    }

    public function isPalindrome(int $number): bool
    {
        // I could to make it using cycles but I knew there is some simple implemented method,
        // So I just revealed the hint to not wasting the time for searching the `strrev` method
        $numberStr = (string) $number;
        $reversedNumber = strrev($numberStr);

        return $numberStr == $reversedNumber;
    }

    public function validate(string $input): string
    {
        // remove all whitespaces before validations just in case
        $trimmedInput = mb_trim($input);
        
        // if $input is empty - return 'Required field' string
        if (empty($trimmedInput) && $trimmedInput == '')
            return 'Required field';

        // if number isn't whole & positive - return 'Must be a whole number larger than 0'
        if ((int)$trimmedInput <= 0)
            return 'Must be a whole number larger than 0';
        
        // if none of the validations above is true - return an empty string
        return '';
    }
}
