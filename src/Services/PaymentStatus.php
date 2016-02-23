<?php

namespace Hcapi\Services;

/**
 * @author Oldřich Taufer <oldrich.taufer@heureka.cz>
 */
class PaymentStatus extends AbstractService
{

    const KEY_STATUS = 'status';

    public function __construct()
    {
        $this->validator = new \Hcapi\Validators\PaymentStatus();
    }

}
