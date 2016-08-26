<?php

namespace CoffeeBike\OwasysBundle\Services;

use CoffeeBike\OwasysBundle\Entity\Tracker;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManager;


class TrackerManager
{
    protected $em;
    protected $container;

    public function __construct(EntityManager $em, Container $container)
    {
        $this->em = $em;
        $this->container = $container;

    }

    public function sendMessage(Tracker $tracker, $message)
    {
        $client = new \Mosquitto\Client();
        $client->connect($this->container->getParameter('coffee_bike_owasys.server.address'), 8883, 5);
        $client->publish('sub/'. $tracker->getImei(), $message, 1, true);
        $client->disconnect();

    }

}