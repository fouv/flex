<?php
namespace App\Entity;
use DateTime;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

class Job
{
    private $id;
    private $category; // instance de Category
    private $type;
    private $company;
    private $logo;
    private $url;
    private $position;
    private $location;
    private $description;
    private $howToApply;
    private $token;
    private $isPublic;
    private $isActivated;
    private $email;
    private $expiresAt;
    private $createdAt;
    private $updatedAt;

    public function setCreatedAtValue(LifecycleEventArgs $event)
    {
        $this->createdAt = new DateTime();
    }

    public function setUpdatedAtValue(LifecycleEventArgs $event)
    {
        $this->updatedAt = new DateTime();
    }
}
