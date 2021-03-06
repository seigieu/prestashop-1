<?php

namespace Bliskapaczka\ApiClient\Validator;

use Bliskapaczka\ApiClient\AbstractValidator;
use Bliskapaczka\ApiClient\ValidatorInterface;
use Bliskapaczka\ApiClient\Exception;

/**
 * Order Validator class
 *
 * @author  Mateusz Koszutowski (mkoszutowski@divante.pl)
 * @version 0.1.0
 */
class Order extends AbstractValidator implements ValidatorInterface
{
    protected $properties = [
        'senderEmail' => ['maxlength' => 60, 'notblank' => true],
        'receiverEmail' => ['maxlength' => 60],
        'senderPhoneNumber'  => ['notblank' => true],
        'receiverPhoneNumber'  => ['notblank' => true],
        'senderPostCode' => ['notblank' => true],
        'senderFirstName' => ['maxlength' => 30, 'notblank' => true],
        'senderLastName' => ['maxlength' => 30, 'notblank' => true],
        'senderStreet' => ['maxlength' => 30, 'notblank' => true],
        'senderBuildingNumber' => ['maxlength' => 10, 'notblank' => true],
        'senderFlatNumber' => ['maxlength' => 10],
        'senderCity' => ['maxlength' => 30, 'notblank' => true],
        'receiverFirstName' => ['maxlength' => 30, 'notblank' => true],
        'receiverLastName' => ['maxlength' => 30, 'notblank' => true],
        'operatorName' => ['notblank' => true],
        'destinationCode' => ['notblank' => true],
        'postingCode' => [],
        'codValue' => [],
        'insuranceValue' => [],
        'additionalInformation' => [],
        'parcel' => []
    ];

    /**
     * Validate data
     *
     * @return bool
     */
    public function validate()
    {
        /* Original Bliskapaczka validator regexps
        numer konta: /^\d{26}$/
        nip: /^\d{10}$/
        kod pocztowy: /^\d{2}\-\d{3}$/

        @NotBlank
        @Size(max = 30)
        private String senderFirstName;
        @NotBlank
        @Size(max = 30)
        private String senderLastName;
        @NotBlank
        @PhoneNumber
        private String senderPhoneNumber;
        @NotBlank
        @Email
        @Size(max = 60)
        private String senderEmail;
        @NotBlank
        @Size(max = 30)
        private String senderStreet;
        @NotBlank
        @Size(max = 10)
        private String senderBuildingNumber;
        @Size(max = 10)
        private String senderFlatNumber;
        @NotBlank
        @PostCode
        private String senderPostCode;
        @NotBlank
        @Size(max = 30)
        private String senderCity;

        @NotBlank
        @Size(max = 30)
        private String receiverFirstName;
        @NotBlank
        @Size(max = 30)
        private String receiverLastName;
        @NotBlank
        @PhoneNumber
        private String receiverPhoneNumber;
        @NotBlank
        @Email
        @Size(max = 60)
        private String receiverEmail;
        @NotBlank
        private OperatorName operatorName;
        */

        # Basic validation for all propoerties
        $this->validationByProperty();

        return true;
    }
}
