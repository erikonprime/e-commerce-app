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

    public static function getOrderStatuses(): array
    {
        return [
            self::ORDER_STATUS_CREATED,
            self::ORDER_STATUS_PROCESSED,
            self::ORDER_STATUS_COMPLECTED,
            self::ORDER_STATUS_DELIVERED,
            self::ORDER_STATUS_DENIED,
        ];
    }
}