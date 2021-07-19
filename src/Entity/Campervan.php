<?php

namespace App\Entity;

use App\Exception\RentedOutException;

class Campervan
{
    private $id;

    private $type;

    private $isRentedOut = false;

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
        if ($this->isRentedOut) {
            throw new RentedOutException('Van is already rented out');
        }

        $this->isRentedOut = false;
        return $this;
    }

    public function returnVan(): self
    {
        $this->isRentedOut = false;

        return $this;
    }

    public function isRentedOut(): bool
    {
        return $this->isRentedOut;
    }

    public function __toString(): string
    {
        return $this->id . ' ' . $this->type;
    }
}
