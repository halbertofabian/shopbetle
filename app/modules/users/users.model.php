
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

require_once DOCUMENT_ROOT . "app/modules/appframework/conexion.softmor.php";

class UsersModel
{
    public static function mdlLoginUsers($user)
    {

        try {
            //code...
            $sql = "SELECT * FROM tbl_users_usr WHERE usr_id = ? OR usr_email = ? OR usr_phone = ? ";
            $con = ConexionSoftmor::conectar();
            $pps = $con->prepare($sql);
            $pps->bindValue(1, $user);
            $pps->bindValue(2, $user);
            $pps->bindValue(3, $user);
            $pps->execute();
            return $pps->fetch();
        } catch (PDOException $th) {
            //throw $th;
            return false;
        } finally {
            $pps = null;
            $con = null;
        }
    }
}


