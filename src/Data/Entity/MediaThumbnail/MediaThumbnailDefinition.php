<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MediaThumbnail;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaThumbnailDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'media_thumbnail';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return MediaThumbnailEntity::class;
    }

    public function getEntityCollection() : string
    {
        return MediaThumbnailCollection::class;
    }
}