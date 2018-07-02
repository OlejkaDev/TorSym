<?php
// src/Entity/Profile.php

namespace App\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\UserBundle\Model\Profile as BaseProfile;

/**
 * User Profile Table.
 *
 * @ORM\Table(name="user_profile")
 * @ORM\Entity
 */
class Profile extends BaseProfile
{
    
}