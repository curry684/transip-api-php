<?php

namespace Transip\Api\Client\Entity\Domain;

use Transip\Api\Client\Entity\AbstractEntity;

class WhoisContact extends AbstractEntity
{
    const CONTACT_TYPE_REGISTRANT = 'registrant';
    const CONTACT_TYPE_ADMINISTRATIVE = 'administrative';
    const CONTACT_TYPE_TECHNICAL = 'technical';

    const COMPANY_TYPE_BV = 'BV'; // BV - Besloten Vennootschap
    const COMPANY_TYPE_BVIO = 'BVI/O'; // BV i.o. - BV in oprichting
    const COMPANY_TYPE_COOP = 'COOP'; // Cooperatie
    const COMPANY_TYPE_CV = 'CV'; // CV - Commanditaire Vennootschap
    const COMPANY_TYPE_EENMANSZAAK = 'EENMANSZAAK'; // Eenmanszaak
    const COMPANY_TYPE_KERK = 'KERK'; // Kerkgenootschap
    const COMPANY_TYPE_NV = 'NV'; // NV - Naamloze Vennootschap
    const COMPANY_TYPE_OWM = 'OWM'; // Onderlinge Waarborg Maatschappij
    const COMPANY_TYPE_REDR = 'REDR'; // Rederij
    const COMPANY_TYPE_STICHTING = 'STICHTING'; // Stichting
    const COMPANY_TYPE_VERENIGING = 'VERENIGING'; // Vereniging
    const COMPANY_TYPE_VOF = 'VOF'; // VoF - Vennootschap onder firma
    const COMPANY_TYPE_BEG = 'BEG'; // Buitenlandse EG vennootschap
    const COMPANY_TYPE_BRO = 'BRO'; // Buitenlandse rechtsvorm/onderneming
    const COMPANY_TYPE_EESV = 'EESV'; // Europees Economisch Samenwerkingsverband
    const COMPANY_TYPE_ANDERS = 'ANDERS'; // Anders
    const COMPANY_TYPE_NONE = ''; // Geen

    /**
     * @var string $type
     */
    public $type;

    /**
     * @var string $firstName
     */
    public $firstName;

    /**
     * @var string $lastName
     */
    public $lastName;

    /**
     * @var string $companyName
     */
    public $companyName;

    /**
     * @var string $companyKvk
     */
    public $companyKvk;

    /**
     * @var string $companyType
     */
    public $companyType;

    /**
     * @var string $street
     */
    public $street;

    /**
     * @var string $number
     */
    public $number;

    /**
     * @var string $postalCode
     */
    public $postalCode;

    /**
     * @var string $city
     */
    public $city;

    /**
     * @var string $phoneNumber
     */
    public $phoneNumber;

    /**
     * @var string $faxNumber
     */
    public $faxNumber;

    /**
     * @var string $email
     */
    public $email;

    /**
     * @var string $country
     */
    public $country;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): WhoisContact
    {
        $this->type = $type;
        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): WhoisContact
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): WhoisContact
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    public function setCompanyName(string $companyName): WhoisContact
    {
        $this->companyName = $companyName;
        return $this;
    }

    public function getCompanyKvk(): string
    {
        return $this->companyKvk;
    }

    public function setCompanyKvk(string $companyKvk): WhoisContact
    {
        $this->companyKvk = $companyKvk;
        return $this;
    }

    public function getCompanyType(): string
    {
        return $this->companyType;
    }

    public function setCompanyType(string $companyType): WhoisContact
    {
        $this->companyType = $companyType;
        return $this;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function setStreet(string $street): WhoisContact
    {
        $this->street = $street;
        return $this;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): WhoisContact
    {
        $this->number = $number;
        return $this;
    }

    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    public function setPostalCode(string $postalCode): WhoisContact
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): WhoisContact
    {
        $this->city = $city;
        return $this;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): WhoisContact
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    public function getFaxNumber(): string
    {
        return $this->faxNumber;
    }

    public function setFaxNumber(string $faxNumber): WhoisContact
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): WhoisContact
    {
        $this->email = $email;
        return $this;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): WhoisContact
    {
        $this->country = $country;
        return $this;
    }
}
