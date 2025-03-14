<?php

class StudentsList {
    private array $students = [];

    public function add(Student $student): void {
        $this->students[] = $student;
    }

    public function count(): int {
        return count($this->students);
    }

    public function get(int $n): ?Student {
        return $this->students[$n] ?? null;
    }

    public function store(string $fileName): void {
        file_put_contents($fileName, serialize($this->students));
    }

    public function load(string $fileName): void {
        if (file_exists($fileName)) {
            $this->students = unserialize(file_get_contents($fileName));
        }
    }
}

?>
