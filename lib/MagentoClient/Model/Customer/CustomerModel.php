<?php

namespace MagentoClient\Model\Customer;

class CustomerModel
{
    /**
     * @var integer
     */
    private $entity_id;

    /**
     * @var integer
     */
    private $website_id;

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $group_id;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var boolean
     */
    private $disable_auto_group_change;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $created_in;

    /**
     * @var string
     */
    private $prefix;

    /**
     * @var string
     */
    private $suffix;

    /**
     * @var string
     */
    private $taxvat;

    /**
     * @var \DateTime
     */
    private $dob;

    /**
     * @var boolean
     */
    private $reward_update_notification;

    /**
     * @var boolean
     */
    private $reward_warning_notification;

    /**
     * @var boolean
     */
    private $gender;

    /**
     * @return int
     */
    public function getEntityId()
    {
        return $this->entity_id;
    }

    /**
     * @param int $entity_id
     * @return CustomerModel
     */
    public function setEntityId($entity_id)
    {
        $this->entity_id = $entity_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getWebsiteId()
    {
        return $this->website_id;
    }

    /**
     * @param int $website_id
     * @return CustomerModel
     */
    public function setWebsiteId($website_id)
    {
        $this->website_id = $website_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return CustomerModel
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return int
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * @param int $group_id
     * @return CustomerModel
     */
    public function setGroupId($group_id)
    {
        $this->group_id = $group_id;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param \DateTime $created_at
     * @return CustomerModel
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDisableAutoGroupChange()
    {
        return $this->disable_auto_group_change;
    }

    /**
     * @param bool $disable_auto_group_change
     * @return CustomerModel
     */
    public function setDisableAutoGroupChange($disable_auto_group_change)
    {
        $this->disable_auto_group_change = $disable_auto_group_change;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return CustomerModel
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return CustomerModel
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedIn()
    {
        return $this->created_in;
    }

    /**
     * @param string $created_in
     * @return CustomerModel
     */
    public function setCreatedIn($created_in)
    {
        $this->created_in = $created_in;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * @param string $prefix
     * @return CustomerModel
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * @param string $suffix
     * @return CustomerModel
     */
    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxvat()
    {
        return $this->taxvat;
    }

    /**
     * @param string $taxvat
     * @return CustomerModel
     */
    public function setTaxvat($taxvat)
    {
        $this->taxvat = $taxvat;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param \DateTime $dob
     * @return CustomerModel
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRewardUpdateNotification()
    {
        return $this->reward_update_notification;
    }

    /**
     * @param bool $reward_update_notification
     * @return CustomerModel
     */
    public function setRewardUpdateNotification($reward_update_notification)
    {
        $this->reward_update_notification = $reward_update_notification;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRewardWarningNotification()
    {
        return $this->reward_warning_notification;
    }

    /**
     * @param bool $reward_warning_notification
     * @return CustomerModel
     */
    public function setRewardWarningNotification($reward_warning_notification)
    {
        $this->reward_warning_notification = $reward_warning_notification;
        return $this;
    }

    /**
     * @return bool
     */
    public function isGender()
    {
        return $this->gender;
    }

    /**
     * @param bool $gender
     * @return CustomerModel
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }
}