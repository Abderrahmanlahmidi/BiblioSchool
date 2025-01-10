<?php

class Person {

    private int $id;
    private string $name;
    private int $age;
    private PDO $db;

    public function __construct(PDO $db, string $name = "", int $age = 0, int $id = 0) {
        $this->db = $db;
        $this->name = $name;
        $this->age = $age;
        $this->id = $id;
    }

    public function save(): void {
        if ($this->id === 0) {
            $stmt = $this->db->prepare("INSERT INTO persons (name, age) VALUES (:name, :age)");
            $stmt->execute(['name' => $this->name, 'age' => $this->age]);
            $this->id = (int) $this->db->lastInsertId();
        }
    }
    
    public static function getAll(PDO $db): array {
        $stmt = $db->query("SELECT * FROM persons");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getName(): string {
        return $this->name;
    }

    public function getAge(): int {
        return $this->age;
    }

}
