<?php
 
namespace MyApp\UserBundle\Componoent;
 
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;
 
class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    
    protected $router;
    protected $security;
    
    public function __construct(Router $router, SecurityContext $security)
    {
        $this->router = $router;
        $this->security = $security;
    }
    
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        
        if ($this->security->isGranted('ROLE_ADMIN'))
        {
            $response = new RedirectResponse($this->router->generate('admin_admin_homepage'));            
        }
        elseif ($this->security->isGranted('ROLE_PRES'))
        {
            $response = new RedirectResponse($this->router->generate('deal'));
        }
        elseif ($this->security->isGranted('ROLE_USER'))
       {
            $response = new RedirectResponse($this->router->generate('user_homepage'));
                      
     }
            
        return $response;
    }
    
}