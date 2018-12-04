<?php

namespace Toiba\FullCalendarBundle\Entity;

interface EventInterface
{
    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return array
     */
    public function toArray();
}
