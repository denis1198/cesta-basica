<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ModelsExistTest extends TestCase
{
    public function test_models_classes_exist(): void
    {
        $this->assertTrue(class_exists(\App\Models\AddressModel::class));
        $this->assertTrue(class_exists(\App\Models\CostumersModel::class));
        $this->assertTrue(class_exists(\App\Models\FamilyGroupModel::class));
        $this->assertTrue(class_exists(\App\Models\HabitationModel::class));
        $this->assertTrue(class_exists(\App\Models\HealthSituationModel::class));
        $this->assertTrue(class_exists(\App\Models\RedeemsModel::class));
    }
}
