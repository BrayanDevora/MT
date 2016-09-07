<?php
/**
 * Created by PhpStorm.
 * User: Yohualli
 * Date: 30/08/16
 * Time: 8:40 PM
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Util\PdoUtil;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Common\Proxy\Exception\InvalidArgumentException;

/**
 * Class UsersController
 * @package AppBundle\Controller
 * @Route("/control")
 */
class UsersController extends Controller
{
    /**
     * @Route("/users", name="users")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $email = $request->get("email");
        $password = $request->get("password");
        $name = $request->get("name");
        $lastName = $request->get("lastName");

        /**
         * Make validations and return errors if exist
         */
        if ("post" == strtolower($request->getMethod())) {
            $errors = array();
            if (strlen(trim($name)) == 0) {
                $errors["name"] = "El nombre de usuario es obligatorio";
            }
            if (strlen(trim($lastName)) == 0) {
                $errors["lastName"] = "El apellido es obligatorio";
            }
            if (strlen(trim($email)) == 0) {
                $errors["email"] = "El email es obligatorio";
            }
            if (strlen(trim($password)) == 0) {
                $errors["password"] = "La contraseña es obligatoria";
            }
            /**
             * Return if errors exist
             */
            if (0 != count($errors)) {
                $data = array(
                    "name" => $name,
                    "lastName" => $lastName,
                    "email" => $email,
                    "errors" => $errors
                );
                return $this->render("AppBundle:Users:index.html.twig", $data);
            }

            /**
             * Verifying unique stuff
             */
            $stmt = "select 1 from usuario where name = '$name' or email = '$email'";
            $result = PdoUtil::selectSingleRecordOrNull($em->getConnection(), $stmt);
            if (null != $result) {
                $this->addFlash("warning", "El nombre de usuario o email ya estan registrados");
                return $this->redirectToRoute("users");
            }

            /**
             * Create user
             */
            $stmt = "insert into usuario (name, email, password, last_name) ".
                "values (:name, :email, :password, :lastName)";
            PdoUtil::executePrepared($em->getConnection(), $stmt, array(
                "name" => $name,
                "email" => $email,
                "password" => password_hash($password, PASSWORD_BCRYPT),
                "lastName" => $lastName
            ));

            $this->addFlash("msg", "Puedes iniciar sesion");

        }

        return $this->render('AppBundle:Users:index.html.twig');
    }

}