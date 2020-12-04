<?php

use PHPUnit\Framework\TestCase;
include '../main/RevertFunction.php';

class RevertFunctionTest extends TestCase
{
    public function testRevertCharacters()
    {
        $expected = 'iH! tI si tset-esac.';
        $actual = RevertFunction::revertCharacters("Hi! It is test-case.");
        $this->assertEquals($expected, $actual);
    }
}