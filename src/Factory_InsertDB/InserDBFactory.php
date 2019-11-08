<?php
namespace App\Factory_InsertDB;
use App\Form\ProductType;

class InserDBFactory extends Creator
{
    public $entity;
    protected function factoryMethod(Model $Entity)
    {
        // TODO: Implement factoryMethod() method.
         $this->entity = $Entity;
        $form = $this->createForm(ProductType::class, $this->entity);
    }

}