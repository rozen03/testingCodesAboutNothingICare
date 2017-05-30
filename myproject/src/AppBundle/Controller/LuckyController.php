<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;
use AppBundle\Form\UserType;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);
		$texto = password_hash ( "Exodia" , PASSWORD_BCRYPT, ["cost"=> 12]);
		//return new Response('<html><body>Lucky number: '.$number.'<br \> Bcrypt: '.$texto.'</body></html>');
		//$res =$this->createQueryBuilder('u')
	 //->where('u.username = :username OR u.email = :email')
	 //->setParameter('username', $username)
	 //->setParameter('email', $username)
	 //->getQuery()
	 //->getOneOrNullResult();
	 $res = $this->getDoctrine()->getRepository("AppBundle:User")->findAll();
//	 return new Response((string)$res[0]->id);
	return new Response($res[0]->getId());
        #return new Response('<html><body>Lucky number: '.$number.'</body></html>');
        #return $this->render('lucky/number.html.twig', array('number' => $number,));
    }
}
?>
