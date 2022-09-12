<?php
declare(strict_types=1);

namespace NiceshopsDev\NiceAcademy\Tests\Advanced\Shop;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class ProductComparatorTest extends TestCase
{
    /**
     * @var ProductComparator|MockObject
     */
    protected $object;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->object = $this->getMockBuilder(ProductComparator::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
    }

    /**
     * @group  integration
     * @small
     */
    public function testTestClassExists(): void
    {
        $this->assertTrue(class_exists(ProductComparator::class));
        $this->assertTrue($this->object instanceof ProductComparator);
    }
}
