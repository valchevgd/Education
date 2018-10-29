<?php

class Song
{
    /**
     * @var string
     */
    private $artist;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $length;

    /**
     * Song constructor.
     * @param string $artist
     * @param string $name
     * @param string $length
     * @throws InvalidArtistNameException
     * @throws InvalidSongNameException
     * @throws InvalidSongSecondsException
     * @throws InvalidSongMinutesException
     */
    public function __construct(string $artist, string $name, string $length)
    {
        $this->setArtist($artist);
        $this->setName($name);
        $this->setLength($length);
    }

    /**
     * Length calculator.
     * @param string $length
     * @throws InvalidSongMinutesException
     * @throws InvalidSongSecondsException
     * @return int
     */
    private static function calculateLength(string $length): int
    {
        $tokens = explode(':', $length);

        $minutes = intval($tokens[0]);
        $seconds = intval($tokens[1]);

        if ($minutes < 0 or $minutes > 14){
            throw new InvalidSongMinutesException('Song minutes should be between 0 and 14.');
        }

        if ($seconds < 0 or $seconds > 59){
            throw new InvalidSongSecondsException('Song seconds should be between 0 and 59.');
        }

        $result = $minutes * 60 + $seconds;

        return $result;
    }

    /**
     * @return string
     */
    private function getArtist(): string
    {
        return $this->artist;
    }

    /**
     * @param string $artist
     * @throws InvalidArtistNameException
     */
    private function setArtist(string $artist): void
    {
        if (strlen($artist) < 3 or strlen($artist) > 20){
            throw new InvalidArtistNameException('Artist name should be between 3 and 20 symbols.');
        }
        $this->artist = $artist;
    }

    /**
     * @return string
     */
    private function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @throws InvalidSongNameException
     */
    private function setName(string $name): void
    {
        if (strlen($name) < 3 or strlen($name) > 30){
            throw new InvalidSongNameException('Song name should be between 3 and 30 symbols.');
        }
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @param string $length
     * @throws InvalidSongSecondsException
     * @throws InvalidSongMinutesException
     */
    private function setLength(string $length): void
    {
        $this->length = $this::calculateLength($length);
    }


}