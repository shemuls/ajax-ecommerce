<?php
namespace  App\Support;
require_once "../config.php";


use mysqli;

/**
 * Class Database
 * @package App\Support
 */
abstract class Database
{

    // Attributes
    private $host = HOST;
    private $user = USER;
    private $pass = PASSWORD;
    private $db   = DATABASE;

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

    /**
     * file uplode system
     */
    function fileUp($file, $location, $format=['png','jpg','gif'])
    {
        
        $file_name = $file['name'];
        $file_tmp_name = $file['tmp_name'];
        //without photo upload
        if(empty($file_name)){
            $unicname = "defult.png";
            $status = "without";
        }else{
            //file extenation
            $file_arr = explode('.', $file_name);
            $ext = strtolower(end($file_arr));

            //unice name
            $unicname = md5(time().rand()).".".$ext;
                


            //send file to folder
            if (in_array($ext,$format)) {

                move_uploaded_file($file_tmp_name,$location.$unicname);
                $status = 'with';
            }else{
                $status = 'Error';
            }
        }
        
        return[
            'file_name' => $unicname,
            'status' => $status
        ];

    }


}
