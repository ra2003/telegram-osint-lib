<?php

declare(strict_types=1);

namespace TelegramOSINT\TLMessage\TLMessage\ServerMessages\Stickers;

use TelegramOSINT\MTSerialization\AnonymousMessage;
use TelegramOSINT\TLMessage\TLMessage\TLServerMessage;

/**
 * @see https://core.telegram.org/constructor/messages.featuredStickersNotModified
 */
class FeaturedStickersNotModified extends TLServerMessage
{
    public static function isIt(AnonymousMessage $tlMessage): bool
    {
        return $tlMessage->getType() === 'messages.featuredStickersNotModified';
    }
}
