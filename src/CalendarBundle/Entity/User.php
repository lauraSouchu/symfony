<?php

namespace CalendarBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

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
     * @ORM\Column(name="genre", type="string", length=255, nullable=true)
     */
    private $genre;
    
    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=500, nullable=true)
     */
    private $commentaire;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="age", type="integer", nullable=true)
     */
    private $age;

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
    
    /**
     * @ORM\OneToMany(targetEntity="FormBundle\Entity\Adresse", mappedBy="user")
     */
    private $listadresses;

    
    public function __construct() {
        parent::__construct();
        //$this->listadresses = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set genre
     *
     * @param string $genre
     *
     * @return User
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return User
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
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
     * Set calendar
     *
     * @param \CalendarBundle\Entity\Calendar $calendar
     *
     * @return User
     */
    public function setCalendar(\CalendarBundle\Entity\Calendar $calendar = null)
    {
        $this->calendar = $calendar;

        return $this;
    }

    /**
     * Get calendar
     *
     * @return \CalendarBundle\Entity\Calendar
     */
    public function getCalendar()
    {
        return $this->calendar;
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

    /**
     * Add adress
     *
     * @param \FormBundle\Entity\Adresse $adress
     *
     * @return User
     */
    public function addListadresses(\FormBundle\Entity\Adresse $adress)
    {
        $this->listadresses[] = $adress;

        return $this;
    }

    /**
     * Remove adress
     *
     * @param \FormBundle\Entity\Adresse $adress
     */
    public function removeListadresses(\FormBundle\Entity\Adresse $adress)
    {
        $this->listadresses->removeElement($adress);
    }

    /**
     * Get adresses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListadresses()
    {
        return $this->listadresses;
    }

    /**
     * Add listadress
     *
     * @param \FormBundle\Entity\Adresse $listadress
     *
     * @return User
     */
    public function addListadress(\FormBundle\Entity\Adresse $listadress)
    {
        $this->listadresses[] = $listadress;

        return $this;
    }

    /**
     * Remove listadress
     *
     * @param \FormBundle\Entity\Adresse $listadress
     */
    public function removeListadress(\FormBundle\Entity\Adresse $listadress)
    {
        $this->listadresses->removeElement($listadress);
    }
}
