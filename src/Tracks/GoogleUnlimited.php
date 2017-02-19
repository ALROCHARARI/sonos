<?php

namespace duncan3dc\Sonos\Tracks;

/**
 * Representation of a Google unlimited track.
 */
class GoogleUnlimited extends Track
{
    const UNIQUE = "A0DvPDnows";
    const PREFIX = "x-sonos-http:" . self::UNIQUE;
}
