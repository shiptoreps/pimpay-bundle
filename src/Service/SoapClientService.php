<?php

namespace PimpayBundle\Service;

use PimpayBundle\Model\AcceptClientParams;
use PimpayBundle\Model\OrderItem;
use PimpayBundle\Model\OrderState;
use PimpayBundle\Model\PaymentOrder;
use PimpayBundle\Model\RejectedPayment;
use PimpayBundle\Model\RequestedPayment;
use PimpayBundle\Model\VerificationRow;

/**
 * Class SoapClientService
 * @package PimpayBundle\Service
 * @method acceptClient(string $token, AcceptClientParams $client)
 * @method getClient(string $token, string $tin)
 * @method sendVerification(string $token, string $tin, int $id, PaymentOrder $paymentOrder, VerificationRow[] $rows)
 * @method updateStateForOrders(string $token, OrderState[] $orderStates)
 * @method upsertHistoricalOrders(string $token, OrderItem[] $orders)
 * @method upsertOrders(string $token, OrderItem[] $orders)
 * @method invokeUsingContainer(string $token, string $requestContainer, string $requestSignature)
 * @method testHeaderSignature(string $token)
 * @method getVerificationStatus(string $token, int $id)
 * @method getDeliveryServices(string $token)
 * @method getRequestedPayments(string $token)
 * @method rejectPayments(string $token, RejectedPayment[] $payments)
 * @method requestPayments(string $token, RequestedPayment[] $payments)
 * @method getClientsBalance(string $token, string[] $tins)
 * @method getRussianPostClaimAnswers(string $token, string $tin, string[] $postIds)
 * @method getRussianPostPayments(string $token, string $tin, string[] $postIds)
 * @method testContainerSignature(string $token, string $container, string $str)
 */
class SoapClientService extends \SoapClient
{
    /**
     * @var ApiService
     */
    protected $apiService;

    /**
     * @var resource
     */
    protected $context;

    /**
     * SoapClientService constructor.
     * @param ApiService $apiService
     * @param string     $wsdl
     * @param array|null $options
     * @throws \SoapFault
     */
    public function __construct(ApiService $apiService, string $wsdl, array $options = null)
    {
        $this->apiService = $apiService;
        $this->context = stream_context_create();
        $options = array_merge($options, ['stream_context' => $this->context]);

        parent::__construct($wsdl, $options);

        $clientHeader = new \SoapHeader('urn:PlatformApiWsdl', 'client', 'phpSdk @ 2019-11-25 14:00:00', false);
        $versionHeader = new \SoapHeader('urn:PlatformApiWsdl', 'version', 'v2_7', false);
        $signatureHeader = new \SoapHeader('urn:PlatformApiWsdl', 'signature', null, false);

        $this->__setSoapHeaders([$clientHeader, $versionHeader, $signatureHeader]);
    }

    /**
     * @param string $request
     * @param string $location
     * @param string $action
     * @param int    $version
     * @param int    $oneWay
     * @return string
     */
    public function __doRequest($request, $location, $action, $version, $oneWay = 0)
    {
        $request = $this->apiService->getCryptoHandler()->injectSignature($this, $request);

        return parent::__doRequest($request, $location, $action, $version, $oneWay);
    }

    /**
     * @return resource
     */
    public function getStreamContext()
    {
        return $this->context;
    }
}
