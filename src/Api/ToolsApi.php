<?php
/**
 * ToolsApi
 * PHP version 8.1
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Staffology Payroll API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Contact: duane@staffology.co.uk
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SynergiTech\Staffology\Api;

use InvalidArgumentException;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Promise\PromiseInterface;
use SynergiTech\Staffology\ApiException;
use SynergiTech\Staffology\Configuration;
use SynergiTech\Staffology\HeaderSelector;
use SynergiTech\Staffology\ObjectSerializer;

/**
 * ToolsApi Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ToolsApi
{
    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    /**
     * @var Configuration
     */
    protected Configuration $config;

    /**
     * @var HeaderSelector
     */
    protected HeaderSelector $headerSelector;

    /**
     * @var int Host index
     */
    protected int $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'calculateNetOfOnCostsTools' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface|null $client
     * @param Configuration|null   $config
     * @param HeaderSelector|null  $selector
     * @param int                  $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex(int $hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex(): int
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * Operation calculateNetOfOnCostsTools
     *
     * Calculate Net of On Costs
     *
     * @param  float $notionalDayRate The total chargeable rate per day. (required)
     * @param  float $fee The charge for providing this service, per pay period. (required)
     * @param  bool $feeIsPercentage If true, &#39;Fee&#39; will be treated as a percentage. (required)
     * @param  float $employersPensionContribution The employers pension contributions, per pay period. (required)
     * @param  bool $employersPensionContributionIsPercentage If true, EmployersPensionContribution will be treated as a percentage. (required)
     * @param  float $employeesPensionContribution The employees pension contributions, per pay period. (required)
     * @param  bool $employeesPensionContributionIsPercentage If true, EmployeesPensionContribution will be used as a percentage. (required)
     * @param  bool $useAeBandings If true, legislative Ae Bandings will be applied during calculation. (required)
     * @param  float $holidayWeeks The holiday weeks to use for the calculation. (required)
     * @param  int $daysWorkedPerWeek Number of days the employee works per week. (required)
     * @param  \SynergiTech\Staffology\Model\PayPeriods $payPeriod The pay frequency to be used for the calculation. (required)
     * @param  \DateTime|null $calculationDate Used to find associated legislative values, default Today. (optional)
     * @param  float|null $apprenticeshipLevyRateOverride Override the Apprenticeship Levy Rate. 0.50 for 0.5%. (optional)
     * @param  \SynergiTech\Staffology\Model\PensionRule|null $pensionRule The type of pension scheme being enrolled into, default SalarySacrifice. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['calculateNetOfOnCostsTools'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \SynergiTech\Staffology\Model\ContractNetOfOnCostsResponse
     */
    public function calculateNetOfOnCostsTools(
        float $notionalDayRate,
        float $fee,
        bool $feeIsPercentage,
        float $employersPensionContribution,
        bool $employersPensionContributionIsPercentage,
        float $employeesPensionContribution,
        bool $employeesPensionContributionIsPercentage,
        bool $useAeBandings,
        float $holidayWeeks,
        int $daysWorkedPerWeek,
        \SynergiTech\Staffology\Model\PayPeriods $payPeriod,
        ?\DateTime $calculationDate = null,
        ?float $apprenticeshipLevyRateOverride = null,
        ?\SynergiTech\Staffology\Model\PensionRule $pensionRule = null,
        string $contentType = self::contentTypes['calculateNetOfOnCostsTools'][0]
    ): \SynergiTech\Staffology\Model\ContractNetOfOnCostsResponse
    {
        list($response) = $this->calculateNetOfOnCostsToolsWithHttpInfo($notionalDayRate, $fee, $feeIsPercentage, $employersPensionContribution, $employersPensionContributionIsPercentage, $employeesPensionContribution, $employeesPensionContributionIsPercentage, $useAeBandings, $holidayWeeks, $daysWorkedPerWeek, $payPeriod, $calculationDate, $apprenticeshipLevyRateOverride, $pensionRule, $contentType);
        return $response;
    }

    /**
     * Operation calculateNetOfOnCostsToolsWithHttpInfo
     *
     * Calculate Net of On Costs
     *
     * @param  float $notionalDayRate The total chargeable rate per day. (required)
     * @param  float $fee The charge for providing this service, per pay period. (required)
     * @param  bool $feeIsPercentage If true, &#39;Fee&#39; will be treated as a percentage. (required)
     * @param  float $employersPensionContribution The employers pension contributions, per pay period. (required)
     * @param  bool $employersPensionContributionIsPercentage If true, EmployersPensionContribution will be treated as a percentage. (required)
     * @param  float $employeesPensionContribution The employees pension contributions, per pay period. (required)
     * @param  bool $employeesPensionContributionIsPercentage If true, EmployeesPensionContribution will be used as a percentage. (required)
     * @param  bool $useAeBandings If true, legislative Ae Bandings will be applied during calculation. (required)
     * @param  float $holidayWeeks The holiday weeks to use for the calculation. (required)
     * @param  int $daysWorkedPerWeek Number of days the employee works per week. (required)
     * @param  \SynergiTech\Staffology\Model\PayPeriods $payPeriod The pay frequency to be used for the calculation. (required)
     * @param  \DateTime|null $calculationDate Used to find associated legislative values, default Today. (optional)
     * @param  float|null $apprenticeshipLevyRateOverride Override the Apprenticeship Levy Rate. 0.50 for 0.5%. (optional)
     * @param  \SynergiTech\Staffology\Model\PensionRule|null $pensionRule The type of pension scheme being enrolled into, default SalarySacrifice. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['calculateNetOfOnCostsTools'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \SynergiTech\Staffology\Model\ContractNetOfOnCostsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function calculateNetOfOnCostsToolsWithHttpInfo(
        float $notionalDayRate,
        float $fee,
        bool $feeIsPercentage,
        float $employersPensionContribution,
        bool $employersPensionContributionIsPercentage,
        float $employeesPensionContribution,
        bool $employeesPensionContributionIsPercentage,
        bool $useAeBandings,
        float $holidayWeeks,
        int $daysWorkedPerWeek,
        \SynergiTech\Staffology\Model\PayPeriods $payPeriod,
        ?\DateTime $calculationDate = null,
        ?float $apprenticeshipLevyRateOverride = null,
        ?\SynergiTech\Staffology\Model\PensionRule $pensionRule = null,
        string $contentType = self::contentTypes['calculateNetOfOnCostsTools'][0]
    ): array
    {
        $request = $this->calculateNetOfOnCostsToolsRequest($notionalDayRate, $fee, $feeIsPercentage, $employersPensionContribution, $employersPensionContributionIsPercentage, $employeesPensionContribution, $employeesPensionContributionIsPercentage, $useAeBandings, $holidayWeeks, $daysWorkedPerWeek, $payPeriod, $calculationDate, $apprenticeshipLevyRateOverride, $pensionRule, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if (in_array('\SynergiTech\Staffology\Model\ContractNetOfOnCostsResponse', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SynergiTech\Staffology\Model\ContractNetOfOnCostsResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SynergiTech\Staffology\Model\ContractNetOfOnCostsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\SynergiTech\Staffology\Model\ContractNetOfOnCostsResponse';
            if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SynergiTech\Staffology\Model\ContractNetOfOnCostsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation calculateNetOfOnCostsToolsAsync
     *
     * Calculate Net of On Costs
     *
     * @param  float $notionalDayRate The total chargeable rate per day. (required)
     * @param  float $fee The charge for providing this service, per pay period. (required)
     * @param  bool $feeIsPercentage If true, &#39;Fee&#39; will be treated as a percentage. (required)
     * @param  float $employersPensionContribution The employers pension contributions, per pay period. (required)
     * @param  bool $employersPensionContributionIsPercentage If true, EmployersPensionContribution will be treated as a percentage. (required)
     * @param  float $employeesPensionContribution The employees pension contributions, per pay period. (required)
     * @param  bool $employeesPensionContributionIsPercentage If true, EmployeesPensionContribution will be used as a percentage. (required)
     * @param  bool $useAeBandings If true, legislative Ae Bandings will be applied during calculation. (required)
     * @param  float $holidayWeeks The holiday weeks to use for the calculation. (required)
     * @param  int $daysWorkedPerWeek Number of days the employee works per week. (required)
     * @param  \SynergiTech\Staffology\Model\PayPeriods $payPeriod The pay frequency to be used for the calculation. (required)
     * @param  \DateTime|null $calculationDate Used to find associated legislative values, default Today. (optional)
     * @param  float|null $apprenticeshipLevyRateOverride Override the Apprenticeship Levy Rate. 0.50 for 0.5%. (optional)
     * @param  \SynergiTech\Staffology\Model\PensionRule|null $pensionRule The type of pension scheme being enrolled into, default SalarySacrifice. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['calculateNetOfOnCostsTools'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function calculateNetOfOnCostsToolsAsync(
        float $notionalDayRate,
        float $fee,
        bool $feeIsPercentage,
        float $employersPensionContribution,
        bool $employersPensionContributionIsPercentage,
        float $employeesPensionContribution,
        bool $employeesPensionContributionIsPercentage,
        bool $useAeBandings,
        float $holidayWeeks,
        int $daysWorkedPerWeek,
        \SynergiTech\Staffology\Model\PayPeriods $payPeriod,
        ?\DateTime $calculationDate = null,
        ?float $apprenticeshipLevyRateOverride = null,
        ?\SynergiTech\Staffology\Model\PensionRule $pensionRule = null,
        string $contentType = self::contentTypes['calculateNetOfOnCostsTools'][0]
    ): PromiseInterface
    {
        return $this->calculateNetOfOnCostsToolsAsyncWithHttpInfo($notionalDayRate, $fee, $feeIsPercentage, $employersPensionContribution, $employersPensionContributionIsPercentage, $employeesPensionContribution, $employeesPensionContributionIsPercentage, $useAeBandings, $holidayWeeks, $daysWorkedPerWeek, $payPeriod, $calculationDate, $apprenticeshipLevyRateOverride, $pensionRule, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation calculateNetOfOnCostsToolsAsyncWithHttpInfo
     *
     * Calculate Net of On Costs
     *
     * @param  float $notionalDayRate The total chargeable rate per day. (required)
     * @param  float $fee The charge for providing this service, per pay period. (required)
     * @param  bool $feeIsPercentage If true, &#39;Fee&#39; will be treated as a percentage. (required)
     * @param  float $employersPensionContribution The employers pension contributions, per pay period. (required)
     * @param  bool $employersPensionContributionIsPercentage If true, EmployersPensionContribution will be treated as a percentage. (required)
     * @param  float $employeesPensionContribution The employees pension contributions, per pay period. (required)
     * @param  bool $employeesPensionContributionIsPercentage If true, EmployeesPensionContribution will be used as a percentage. (required)
     * @param  bool $useAeBandings If true, legislative Ae Bandings will be applied during calculation. (required)
     * @param  float $holidayWeeks The holiday weeks to use for the calculation. (required)
     * @param  int $daysWorkedPerWeek Number of days the employee works per week. (required)
     * @param  \SynergiTech\Staffology\Model\PayPeriods $payPeriod The pay frequency to be used for the calculation. (required)
     * @param  \DateTime|null $calculationDate Used to find associated legislative values, default Today. (optional)
     * @param  float|null $apprenticeshipLevyRateOverride Override the Apprenticeship Levy Rate. 0.50 for 0.5%. (optional)
     * @param  \SynergiTech\Staffology\Model\PensionRule|null $pensionRule The type of pension scheme being enrolled into, default SalarySacrifice. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['calculateNetOfOnCostsTools'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function calculateNetOfOnCostsToolsAsyncWithHttpInfo(
        $notionalDayRate,
        $fee,
        $feeIsPercentage,
        $employersPensionContribution,
        $employersPensionContributionIsPercentage,
        $employeesPensionContribution,
        $employeesPensionContributionIsPercentage,
        $useAeBandings,
        $holidayWeeks,
        $daysWorkedPerWeek,
        $payPeriod,
        $calculationDate = null,
        $apprenticeshipLevyRateOverride = null,
        $pensionRule = null,
        string $contentType = self::contentTypes['calculateNetOfOnCostsTools'][0]
    ): PromiseInterface
    {
        $returnType = '\SynergiTech\Staffology\Model\ContractNetOfOnCostsResponse';
        $request = $this->calculateNetOfOnCostsToolsRequest($notionalDayRate, $fee, $feeIsPercentage, $employersPensionContribution, $employersPensionContributionIsPercentage, $employeesPensionContribution, $employeesPensionContributionIsPercentage, $useAeBandings, $holidayWeeks, $daysWorkedPerWeek, $payPeriod, $calculationDate, $apprenticeshipLevyRateOverride, $pensionRule, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'calculateNetOfOnCostsTools'
     *
     * @param  float $notionalDayRate The total chargeable rate per day. (required)
     * @param  float $fee The charge for providing this service, per pay period. (required)
     * @param  bool $feeIsPercentage If true, &#39;Fee&#39; will be treated as a percentage. (required)
     * @param  float $employersPensionContribution The employers pension contributions, per pay period. (required)
     * @param  bool $employersPensionContributionIsPercentage If true, EmployersPensionContribution will be treated as a percentage. (required)
     * @param  float $employeesPensionContribution The employees pension contributions, per pay period. (required)
     * @param  bool $employeesPensionContributionIsPercentage If true, EmployeesPensionContribution will be used as a percentage. (required)
     * @param  bool $useAeBandings If true, legislative Ae Bandings will be applied during calculation. (required)
     * @param  float $holidayWeeks The holiday weeks to use for the calculation. (required)
     * @param  int $daysWorkedPerWeek Number of days the employee works per week. (required)
     * @param  \SynergiTech\Staffology\Model\PayPeriods $payPeriod The pay frequency to be used for the calculation. (required)
     * @param  \DateTime|null $calculationDate Used to find associated legislative values, default Today. (optional)
     * @param  float|null $apprenticeshipLevyRateOverride Override the Apprenticeship Levy Rate. 0.50 for 0.5%. (optional)
     * @param  \SynergiTech\Staffology\Model\PensionRule|null $pensionRule The type of pension scheme being enrolled into, default SalarySacrifice. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['calculateNetOfOnCostsTools'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function calculateNetOfOnCostsToolsRequest(
        $notionalDayRate,
        $fee,
        $feeIsPercentage,
        $employersPensionContribution,
        $employersPensionContributionIsPercentage,
        $employeesPensionContribution,
        $employeesPensionContributionIsPercentage,
        $useAeBandings,
        $holidayWeeks,
        $daysWorkedPerWeek,
        $payPeriod,
        $calculationDate = null,
        $apprenticeshipLevyRateOverride = null,
        $pensionRule = null,
        string $contentType = self::contentTypes['calculateNetOfOnCostsTools'][0]
    ): Request
    {

        // verify the required parameter 'notionalDayRate' is set
        if ($notionalDayRate === null || (is_array($notionalDayRate) && count($notionalDayRate) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $notionalDayRate when calling calculateNetOfOnCostsTools'
            );
        }

        // verify the required parameter 'fee' is set
        if ($fee === null || (is_array($fee) && count($fee) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $fee when calling calculateNetOfOnCostsTools'
            );
        }

        // verify the required parameter 'feeIsPercentage' is set
        if ($feeIsPercentage === null || (is_array($feeIsPercentage) && count($feeIsPercentage) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $feeIsPercentage when calling calculateNetOfOnCostsTools'
            );
        }

        // verify the required parameter 'employersPensionContribution' is set
        if ($employersPensionContribution === null || (is_array($employersPensionContribution) && count($employersPensionContribution) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $employersPensionContribution when calling calculateNetOfOnCostsTools'
            );
        }

        // verify the required parameter 'employersPensionContributionIsPercentage' is set
        if ($employersPensionContributionIsPercentage === null || (is_array($employersPensionContributionIsPercentage) && count($employersPensionContributionIsPercentage) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $employersPensionContributionIsPercentage when calling calculateNetOfOnCostsTools'
            );
        }

        // verify the required parameter 'employeesPensionContribution' is set
        if ($employeesPensionContribution === null || (is_array($employeesPensionContribution) && count($employeesPensionContribution) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $employeesPensionContribution when calling calculateNetOfOnCostsTools'
            );
        }

        // verify the required parameter 'employeesPensionContributionIsPercentage' is set
        if ($employeesPensionContributionIsPercentage === null || (is_array($employeesPensionContributionIsPercentage) && count($employeesPensionContributionIsPercentage) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $employeesPensionContributionIsPercentage when calling calculateNetOfOnCostsTools'
            );
        }

        // verify the required parameter 'useAeBandings' is set
        if ($useAeBandings === null || (is_array($useAeBandings) && count($useAeBandings) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $useAeBandings when calling calculateNetOfOnCostsTools'
            );
        }

        // verify the required parameter 'holidayWeeks' is set
        if ($holidayWeeks === null || (is_array($holidayWeeks) && count($holidayWeeks) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $holidayWeeks when calling calculateNetOfOnCostsTools'
            );
        }

        // verify the required parameter 'daysWorkedPerWeek' is set
        if ($daysWorkedPerWeek === null || (is_array($daysWorkedPerWeek) && count($daysWorkedPerWeek) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $daysWorkedPerWeek when calling calculateNetOfOnCostsTools'
            );
        }

        // verify the required parameter 'payPeriod' is set
        if ($payPeriod === null || (is_array($payPeriod) && count($payPeriod) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payPeriod when calling calculateNetOfOnCostsTools'
            );
        }





        $resourcePath = '/tools/calculate-net-of-on-costs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $notionalDayRate,
            'NotionalDayRate', // param base name
            'number', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $calculationDate,
            'CalculationDate', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $fee,
            'Fee', // param base name
            'number', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $feeIsPercentage,
            'FeeIsPercentage', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $apprenticeshipLevyRateOverride,
            'ApprenticeshipLevyRateOverride', // param base name
            'number', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $employersPensionContribution,
            'EmployersPensionContribution', // param base name
            'number', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $employersPensionContributionIsPercentage,
            'EmployersPensionContributionIsPercentage', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $employeesPensionContribution,
            'EmployeesPensionContribution', // param base name
            'number', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $employeesPensionContributionIsPercentage,
            'EmployeesPensionContributionIsPercentage', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $useAeBandings,
            'UseAeBandings', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $holidayWeeks,
            'HolidayWeeks', // param base name
            'number', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $daysWorkedPerWeek,
            'DaysWorkedPerWeek', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $payPeriod,
            'PayPeriod', // param base name
            'PayPeriods', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $pensionRule,
            'PensionRule', // param base name
            'PensionRule', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption(): array
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
