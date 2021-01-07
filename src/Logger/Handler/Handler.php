<?php

/*
 * PHP script for downloading videos from youtube
 * Copyright (C) 2012-2018  John Eckman
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, see <http://www.gnu.org/licenses/>.
 */

namespace YoutubeDownloader\Logger\Handler;

/**
 * Describes a handler instance
 */
interface Handler
{
    /**
     * Check if this handler handels a log level
     *
     * @param string $level A valid log level from LogLevel class
     *
     * @return bool
     */
    public function handles($level);

    /**
     * Handle an entry
     *
     * @param Entry $entry
     *
     * @return bool
     */
    public function handle(Entry $entry);
}
