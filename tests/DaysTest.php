<?php

namespace Gtmassey\Days\Tests;

use Gtmassey\Days\Days;
use PHPUnit\Framework\TestCase;

class DaysTest extends TestCase
{
    public function testClassConstants(): void
    {
        $this->assertEquals('Monday', Days::MONDAY);
        $this->assertEquals('Tuesday', Days::TUESDAY);
        $this->assertEquals('Wednesday', Days::WEDNESDAY);
        $this->assertEquals('Thursday', Days::THURSDAY);
        $this->assertEquals('Friday', Days::FRIDAY);
        $this->assertEquals('Saturday', Days::SATURDAY);
        $this->assertEquals('Sunday', Days::SUNDAY);
    }

    public function testConstructor(): void
    {
        $days = new Days('Monday');
        $this->assertEquals('Monday', $days->day);
        $this->assertEquals('Monday', $days->toString());

        $days = new Days('Tuesday');
        $this->assertEquals('Tuesday', $days->day);
        $this->assertEquals('Tuesday', $days->toString());

        $days = new Days('Wednesday');
        $this->assertEquals('Wednesday', $days->day);
        $this->assertEquals('Wednesday', $days->toString());

        $days = new Days('Thursday');
        $this->assertEquals('Thursday', $days->day);
        $this->assertEquals('Thursday', $days->toString());

        $days = new Days('Friday');
        $this->assertEquals('Friday', $days->day);
        $this->assertEquals('Friday', $days->toString());

        $days = new Days('Saturday');
        $this->assertEquals('Saturday', $days->day);
        $this->assertEquals('Saturday', $days->toString());

        $days = new Days('Sunday');
        $this->assertEquals('Sunday', $days->day);
        $this->assertEquals('Sunday', $days->toString());
    }

    public function testMakeConstructor(): void
    {
        $days = Days::make('Monday');
        $this->assertEquals('Monday', $days->day);
        $this->assertEquals('Monday', $days->toString());

        $days = Days::make('Tuesday');
        $this->assertEquals('Tuesday', $days->day);
        $this->assertEquals('Tuesday', $days->toString());

        $days = Days::make('Wednesday');
        $this->assertEquals('Wednesday', $days->day);
        $this->assertEquals('Wednesday', $days->toString());

        $days = Days::make('Thursday');
        $this->assertEquals('Thursday', $days->day);
        $this->assertEquals('Thursday', $days->toString());

        $days = Days::make('Friday');
        $this->assertEquals('Friday', $days->day);
        $this->assertEquals('Friday', $days->toString());

        $days = Days::make('Saturday');
        $this->assertEquals('Saturday', $days->day);
        $this->assertEquals('Saturday', $days->toString());

        $days = Days::make('Sunday');
        $this->assertEquals('Sunday', $days->day);
        $this->assertEquals('Sunday', $days->toString());
    }

    public function testStaticMethods(): void
    {
        $this->assertEquals('Monday', Days::MONDAY()->day);
        $this->assertEquals('Tuesday', Days::TUESDAY()->day);
        $this->assertEquals('Wednesday', Days::WEDNESDAY()->day);
        $this->assertEquals('Thursday', Days::THURSDAY()->day);
        $this->assertEquals('Friday', Days::FRIDAY()->day);
        $this->assertEquals('Saturday', Days::SATURDAY()->day);
        $this->assertEquals('Sunday', Days::SUNDAY()->day);
    }

    public function testAsShortName(): void
    {
        $days = new Days('Monday');
        $this->assertEquals('Mon', $days->asShortName());

        $days = new Days('Tuesday');
        $this->assertEquals('Tue', $days->asShortName());

        $days = new Days('Wednesday');
        $this->assertEquals('Wed', $days->asShortName());

        $days = new Days('Thursday');
        $this->assertEquals('Thu', $days->asShortName());

        $days = new Days('Friday');
        $this->assertEquals('Fri', $days->asShortName());

        $days = new Days('Saturday');
        $this->assertEquals('Sat', $days->asShortName());

        $days = new Days('Sunday');
        $this->assertEquals('Sun', $days->asShortName());
    }

    public function testasCharacterCode(): void
    {
        $days = new Days('Monday');
        $this->assertEquals('M', $days->asCharacterCode());

        $days = new Days('Tuesday');
        $this->assertEquals('T', $days->asCharacterCode());

        $days = new Days('Wednesday');
        $this->assertEquals('W', $days->asCharacterCode());

        $days = new Days('Thursday');
        $this->assertEquals('R', $days->asCharacterCode());

        $days = new Days('Friday');
        $this->assertEquals('F', $days->asCharacterCode());

        $days = new Days('Saturday');
        $this->assertEquals('S', $days->asCharacterCode());

        $days = new Days('Sunday');
        $this->assertEquals('U', $days->asCharacterCode());
    }
}
