
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
    public static function mdlAgregarUsers()
    {
        try {
            //code...
            $sql = "";
            $con = ConexionSoftmor::conectar();
            $pps = $con->prepare($sql);

            $pps -> execute();
            return $pps -> rowCount()>0;
        } catch (PDOException $th) {
            //throw $th;
        } finally {
            $pps = null;
            $con = null;
        }
    }
    public static function mdlActualizarUsers()
    {
        try {
            //code...
            $sql = "";
            $con = ConexionSoftmor::conectar();
            $pps = $con->prepare($sql);

            $pps -> execute();
            return $pps -> rowCount()>0;
        } catch (PDOException $th) {
            //throw $th;
        } finally {
            $pps = null;
            $con = null;
        }
    }
    public static function mdlMostrarUsers()
    {
        try {
            //code...
            $sql = "";
            $con = ConexionSoftmor::conectar();
            $pps = $con->prepare($sql);

            $pps -> execute();
            return $pps ->fetchAll();
        } catch (PDOException $th) {
            //throw $th;
        } finally {
            $pps = null;
            $con = null;
        }
    }
    public static function mdlEliminarUsers()
    {
        try {
            //code...
            $sql = "";
            $con = ConexionSoftmor::conectar();
            $pps = $con->prepare($sql);

            $pps -> execute();
            return $pps -> rowCount()>0;
        } catch (PDOException $th) {
            //throw $th;
        } finally {
            $pps = null;
            $con = null;
        }
    }
}


