<?php
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Category
{
    private $id;
    private $name;
    private $jobs; // tableau d'objet Job
    private $affiliates; // tableau d'objet Affiliate

    public function __construct()
    {
        $this->jobs = new ArrayCollection();
        $this->affiliates = new ArrayCollection();
    }
}
