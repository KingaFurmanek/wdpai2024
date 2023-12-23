<?php

class Order {
    private $occasion;
    private $recipient;
    private $quantity;
    private $colors;
    private $deliveryDate;
    private $additionalInfo;
    private $flavours;

    public function __construct(string $occasion, string $recipient, int $quantity, array $colors, string $deliveryDate, string $additionalInfo, array $flavours) {
        $this->occasion = $occasion;
        $this->recipient = $recipient;
        $this->quantity = $quantity;
        $this->colors = $colors;
        $this->deliveryDate = $deliveryDate;
        $this->additionalInfo = $additionalInfo;
        $this->flavours = $flavours;
    }

    public function getOccasion(): string {
        return $this->occasion;
    }

    public function setOccasion(string $occasion): void {
        $this->occasion = $occasion;
    }

    public function getRecipient(): string {
        return $this->recipient;
    }

    public function setRecipient(string $recipient): void {
        $this->recipient = $recipient;
    }

    public function getQuantity(): int {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void {
        $this->quantity = $quantity;
    }

    public function getColors(): array {
        return $this->colors;
    }

    public function setColors(array $colors): void {
        $this->colors = $colors;
    }

    public function getDeliveryDate(): string {
        return $this->deliveryDate;
    }

    public function setDeliveryDate(string $deliveryDate): void {
        $this->deliveryDate = $deliveryDate;
    }

    public function getAdditionalInfo(): string {
        return $this->additionalInfo;
    }

    public function setAdditionalInfo(string $additionalInfo): void {
        $this->additionalInfo = $additionalInfo;
    }

    public function getFlavours(): array {
        return $this->flavours;
    }

    public function setFlavours(array $flavours): void {
        $this->flavours = $flavours;
    }
}