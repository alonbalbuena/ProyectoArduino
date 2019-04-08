<?php
    class User extends DB{

        private $nombre;
        private $username;

        //valida en la bd si existe dicho usuario
        public function existeUsuario($user,$pass){

            //convertimos en hashmd5 el password
            //para conpararlo con la bd
            $md5pass = md5($pass);

            $consulta = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user AND password = :pass');
            $query -> execute(['user' => $user, 'pass' => $md5pass]);

            if($query->rowCount()){
                return true;
            }else{
                return false;
            }
        }

        public fucntion setUser($user){
            
        }

    }

?>