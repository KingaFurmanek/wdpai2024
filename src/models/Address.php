<?php

class Address {
    private $country;
    private $postcode;
    private $city;
    private $street;
    private $number;

    public function __construct(string $country, string $postcode, string $city, string $street, int $number) {
        $this->country = $country;
        $this->postcode = $postcode;
        $this->city = $city;
        $this->street = $street;
        $this->number = $number;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    public function getPostCode(): string
    {
        return $this->postcode;
    }

    public function setPostCode(string $postcode): void
    {
        $this->postcode = $postcode;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function setNumber(int $number): void
    {
        $this->number = $number;
    }

}