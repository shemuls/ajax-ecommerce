## eCommerce Project

This is a mini eCommerce for research

### Language List

- HTML 5
- CSS 3
- javaScripts
- jQuery
- ajax
- PHP
- MySQL
- OOP
- PDO

#### Database Management

// Attributes
private $host = HOST;
private $user = USER;
private $pass = PASSWORD;
private $db = DATABASE;

    private $connection;


    /**
     * database connection
     * @return mysqli
     */
    private function connection()
    {
        return $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
