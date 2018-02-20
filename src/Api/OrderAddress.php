<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * @link            http://code.pialog.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://pialog.org
 * @license         http://pialog.org/license.txt New BSD License
 */

/**
 * @author Mickaêl STAMM <contact@sta2m.com>
 */

namespace Module\Order\Api;

use Pi;
use Pi\Application\Api\AbstractApi;

/*
 * Pi::api('order_address', 'order')->findOrderAddress();
 */

class OrderAddress extends AbstractApi
{
    public function findOrderAddress($id, $type = 'INVOICING')
    {
        // Select
        $where = array('order' => $id, 'type' => $type);
        $select = Pi::model('order_address', 'order')->select()->where($where);
        $row = Pi::model('order_address', 'order')->selectWith($select)->current();
        if ($row) {
            return $row->toArray();
        }
        
        return array();
    }
}