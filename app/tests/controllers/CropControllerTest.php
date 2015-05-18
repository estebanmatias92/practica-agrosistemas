<?php

class CropControllerTest extends TestCase
{
    public function testIndexHasCrops()
    {
        Crop::shouldReceive('all')
            ->once()
            ->andReturn($this->collection);

        $this->call('GET', '/');

        $this->assertViewHas('crops', $this->collection);
    }
    
}