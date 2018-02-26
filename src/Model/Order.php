<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * @link            http://code.pialog.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://pialog.org
 * @license         http://pialog.org/license.txt New BSD License
 */

/**
 * @author Hossein Azizabadi <azizabadi@faragostaresh.com>
 */

namespace Module\Order\Model;

use Pi\Application\Model\Model;

class Order extends Model
{
    const STATUS_ORDER_NOT_PROCESSED        = 1;
    const STATUS_ORDER_VALIDATED            = 2;
    const STATUS_ORDER_PENDING              = 3;
    const STATUS_ORDER_ORDERS_FAILED        = 4;
    const STATUS_ORDER_CANCELLED            = 5;
    const STATUS_ORDER_FRAUDULENT_ORDERS    = 6;
    const STATUS_ORDER_FINISHED             = 7;
    
           
    /**
     * {@inheritDoc}
     */
    protected $columns = array(
        'id',
        'uid',
        'code',
        'type_payment',
        'type_commodity',
        'can_pay',
        'plan',
        'ip',
        'user_note',
        'admin_note',
        'time_create',
        'time_payment',
        'time_delivery',
        'status_order',
        'status_payment',
        'status_delivery',
        'product_price',
        'discount_price',
        'shipping_price',
        'packing_price',
        'setup_price',
        'vat_price',
        'total_price',
        'paid_price',
        'gateway',
        'packing',
        'promotion_type',
        'promotion_value',
        'extra'
    );
}
