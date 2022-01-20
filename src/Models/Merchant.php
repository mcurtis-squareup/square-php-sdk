<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents a Square seller.
 */
class Merchant implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $businessName;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string|null
     */
    private $languageCode;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $mainLocationId;

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @param string $country
     */
    public function __construct(string $country)
    {
        $this->country = $country;
    }

    /**
     * Returns Id.
     *
     * The Square-issued ID of the merchant.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * The Square-issued ID of the merchant.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Business Name.
     *
     * The business name of the merchant.
     */
    public function getBusinessName(): ?string
    {
        return $this->businessName;
    }

    /**
     * Sets Business Name.
     *
     * The business name of the merchant.
     *
     * @maps business_name
     */
    public function setBusinessName(?string $businessName): void
    {
        $this->businessName = $businessName;
    }

    /**
     * Returns Country.
     *
     * Indicates the country associated with another entity, such as a business.
     * Values are in [ISO 3166-1-alpha-2 format](http://www.iso.org/iso/home/standards/country_codes.htm).
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * Sets Country.
     *
     * Indicates the country associated with another entity, such as a business.
     * Values are in [ISO 3166-1-alpha-2 format](http://www.iso.org/iso/home/standards/country_codes.htm).
     *
     * @required
     * @maps country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    /**
     * Returns Language Code.
     *
     * The language code associated with the merchant account, in BCP 47 format.
     */
    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }

    /**
     * Sets Language Code.
     *
     * The language code associated with the merchant account, in BCP 47 format.
     *
     * @maps language_code
     */
    public function setLanguageCode(?string $languageCode): void
    {
        $this->languageCode = $languageCode;
    }

    /**
     * Returns Currency.
     *
     * Indicates the associated currency for an amount of money. Values correspond
     * to [ISO 4217](https://wikipedia.org/wiki/ISO_4217).
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     *
     * Indicates the associated currency for an amount of money. Values correspond
     * to [ISO 4217](https://wikipedia.org/wiki/ISO_4217).
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Main Location Id.
     *
     * The ID of the main `Location` for this merchant.
     */
    public function getMainLocationId(): ?string
    {
        return $this->mainLocationId;
    }

    /**
     * Sets Main Location Id.
     *
     * The ID of the main `Location` for this merchant.
     *
     * @maps main_location_id
     */
    public function setMainLocationId(?string $mainLocationId): void
    {
        $this->mainLocationId = $mainLocationId;
    }

    /**
     * Returns Created At.
     *
     * The time when the merchant was created, in RFC 3339 format.
     * For more information, see [Working with Dates](https://developer.squareup.com/docs/build-
     * basics/working-with-dates).
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * The time when the merchant was created, in RFC 3339 format.
     * For more information, see [Working with Dates](https://developer.squareup.com/docs/build-
     * basics/working-with-dates).
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return mixed
     */
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->id)) {
            $json['id']               = $this->id;
        }
        if (isset($this->businessName)) {
            $json['business_name']    = $this->businessName;
        }
        $json['country']              = $this->country;
        if (isset($this->languageCode)) {
            $json['language_code']    = $this->languageCode;
        }
        if (isset($this->currency)) {
            $json['currency']         = $this->currency;
        }
        if (isset($this->status)) {
            $json['status']           = $this->status;
        }
        if (isset($this->mainLocationId)) {
            $json['main_location_id'] = $this->mainLocationId;
        }
        if (isset($this->createdAt)) {
            $json['created_at']       = $this->createdAt;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
