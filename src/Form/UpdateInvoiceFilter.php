<?php
/**
 * Pi Engine (http://piengine.org)
 *
 * @link            http://code.piengine.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://piengine.org
 * @license         http://piengine.org/license.txt New BSD License
 */

/**
 * @author Hossein Azizabadi <azizabadi@faragostaresh.com>
 */

namespace Module\Order\Form;

use Pi;
use Laminas\InputFilter\InputFilter;

class UpdateInvoiceFilter extends InputFilter
{
    public function __construct()
    {
        // status_payment
        $this->add(
            [
                'name'     => 'status',
                'required' => true,
            ]
        );
        // gateway
        /* $this->add(array(
            'name' => 'gateway',
            'required' => true,
        )); */
    }
}
