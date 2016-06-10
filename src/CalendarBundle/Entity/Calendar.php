<?php

namespace CalendarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calendar
 *
 * @ORM\Table(name="calendar")
 * @ORM\Entity(repositoryClass="CalendarBundle\Repository\CalendarRepository")
 */
class Calendar {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;

    /**
     * @ORM\OneToMany(targetEntity="CalendarBundle\Entity\Event", mappedBy="calendar")
     * 
     */
    private $events;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=255, nullable=true)
     */
    private $theme;

    /**
     * @ORM\OneToOne(targetEntity="CalendarBundle\Entity\User", inversedBy="calendar")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    
    /**
     * @ORM\ManyToMany(targetEntity="CalendarBundle\Entity\User", inversedBy="calendars")
     */
    private $shared;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Calendar
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Calendar
     */
    public function setDateCreation($dateCreation) {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->events = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dateCreation = new \DateTime();
    }

    /**
     * Add events
     *
     * @param \CalendarBundle\Entity\Event $events
     * @return Calendar
     */
    public function addEvent(\CalendarBundle\Entity\Event $events) {
        $this->events[] = $events;

        return $this;
    }

    /**
     * Remove events
     *
     * @param \CalendarBundle\Entity\Event $events
     */
    public function removeEvent(\CalendarBundle\Entity\Event $events) {
        $this->events->removeElement($events);
    }

    /**
     * Get events
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvents() {
        return $this->events;
    }

    /**
     * Set theme
     *
     * @param string $theme
     * @return Calendar
     */
    public function setTheme($theme) {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return string 
     */
    public function getTheme() {
        return $this->theme;
    }

    /**
     * Set user
     *
     * @param \CalendarBundle\Entity\User $user
     *
     * @return Calendar
     */
    public function setUser(\CalendarBundle\Entity\User $user = null) {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \CalendarBundle\Entity\User
     */
    public function getUser() {
        return $this->user;
    }


    /**
     * Add shared
     *
     * @param \CalendarBundle\Entity\User $shared
     *
     * @return Calendar
     */
    public function addShared(\CalendarBundle\Entity\User $shared)
    {
        $this->shared[] = $shared;

        return $this;
    }

    /**
     * Remove shared
     *
     * @param \CalendarBundle\Entity\User $shared
     */
    public function removeShared(\CalendarBundle\Entity\User $shared)
    {
        $this->shared->removeElement($shared);
    }

    /**
     * Get shared
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getShared()
    {
        return $this->shared;
    }
}
