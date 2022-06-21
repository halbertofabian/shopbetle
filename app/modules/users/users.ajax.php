
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


include_once '../../../config.php';

require_once DOCUMENT_ROOT . 'app/modules/users/users.model.php';
require_once DOCUMENT_ROOT . 'app/modules/users/users.controller.php';
require_once DOCUMENT_ROOT . 'app/modules/appframework/appframework.controller.php';
class UsersAjax
{
    public function ajaxLoginUser()
    {
        $res = UsersController::ctrLoginUser($_POST);
        echo json_encode($res, true);
    }
    public function ajaxNewUsers()
    {
        $res = UsersController::ctrAddUsers();
        echo json_encode($res, true);
    }
    public function ajaxUpdateUsers()
    {
        $res = UsersController::ctrEditUsers();
        echo json_encode($res, true);
    }
    public function ajaxDeleteUsers()
    {
        $res = UsersController::ctrDeleteUser($_POST);
        echo json_encode($res, true);
    }
    public function ajaxUpdatePassword()
    {
        $res = UsersController::ctrUpdatePassword($_POST);
        echo json_encode($res, true);
    }
}
if (isset($_POST['btnLoginUser'])) {
    $loginUser = new UsersAjax();
    $loginUser->ajaxLoginUser();
}
if (isset($_POST['btnNewUsers'])) {
    $newUsuario = new UsersAjax();
    $newUsuario->ajaxNewUsers();
}

if(isset($_POST['btnUpdateUsers'])){
    $updateUser = new UsersAjax();
    $updateUser->ajaxUpdateUsers();
}
if (isset($_POST['btnDeleteUsers'])) {
    $deleteUsers = new UsersAjax();
    $deleteUsers->ajaxDeleteUsers();
}
if (isset($_POST['btnUpdatePassword'])) {
    $updatePassword = new UsersAjax();
    $updatePassword->ajaxUpdatePassword();
}

