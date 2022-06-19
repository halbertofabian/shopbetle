
<?php
/**
 *  Desarrollador: 
 *  Fecha de creación: 17/06/2022 12:39
 *  Desarrollado por: Softmor
 *  Software de Morelos SA.DE.CV 
 *  Sitio web: https://softmor.com
 *  Facebook:  https://www.facebook.com/softmor/
 *  Instagram: http://instagram.com/softmormx
 *  Twitter: https://twitter.com/softmormx
 */
class UsersController
{
    static public function ctrLoginUser()
    {
        $usuario = trim($_POST["usr_id"]);
        $password = crypt($_POST["usr_password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
        $usr = UsersModel::mdlLoginUsers($usuario);
        if (!$usr) {
            return array(
                'status' => false,
                'message' => 'Usuario o contraseña incorrectos, intenta de nuevo'
            );
        }
        if ($usr["usr_password"] == $password) {
            if ($usr["usr_status"] == 1) {
                $_SESSION["session_start"] = true;
                $_SESSION['session_usr'] = $usr;
                //header('Location:' . HTTP_HOST);
                return array(
                    'status' => true
                );
            } else {
                return array(
                    "status" => false,
                    'message' => 'Tu usuario fue desactivado por los administradores del negocio'
                );
            }
        } else {
            return array(
                "status" => false,
                'message' => 'Usuario o contraseña incorrecto, intente de nuevo'
            );
        }
    }
}

