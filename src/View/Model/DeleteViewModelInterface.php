<?php

namespace Sebaks\Crud\View\Model;

use Zend\View\Model\ModelInterface;
use T4webDomainInterface\EntityInterface;

interface DeleteViewModelInterface extends ModelInterface
{
    /**
     * @return EntityInterface
     */
    public function getEntity();

    /**
     * @param EntityInterface $entity
     */
    public function setEntity(EntityInterface $entity);

    /**
     * @return array
     */
    public function getErrors();

    /**
     * @param array $errors
     */
    public function setErrors(array $errors);
}
