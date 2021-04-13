<?php

namespace  App\Support;

use mysqli;

/**
 * Class Database
 * @package App\Support
 */
abstract class Database
{

    // Attributes
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db   = "e_commerce";

    private $connection;


    /**
     * database connection
     * @return mysqli
     */
    private function connection()
    {
        return $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->db);
    }

    /**
     * Insert data to database table
     * @param $sql
     */
    protected function create(string $table, array $data)
    {

        // Get database table column name
        $db_col_arr = array_keys($data);
        $db_col_list = implode(',', $db_col_arr);


        // Get database column values
        $col_valus_arr = array_values($data);

        $col_val_manage = '';
        foreach ($col_valus_arr as $val) {
            $col_val_manage .= "'" . $val . "',";
        }
        $col_val =  substr($col_val_manage, 0, -1);

        $this->connection()->query("INSERT INTO $table ($db_col_list) VALUES ($col_val)");
    }


    /**
     * Select  all data form any table
     * @param $table
     * @param $order
     */
    protected function all($table, $order = 'DESC')
    {
        return $this->connection()->query("SELECT * FROM $table ORDER BY id $order");
    }


    /**
     *
     * @param $table
     * @param $id
     */
    protected function find($table, $id)
    {

        return $this->connection()->query("SELECT * FROM $table WHERE id='$id' LIMIT 1");
    }

    /**
     * Update any data from any table
     * @param $sql
     */
    protected function update($sql)
    {
    }

    /**
     * Delete any data from any table
     * @param $table
     * @param $id
     */
    protected function delete($table, $id)
    {
        $this->connection()->query("DELETE FROM $table WHERE id=$id");
    }
}
