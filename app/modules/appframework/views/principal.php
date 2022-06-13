<style>
    .box-principal{
        height: 150px;
       
            }
</style>
<div class="row mt-3">
    <div class="col-md-6 col-12">
        <div class="row">
            <div class="col-md-4 col-6 mb-3">
                <a href="<?= HTTP_HOST . 'quotation/new' ?>" class="btn p-3 btn-light  box-principal" style="width: 100%;">
                    <div class="text-center p-3">
                        <img src="<?= HTTP_HOST . 'app/assets/img/img_quotation.png' ?>" width="40px" height="40px" alt="">
                    </div>
                    <p><strong>Cotizar</strong></p>
                </a>
            </div>
            <div class="col-md-4 col-6 mb-3">
                <a href="<?= HTTP_HOST . 'services/new' ?>" class="btn p-3 btn-light box-principal" style="width: 100%;">
                    <div class="text-center p-3">
                        <img src="<?= HTTP_HOST . 'app/assets/img/service_car.png' ?>" width="40px" height="40px" alt="">
                    </div>
                    <p><strong>Recibir</strong></p>
                </a>
            </div>
            <div class="col-md-4 col-6 mb-3">
                <a href="<?= HTTP_HOST . 'ingress/new_payment' ?>" class="btn p-3 btn-light box-principal" style="width: 100%;">
                    <div class="text-center p-2">
                        <img src="<?= HTTP_HOST . 'app/assets/img/pay.png' ?>" width="40px" height="40px" alt="">
                    </div>
                    <p><strong>Registrar pago servicios</strong></p>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="row">
            <div class="col-md-12 col-12 mb-3">
                <a href="#" class="btn p-3 btn-light" style="width: 100%;">
                    <div class="text-center">
                        <img src="<?= HTTP_HOST . 'app/assets/img/sales.png' ?>" width="100px" height="100px" alt="">
                    </div>
                    <h3><strong>Total de ventas</strong></h3>
                    <?php
                    $sales = ServicesModel::mdlGetSumSalesServices();
                    ?>
                    <p><strong>$<?= number_format($sales[0], 2) ?></strong></p>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-12">
                <a href="#" class="btn p-3 btn-light" style="width: 100%;">
                    <div class="text-center">
                        <img src="<?= HTTP_HOST . 'app/assets/img/ingress.png' ?>" width="100px" height="100px" alt="">
                    </div>
                    <h3><strong>Total de ingresos</strong></h3>
                    <?php
                    $ingress = IngressModel::mdlGetSumIngress();
                    ?>
                    <p><strong>$<?= number_format($ingress[0], 2) ?></strong></p>
                </a>
            </div>
        </div>
    </div>


</div>