<?php

class Database
{
    private SQLite3 $db;

    /**
     * @return SQLite3
     */
    public function __construct(string $filename)
    {
        return $this->db = new SQLite3($filename);
    }

    public function charlie(): void
    {
        $query = "CREATE TABLE IF NOT EXISTS task
                    (   
                        id INTEGER NOT NULL,
                        done BOOLEAN NOT NULL,
                        name VARCHAR(255) NOT NULL, 
                        PRIMARY KEY ('id' AUTOINCREMENT)
                     );";
        $this->exec($query);
    }

    public function getTasks(): array
    {
        $tasks = [];
        $query = "SELECT * FROM task";

        $data = $this->db->query($query);

        while ($row = $data->fetchArray()) {
            $tasks[] = $row;
        }

        return $tasks;
    }

    public function addTask(string $name): void
    {
        $query = "INSERT INTO task (`done`, `name`) VALUES (false, '$name')";

        $this->exec($query);
    }

    public function getDatabase(): SQLite3
    {
        return $this->db;
    }

    private function exec(string $query): void
    {
        $this->db->prepare($query);
        $this->db->exec($query);
    }

}