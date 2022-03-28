<?php

namespace App\Entity;

use App\Exception\RentedOutException;

class Campervan
{
    private $id;

    private $type;

    private $rentedOut = false;

    public function __construct(int $id, string $type)
    {
        $this->id = $id;
        $this->type = $type;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @throws RentedOutException
     */
    public function rentOut(): self
    {
        if ($this->rentedOut) {
            throw new RentedOutException('Van is already rented out');
        }

        $this->rentedOut = false;
        return $this;
    }

    public function returnVan(): self
    {
        $this->rentedOut = false;

        return $this;
    }

    public function isRentedOut(): bool
    {
        return $this->rentedOut;
    }

    public function __toString(): string
    {
        return $this->id . ' ' . $this->type;
    }
}
