<?php

namespace App\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use App\Entity\DateTest;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class DateTestCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DateTest::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            DateField::new('datefield')
            ->setFormTypeOptions(['widget' => 'single_text'])
            ->setSortable(true),
        ];
    }
}