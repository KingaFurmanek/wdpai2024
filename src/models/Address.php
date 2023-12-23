<?php

class Address {
    private $street;
    private $postalCode;
    private $city;
    private $buildingNumber;

    public function __construct(string $street, string $postalCode, string $city, string $buildingNumber) {
        $this->street = $street;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->buildingNumber = $buildingNumber;
    }

    public function getStreet(): string {
        return $this->street;
    }

    public function setStreet(string $street): void {
        $this->street = $street;
    }

    public function getPostalCode(): string {
        return $this->postalCode;
    }

    public function setPostalCode(string $postalCode): void {
        $this->postalCode = $postalCode;
    }

    public function getCity(): string {
        return $this->city;
    }

    public function setCity(string $city): void {
        $this->city = $city;
    }

    public function getBuildingNumber(): string {
        return $this->buildingNumber;
    }

    public function setBuildingNumber(string $buildingNumber): void {
        $this->buildingNumber = $buildingNumber;
    }
}