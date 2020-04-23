<?php

namespace App\Model;

use App\Db\DB;

class User 
{
    public static function  selectAll($id = null)
    {
        $where = '';

        if(!empty($id)){
            $where = 'WHERE id = :id';
        }

        $sql = sprint("SELECT id, name, email,gender, birthdate FROM users %s ORDER BY ASC, $where");

        $DB = new DB;
        $stmt = $DB->prepare($sql);

        if(!empty($where)){
        
            $stmt->bindParam(':id', $id, \PDO::PARAM_INIT);
        }

        $stmt->execute();
        $users = $stmt->fetchAll(\PDO::FECTH_ASSOC);
        return $users;
    }

    public static function save($name, $email, $gender, $birthdate)
        
    {
        if(empty($name) || empty($email)|| empty($gender) || empty($birthdate))
        {
            echo"preencha todos os campos";
            return false;
        }


            $isoDate = dateConvert($birthdate);
    
            $DB = new DB;
            $sql = "INSERT INTO users(name, email, gender, birthdate) VALUES(:name, :email, :gender, :birthdate)";
            $stmt = $DB->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':birthdate', $name);
            $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
    
            if($stmt->execute()){
                return true;
            }
            else{
                echo"erro ao cadastrar";
                print_r($stmt->errorInfo());
                return false;
            }
        }


        public static function remove($id){
            if(empty($id))
            {
                echo "ID não informado";
                exit;
            }

            $DB = new DB;
            $sql = "DELETE FROM users WHERE id = :id";
            $stmt->prepate($sql);
            $stmt->bindParam(':id', $id, \PDO::PARAM_INT);

            if($stm->execute())
            {
                return true;
            }
            else{
                echo"Error ao remover";
                print_r($stmt->errorInfo());
                return false;
            }
             

        }


 }

  
