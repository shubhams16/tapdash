<?php

namespace Google\AdsApi\AdManager\v201811;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ExchangeRateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201811\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201811\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201811\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201811\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201811\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201811\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201811\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201811\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201811\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201811\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201811\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201811\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201811\\DateValue',
      'DeleteExchangeRates' => 'Google\\AdsApi\\AdManager\\v201811\\DeleteExchangeRates',
      'ExchangeRateAction' => 'Google\\AdsApi\\AdManager\\v201811\\ExchangeRateAction',
      'ExchangeRate' => 'Google\\AdsApi\\AdManager\\v201811\\ExchangeRate',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v201811\\ExchangeRateError',
      'ExchangeRatePage' => 'Google\\AdsApi\\AdManager\\v201811\\ExchangeRatePage',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201811\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201811\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201811\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201811\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201811\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201811\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201811\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201811\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201811\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201811\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201811\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201811\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201811\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201811\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201811\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201811\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201811\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201811\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201811\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201811\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201811\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201811\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201811\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201811\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201811\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201811\\Value',
      'createExchangeRatesResponse' => 'Google\\AdsApi\\AdManager\\v201811\\createExchangeRatesResponse',
      'getExchangeRatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201811\\getExchangeRatesByStatementResponse',
      'performExchangeRateActionResponse' => 'Google\\AdsApi\\AdManager\\v201811\\performExchangeRateActionResponse',
      'updateExchangeRatesResponse' => 'Google\\AdsApi\\AdManager\\v201811\\updateExchangeRatesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201811/ExchangeRateService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Creates new {@link ExchangeRate} objects.
     *
     * For each exchange rate, the following fields are required:
     * <ul>
     * <li>{@link ExchangeRate#currencyCode}</li>
     * <li>{@link ExchangeRate#exchangeRate} when {@link ExchangeRate#refreshRate} is
     * {@link ExchangeRateRefreshRate#FIXED}</li>
     * </ul>
     *
     * @param \Google\AdsApi\AdManager\v201811\ExchangeRate[] $exchangeRates
     * @return \Google\AdsApi\AdManager\v201811\ExchangeRate[]
     * @throws \Google\AdsApi\AdManager\v201811\ApiException
     */
    public function createExchangeRates(array $exchangeRates)
    {
      return $this->__soapCall('createExchangeRates', array(array('exchangeRates' => $exchangeRates)))->getRval();
    }

    /**
     * Gets a {@link ExchangeRatePage} of {@link ExchangeRate} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ExchangeRate#id}</td>
     * </tr>
     * <tr>
     * <td>{@code currencyCode}</td>
     * <td>{@link ExchangeRate#currencyCode}</td>
     * </tr>
     * <tr>
     * <td>{@code refreshRate}</td>
     * <td>{@link ExchangeRate#refreshRate}</td>
     * </tr>
     * <tr>
     * <td>{@code direction}</td>
     * <td>{@link ExchangeRate#direction}</td>
     * </tr>
     * <tr>
     * <td>{@code exchangeRate}</td>
     * <td>{@link ExchangeRate#exchangeRate}</td>
     * </tr>
     * </table>
     *
     * a set of exchange rates
     *
     * @param \Google\AdsApi\AdManager\v201811\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201811\ExchangeRatePage
     * @throws \Google\AdsApi\AdManager\v201811\ApiException
     */
    public function getExchangeRatesByStatement(\Google\AdsApi\AdManager\v201811\Statement $filterStatement)
    {
      return $this->__soapCall('getExchangeRatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs an action on {@link ExchangeRate} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ExchangeRate#id}</td>
     * </tr>
     * <tr>
     * <td>{@code currencyCode}</td>
     * <td>{@link ExchangeRate#currencyCode}</td>
     * </tr>
     * <tr>
     * <td>{@code refreshRate}</td>
     * <td>{@link ExchangeRate#refreshRate}</td>
     * </tr>
     * <tr>
     * <td>{@code direction}</td>
     * <td>{@link ExchangeRate#direction}</td>
     * </tr>
     * <tr>
     * <td>{@code exchangeRate}</td>
     * <td>{@link ExchangeRate#exchangeRate}</td>
     * </tr>
     * </table>
     *
     * a set of exchange rates
     *
     * @param \Google\AdsApi\AdManager\v201811\ExchangeRateAction $exchangeRateAction
     * @param \Google\AdsApi\AdManager\v201811\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201811\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201811\ApiException
     */
    public function performExchangeRateAction(\Google\AdsApi\AdManager\v201811\ExchangeRateAction $exchangeRateAction, \Google\AdsApi\AdManager\v201811\Statement $filterStatement)
    {
      return $this->__soapCall('performExchangeRateAction', array(array('exchangeRateAction' => $exchangeRateAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ExchangeRate} objects.
     *
     * @param \Google\AdsApi\AdManager\v201811\ExchangeRate[] $exchangeRates
     * @return \Google\AdsApi\AdManager\v201811\ExchangeRate[]
     * @throws \Google\AdsApi\AdManager\v201811\ApiException
     */
    public function updateExchangeRates(array $exchangeRates)
    {
      return $this->__soapCall('updateExchangeRates', array(array('exchangeRates' => $exchangeRates)))->getRval();
    }

}
