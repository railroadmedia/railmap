<?php

namespace Railroad\Railmap\Entity\Links;

abstract class LinkBase
{
    public $linkedEntityClass; // Ex. App\Entities\User\User
    public $localEntityPropertyToSet; // Ex. user

    /**
     * @var callable
     */
    public $queryCustomizeCallback; // Ex. function (QueryBuilder $query) { // stuff, return query }
}