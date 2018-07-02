<?php
// src/Entity/Group.php

namespace App\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use App\UserBundle\Model\Group as BaseGroup;

/**
 * @ORM\Table(name="user_group")
 * @ORM\Entity
 * @UniqueEntity(fields="name", message="group_already_taken")
 */
class Group extends BaseGroup
{
    
}