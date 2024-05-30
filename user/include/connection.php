<?php
    class connection{
        private $server = "localhost";
        private $user = "root";
        private $password = "";
        private $db = "ems";
        private $conn = false;
        public $mysqli = "";
        private $result = array();

        public function __construct(){
            if(!$this->conn){
                $this->mysqli = new mysqli($this->server, $this->user, $this->password, $this->db);

                if($this->mysqli->connect_error){
                    array_push($this->result, $this->mysqli->connect_error);
                    return false;
                }else{
                    // echo "connected <br>";
                    $this->conn = true;
                    return true;
                }
            }
            else{
                return true;
            }
        }

        
        public function insert($table, $val = array()){
            $cols = implode(",",array_keys($val));
            $vals = implode("','",$val);

            $sql = "INSERT INTO $table ($cols) VALUES ('$vals')";

            // echo $sql;
            if($this->mysqli->query($sql)){
                return "inserted";
            }else{
                return "<br>Not Inserted\t"."<b>Error</b> : ".$this->mysqli-> error."<br>";
            }
        }
        
        public function select($table, $row="*", $join=null, $where=null, $order=null, $limit = null ){
            $sql = "SELECT $row FROM $table";

            if($join!=null){
                $sql = $sql." $join";
            }

            if($where!=null){
                $sql = $sql." WHERE $where";
            }
            if($order!=null){
                $sql = $sql." ORDER BY $order";
            }
            if($limit!=null){
                $sql = $sql." LIMIT $limit";
            }

            // echo $sql;
            if($this->mysqli->query($sql)){
                return $this->mysqli->query($sql)->fetch_all(MYSQLI_ASSOC);
            }else{
                return "<br>Not Selected\t"."<b>Error</b> : ".$this->mysqli-> error."<br>";
            }
        }

        public function singleRecord($tab, $col="*", $join=null, $where=null){
            $ssql = "SELECT $col FROM $tab";

            if($join!=null){
                $ssql =$ssql. " $join";
            }

            if($where!=null){
                $ssql = $ssql. " WHERE $where";
            }

            // echo $ssql;
            if($this->mysqli->query($ssql)){
                return $this->mysqli->query($ssql)->fetch_array(MYSQLI_ASSOC);
            }
            else{
                return "<br>Not Selected\t"."<b>Error</b> : ".$this->mysqli-> error."<br>";
            }

        }

        public function update($table, $val=array(), $where=null){
            $q = array();
            foreach ($val as $column=>$value){
                $q[] = "`$column`='$value'";
            }

            $query  = implode(",",$q);

            $sql = "UPDATE `$table` SET $query WHERE $where";
            // echo $sql;
            if($this->mysqli->query($sql)){
                return "updated";
            }else{
                return "<br>Not Updated\t"."<b>Error</b> : ".$this->mysqli-> error."<br>";
            }

        }

        public function delete($table, $where=null){
            $sql = "DELETE FROM $table WHERE $where";
            if($this->mysqli->query($sql)){
                return "deleted";
            }else{
                return "<br>Not Deleted\t"."<b>Error</b> : ".$this->mysqli-> error."<br>";
            }
        }

        public function numRows($table, $col="*", $join=null, $where=null){
            $ssql = "SELECT $col FROM $table";

            if($join!=null){
                $ssql =$ssql. " $join";
            }

            if($where!=null){
                $ssql = $ssql. " WHERE $where";
            }

            // echo $ssql;
            if($this->mysqli->query($ssql)){
                return $this->mysqli->query($ssql)->num_rows;
            }
            else{
                return "<b>Error</b> : ".$this->mysqli-> error."<br>";
            }

        }

        public function __destruct(){
            if($this->conn){
                if($this->mysqli->close()){
                    // echo "Disconnected <br>";
                    $this->conn = false;
                    return true;
                }
            }else{
                return false;
            }
        }
    }


    // $obj = new connection;
?>