<?php

namespace App\UserBundle\Model;

interface UserInterface extends \Symfony\Component\Security\Core\User\UserInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @return Profile
     */
    public function getProfile();

    /**
     * @param ProfileInterface $profile
     *
     * @return $this
     */
    public function setProfile(ProfileInterface $profile);

    /**
     * @param $username
     *
     * @return $this
     */
    public function setUsername($username);

    /**
     * @param $password
     *
     * @return $this
     */
    public function setPassword($password);

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @param $email
     *
     * @return $this
     */
    public function setEmail($email);

    /**
     * @return bool
     */
    public function isEnabled();

    /**
     * @param $enabled
     *
     * @return $this
     */
    public function setEnabled($enabled);

    /**
     * @return \DateTime
     */
    public function getLastLogin();

    /**
     * @param \DateTime|null $time
     *
     * @return $this
     */
    public function setLastLogin(\DateTime $time = null);

    /**
     * @return string
     */
    public function getConfirmationToken();

    /**
     * @param string $confirmationToken
     *
     * @return $this
     */
    public function setConfirmationToken($confirmationToken);

    /**
     * @return $this
     */
    public function createConfirmationToken();

    /**
     * @return \DateTime
     */
    public function getPasswordRequestedAt();

    /**
     * @param \DateTime|null $date
     *
     * @return $this
     */
    public function setPasswordRequestedAt(\DateTime $date = null);

    /**
     * @param $ttl
     *
     * @return bool
     */
    public function isPasswordRequestNonExpired($ttl);

    /**
     * @return \DateTime
     */
    public function getCreatedAt();

    /**
     * @param \DateTime|null $time
     *
     * @return $this
     */
    public function setCreatedAt(\DateTime $time = null);

    /**
     * @return array
     */
    public function getRolesUser();

    /**
     * @param array $roles
     *
     * @return $this
     */
    public function setRoles(array $roles);

    /**
     * @param $role
     *
     * @return $this
     */
    public function addRole($role);

    /**
     * @param $role
     *
     * @return $this
     */
    public function removeRole($role);

    /**
     * @param $role
     *
     * @return bool
     */
    public function hasRole($role);

    /**
     * @return array
     */
    public function getGroupNames();

    /**
     * @param $name
     *
     * @return bool
     */
    public function hasGroup($name);

    /**
     * @param GroupInterface $group
     *
     * @return $this
     */
    public function addGroup(GroupInterface $group);

    /**
     * @param GroupInterface $group
     *
     * @return $this
     */
    public function removeGroup(GroupInterface $group);
}
