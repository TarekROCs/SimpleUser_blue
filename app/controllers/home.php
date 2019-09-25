<?php
session_start() ; 


Class Home extends Controller 
{
    private $adminManager ; 
    public function index ( $name= [] ) 
    {
         
        $this->view('home/index') ; 
        $this->adminManager = $this->model('AdministrateurManager') ; 
        if (isset($_POST['submit']))
        {       
            if(!empty($_POST['password']) && !empty($_POST['Email']) )
            {

                    $admin = $this->adminManager->getAdmin(htmlspecialchars($_POST['Email']),md5(htmlspecialchars($_POST['password'])));
                    if( $admin != null )
                    { 
                        $id = $admin->getId() ; 
                        $nbt = $this->adminManager->getNbPartenaireParSecteur($admin->getName(),$admin->getLastName());
                        $_SESSION['nom']=$admin->getName() ; 
                        $_SESSION['prenom'] = $admin->getLastName() ; 
                        $_SESSION['secteur'] = $admin->getSector(); 
                        
                        $_SESSION['id'] = $id;
                        $_SESSION['email'] = $_POST['Email'];
                        $_SESSION['password'] = $_POST['password'];
                        $_SESSION['nbt']=$nbt ; 
                        header ('location: /SimpleUser_blue/public/profil/index');
                        exit();

                    }   
                    else 
                    {
                         ?></br><div ><div class="login_error"><h2 class="login-header w3_header">combinaison incorrecte ! </h2> </div> </div><?php 
                    }
            }
        }
    }
}