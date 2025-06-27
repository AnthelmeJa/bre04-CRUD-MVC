<?php 
    
    class UserController{
        
        
        public function show() : void {
            $route = "show_user";
            require "templates/layout.phtml";
        }
        
        public function create() : void {
            $route = "create_user";
            require "templates/layout.phtml";
        }
        
        public function checkCreate() : void {
            
            
            $check_create_email = $_POST['email'];
            $check_create_first_name  = $_POST['first_name'];
            $check_create_last_name  = $_POST['last_name'];
            
            $user = new User($check_create_email, $check_create_first_name, $check_create_last_name);
            
            $manager = new UserManager();
            $manager->create($user);
            
            header("Location: index.php?route=list_user");
            exit;
            
        }
        
        
        public function update() : void {
            $route = "update_user";
            require "templates/layout.phtml";
        }
        
        
        public function checkUpdate() : void {
            $route = "check_update_user";
            require "templates/layout.phtml";
            
           
            
            
        }
        
        
        public function delete() : void {
            $route = "delete_user";
            require "templates/layout.phtml";
        }
        
        
        public function list() : void {
            $route = "list_user";
            require "templates/layout.phtml";
        }
        
        public function home() : void {
            $route = "home";
            require "templates/layout.phtml";
        }
       
        
        
        
    }
    
?>