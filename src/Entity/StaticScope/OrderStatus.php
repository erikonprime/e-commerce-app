<?php

declare(strict_types=1);

namespace App\Entity\StaticScope;

enum OrderStatus: string
{
    case ORDER_STATUS_CREATED = 'Created';
    case ORDER_STATUS_PROCESSED = 'Processed';
    case ORDER_STATUS_COMPLECTED = 'Complected';
    case ORDER_STATUS_DELIVERED = 'Delivered';
    case ORDER_STATUS_DENIED = 'Denied';
}