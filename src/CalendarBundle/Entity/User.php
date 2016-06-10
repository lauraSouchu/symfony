<?php

namespace CalendarBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="phonenumber", type="string", length=255, nullable=true)
     */
    private $phonenumber;

    /**
     * @ORM\OneToOne(targetEntity="CalendarBundle\Entity\Calendar", mappedBy="user")
     */
    private $calendar;
    
    /**
     * @ORM\ManyToMany(targetEntity="CalendarBundle\Entity\Calendar", mappedBy="shared")
     */
    private $calendars;

    public function __construct() {
        parent::__construct();
        // your own logic
    }

    /**
     * Set calendar
     *
     * @param \CalendarBundle\Entity\Calendar $calendar
     *
     * @return User
     */
    public function setCalendar(\CalendarBundle\Entity\Calendar $calendar = null) {
        $this->calendar = $calendar;

        return $this;
    }

    /**
     * Get calendar
     *
     * @return \CalendarBundle\Entity\Calendar
     */
    public function getCalendar() {
        return $this->calendar;
    }


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set phonenumber
     *
     * @param string $phonenumber
     *
     * @return User
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    /**
     * Get phonenumber
     *
     * @return string
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * Add calendar
     *
     * @param \CalendarBundle\Entity\Calendar $calendar
     *
     * @return User
     */
    public function addCalendar(\CalendarBundle\Entity\Calendar $calendar)
    {
        $this->calendars[] = $calendar;

        return $this;
    }

    /**
     * Remove calendar
     *
     * @param \CalendarBundle\Entity\Calendar $calendar
     */
    public function removeCalendar(\CalendarBundle\Entity\Calendar $calendar)
    {
        $this->calendars->removeElement($calendar);
    }

    /**
     * Get calendars
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCalendars()
    {
        return $this->calendars;
    }
}
