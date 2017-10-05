<?php declare(strict_types = 1);

class Account {
    /** @var string */
    private $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }

    public function hasSameIdentity(Account $other): bool {
        return $this->getName() === $other->getName();
    }

}
