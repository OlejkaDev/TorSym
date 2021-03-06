<?php

namespace App\UserBundle\Model;

interface ProfileInterface
{
    /**
     * Get id.
     *
     * @return int
     */
    public function getId();

    /**
     * Get firstname.
     *
     * @return string
     */
    public function getFirstname();

    /**
     * Set firstname.
     *
     * @param string $firstname
     *
     * @return $this
     */
    public function setFirstname($firstname);

    /**
     * @return string
     */
    public function getLastname();

    /**
     * @param string $lastname
     *
     * @return $this
     */
    public function setLastname($lastname);

    /**
     * @return string
     */
    public function getFullName();

    /**
     * @return int
     */
    public function getPhone();

    /**
     * @param int $phone
     *
     * @return $this
     */
    public function setPhone($phone);

    /**
     * Get website.
     *
     * @return string
     */
    public function getWebsite();

    /**
     * @param string $website
     *
     * @return $this
     */
    public function setWebsite($website);

    /**
     * Get company.
     *
     * @return string
     */
    public function getCompany();

    /**
     * @param string $company
     *
     * @return $this
     */
    public function setCompany($company);

    /**
     * @return string
     */
    public function getLanguage();

    /**
     * @param string $language
     *
     * @return $this
     */
    public function setLanguage($language);
}
