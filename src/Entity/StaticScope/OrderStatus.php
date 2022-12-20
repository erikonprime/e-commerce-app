<?php

declare(strict_types=1);

namespace App\Entity\StaticScope;

enum OrderStatus: string
{
    case ORDER_STATUS_CANCELED = 'canceled';
    case ORDER_STATUS_COMPLETE = 'complete';
    case ORDER_STATUS_on_HOLD = 'on_hold';
    case ORDER_STATUS_PROCESSING = 'processing';
    case ORDER_STATUS_NEW = 'new';
    case ORDER_STATUS_PAYMENT_REVIEW = 'payment_review';

    public static function getOrderStatuses(): array
    {
        return [
        ];
    }
}