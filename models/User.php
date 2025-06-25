<?php
    class User
    {
        protected string $email;
        protected string $password;
    
        public function __construct(string $email, string $password){
            
        }
        
        public function getEmail() : string
            {
                return $this->email;
            }

        public function setEmail(string $email) : void
            {
                $this->email = $email;
            }
            
            
        public function getPassword() : string
            {
                return $this->password;
            }

        public function setPassword(string $password) : void
            {
                $this->password = $password;
            }
        
        
        
        
        
        public function login() : array {
        	return ["login" => $this->email, "password" => $this->password];
        }
    }
        

?>