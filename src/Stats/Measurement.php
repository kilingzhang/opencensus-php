<?php
/**
 * Copyright 2018 OpenCensus Authors
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace OpenCensus\Stats;

/**
 * Base clase for Measurements.
 */
abstract class Measurement
{
    /**
     * @var float|integer the value of the measurement
     */
    private $v;

    /**
     * @var Measure the measure from which this measurement was created
     */
    private $m;

    /**
     * Extended by the various Measurement classes to hold their payload.
     * @internal
     *
     * @param Measure $measure The measure this measurement belongs to.
     * @param mixed $value The value of the measurement.
     */
    protected function __construct(Measure &$measure, $value)
    {
        $this->m = $measure;
        $this->v = $value;
    }

    /**
     * Retrieves the value of the Measurement.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->v;
    }

    /**
     * Retrieves the Measure this measurement applies to.
     *
     * @return Measure
     */
    public function getMeasure(): Measure
    {
        return $this->m;
    }
}
