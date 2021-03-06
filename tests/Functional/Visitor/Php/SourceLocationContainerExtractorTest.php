<?php

/*
 * This file is part of the PHP Translation package.
 *
 * (c) PHP Translation team <tobias.nyholm@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Translation\Extractor\Tests\Functional\Visitor\Php;

use Translation\Extractor\Tests\Resources;
use Translation\Extractor\Visitor\Php\SourceLocationContainerVisitor;

/**
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
final class SourceLocationContainerExtractorTest extends BasePHPVisitorTest
{
    public function testExtract()
    {
        $collection = $this->getSourceLocations(new SourceLocationContainerVisitor(), Resources\Php\SourceLocationContainer::class);

        $this->assertCount(2, $collection);
        $source = $collection->first();
        $this->assertEquals('foo', $source->getMessage());
    }
}
