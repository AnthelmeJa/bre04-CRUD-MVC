<?php
    require_once "AbstractManager.php";
    require_once __DIR__ . '/../models/User.php';
    
   class UserManager extends AbstractManager{
       
        public function __construct(){
           parent::__construct();
        }
       
        public function findAll(){
            $query = $this->db->prepare('SELECT * FROM users');
            
            $query->execute();
            
            $users = $query->fetchAll(PDO::FETCH_ASSOC);
            
            $usersAll =[];
            foreach($users as $user){
                $usersAll[]=new User(
        
                        $user['id'],
                        $user['email'],
                        $user['first_name'],
                        $user['last_name']
                    
                    );
            }
            
            return $usersAll;
        }
        
        public function findOne(int $id){
            $query = $this->db->prepare('SELECT * FROM users Where id = :id');
            
            $parameters = [
                'id' => $id
            ];
            
            
            $query->execute($parameters);
            
            $user = $query->fetch(PDO::FETCH_ASSOC);
            
            $userOne = new User(
                $user['id'],
                $user['email'],
                $user['first_name'],
                $user['last_name']
            );
    
            return $userOne;
        }
        
        
        public function create(User $user){
            $query = $this->db->prepare('INSERT INTO users (email, first_name, last_name) VALUES (:email, :first_name, :last_name)');
            
            $parameters=[
                'email'=> $user->getEmail(),
                'first_name' => $user->getFirst_name(),
                'last_name' => $user->getLast_name()
            ];
            
            $query->execute($parameters);
        }
        
        public function update(User $user){
            $query = $this->db->prepare('UPDATE users SET  email= :email, first_name= :first_name, last_name= :last_name WHERE id = :id');
            
            $parameters=[
                'id'=>$user->getId(),
                'email'=> $user->getEmail(),
                'first_name' => $user->getFirst_name(),
                'last_name' => $user->getLast_name()
            ];
            
            $query->execute($parameters);
        }
        
        
        public function delete(User $user){
            $query = $this->db->prepare('DELETE FROM users WHERE id = :id;');
            
            $parameters=[
                'id'=>$user->getId()

            ];
            
            $query->execute($parameters);
        }
        
        
        
        

       
   } 

    

?>