<?php


    class User
    {   
        private ?int $id = null;
        private string $email;
        private string $first_name;
        private string $last_name;
        
    
        public function __construct(string $email, string $first_name, string $last_name){
            $this->email = $email;
            $this->first_name = $first_name;
            $this->last_name = $last_name;
        }
        
        public function getEmail() : string
            {
                return $this->email;
            }

        public function setEmail(string $email) : void
            {
                $this->email = $email;
            }
            
            
        public function getFirst_name() : string
            {
                return $this->first_name;
            }

        public function setFirst_name(string $first_name) : void
            {
                $this->first_name = $first_name;
            }
            
            
        public function getLast_name() : string
            {
                return $this->last_name;
            }

        public function setLast_name(string $last_name) : void
            {
                $this->last_name = $last_name;
            }
            
            
        public function getId() : string
            {
                return $this->id;
            }

        public function setId(string $id) : void
            {
                $this->id = $id;
            }
   
        
    }
        

?>