<?php

namespace Gtmassey\Days;

class Days
{
    public const MONDAY = 'Monday';

    public const TUESDAY = 'Tuesday';

    public const WEDNESDAY = 'Wednesday';

    public const THURSDAY = 'Thursday';

    public const FRIDAY = 'Friday';

    public const SATURDAY = 'Saturday';

    public const SUNDAY = 'Sunday';

    public string $day;

    /**
     * @param  string|null  $value
     */
    public function __construct(?string $value)
    {
        //if the value is null, set it to an empty string
        $value = $value ?? '';
        $this->day = $value;
    }

    /**
     * @param  string  $value
     * @return self
     */
    public static function make(string $value): self
    {
        return new self($value);
    }

    /**
     * @return string[]
     */
    public static function inWeek(): array
    {
        return [
            self::MONDAY,
            self::TUESDAY,
            self::WEDNESDAY,
            self::THURSDAY,
            self::FRIDAY,
            self::SATURDAY,
            self::SUNDAY,
        ];
    }

    /**
     * @return string[]
     */
    public static function asCharacterCodes(): array
    {
        return [
            'M',
            'T',
            'W',
            'R',
            'F',
            'S',
            'U',
        ];
    }

    /**
     * @return string[]
     */
    public static function asShortNames(): array
    {
        return [
            'Mon',
            'Tue',
            'Wed',
            'Thu',
            'Fri',
            'Sat',
            'Sun',
        ];
    }

    public static function MONDAY(): self
    {
        return new self(self::MONDAY);
    }

    public static function TUESDAY(): self
    {
        return new self(self::TUESDAY);
    }

    public static function WEDNESDAY(): self
    {
        return new self(self::WEDNESDAY);
    }

    public static function THURSDAY(): self
    {
        return new self(self::THURSDAY);
    }

    public static function FRIDAY(): self
    {
        return new self(self::FRIDAY);
    }

    public static function SATURDAY(): self
    {
        return new self(self::SATURDAY);
    }

    public static function SUNDAY(): self
    {
        return new self(self::SUNDAY);
    }

    public function asShortName(): string
    {
        return match ($this->day) {
            'Monday' => 'Mon',
            'Tuesday' => 'Tue',
            'Wednesday' => 'Wed',
            'Thursday' => 'Thu',
            'Friday' => 'Fri',
            'Saturday' => 'Sat',
            'Sunday' => 'Sun',
            default => '',
        };
    }

    public function asCharacterCode(): string
    {
        return match ($this->day) {
            'Monday' => 'M',
            'Tuesday' => 'T',
            'Wednesday' => 'W',
            'Thursday' => 'R',
            'Friday' => 'F',
            'Saturday' => 'S',
            'Sunday' => 'U',
            default => '',
        };
    }

    public function __toString(): string
    {
        return $this->day;
    }

    public function toString(): string
    {
        return $this->day;
    }

    public function asFullName(): string
    {
        return $this->day;
    }

    public function equals(Days $other): bool
    {
        return $this->day === $other->day;
    }

    public function isWeekend(): bool
    {
        return in_array($this->day, [self::SATURDAY, self::SUNDAY]);
    }

    public function isWeekday(): bool
    {
        return ! $this->isWeekend();
    }
}
