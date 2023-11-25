<?php

namespace Tests\Unit;

use InvalidArgumentException;

// SongTest.php
use PHPUnit\Framework\TestCase;
use Practicals\Song;

class SongTest extends TestCase {
    public function testSetTempo() {
        // Arrange
        $song = new Song();

        // Act
        $song->setTempo(60);
        $result = $song->getTempo();

        // Assert
        $this->assertEquals(60, $result);
    }

    public function testSetTempoAcceptsIntegerString() {
        // Arrange
        $song = new Song();

        // Act
        $song->setTempo("60");
        $result = $song->getTempo();

        // Assert
        $this->assertEquals(60, $result);
    }

    public function testSetTempoRejectsAlphabetString() {
        // Arrange
        $this->expectException(InvalidArgumentException::class);

        // Act
        $song = new Song();
        $song->setTempo("60 BPM");
    }

    public function testSetTempoRejectsFloat() {
        // Arrange
        $this->expectException(InvalidArgumentException::class);

        // Act
        $song = new Song();
        $song->setTempo(60.5);
    }
}
?>