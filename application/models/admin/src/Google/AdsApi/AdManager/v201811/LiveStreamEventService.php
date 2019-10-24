<?php

namespace Google\AdsApi\AdManager\v201811;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LiveStreamEventService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201811\\ObjectValue',
      'ActivateLiveStreamEvents' => 'Google\\AdsApi\\AdManager\\v201811\\ActivateLiveStreamEvents',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201811\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201811\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201811\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201811\\ApplicationException',
      'ArchiveLiveStreamEvents' => 'Google\\AdsApi\\AdManager\\v201811\\ArchiveLiveStreamEvents',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201811\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201811\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201811\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201811\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201811\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201811\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201811\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201811\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201811\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201811\\FieldPathElement',
      'HlsSettings' => 'Google\\AdsApi\\AdManager\\v201811\\HlsSettings',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201811\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201811\\InvalidUrlError',
      'LiveStreamEventAction' => 'Google\\AdsApi\\AdManager\\v201811\\LiveStreamEventAction',
      'LiveStreamEventActionError' => 'Google\\AdsApi\\AdManager\\v201811\\LiveStreamEventActionError',
      'LiveStreamEventCdnSettingsError' => 'Google\\AdsApi\\AdManager\\v201811\\LiveStreamEventCdnSettingsError',
      'LiveStreamEventDateTimeError' => 'Google\\AdsApi\\AdManager\\v201811\\LiveStreamEventDateTimeError',
      'LiveStreamEvent' => 'Google\\AdsApi\\AdManager\\v201811\\LiveStreamEvent',
      'LiveStreamEventDvrWindowError' => 'Google\\AdsApi\\AdManager\\v201811\\LiveStreamEventDvrWindowError',
      'LiveStreamEventPage' => 'Google\\AdsApi\\AdManager\\v201811\\LiveStreamEventPage',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201811\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201811\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201811\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201811\\ParseError',
      'PauseLiveStreamEventAds' => 'Google\\AdsApi\\AdManager\\v201811\\PauseLiveStreamEventAds',
      'PauseLiveStreamEvents' => 'Google\\AdsApi\\AdManager\\v201811\\PauseLiveStreamEvents',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201811\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201811\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201811\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201811\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201811\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201811\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201811\\RequiredError',
      'SamSessionError' => 'Google\\AdsApi\\AdManager\\v201811\\SamSessionError',
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
      'createLiveStreamEventsResponse' => 'Google\\AdsApi\\AdManager\\v201811\\createLiveStreamEventsResponse',
      'getLiveStreamEventsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201811\\getLiveStreamEventsByStatementResponse',
      'performLiveStreamEventActionResponse' => 'Google\\AdsApi\\AdManager\\v201811\\performLiveStreamEventActionResponse',
      'registerSessionsForMonitoringResponse' => 'Google\\AdsApi\\AdManager\\v201811\\registerSessionsForMonitoringResponse',
      'updateLiveStreamEventsResponse' => 'Google\\AdsApi\\AdManager\\v201811\\updateLiveStreamEventsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201811/LiveStreamEventService?wsdl')
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
     * Creates new {@link LiveStreamEvent} objects.
     *
     * The following fields are required:
     * <ul>
     * <li>{@link LiveStreamEvent#name}</li>
     * <li>{@link LiveStreamEvent#startDateTime}</li>
     * <li>{@link LiveStreamEvent#endDateTime}</li>
     * <li>{@link LiveStreamEvent#contentUrls}</li>
     * <li>{@link LiveStreamEvent#adTags}</li>
     * </ul>
     *
     * @param \Google\AdsApi\AdManager\v201811\LiveStreamEvent[] $liveStreamEvents
     * @return \Google\AdsApi\AdManager\v201811\LiveStreamEvent[]
     * @throws \Google\AdsApi\AdManager\v201811\ApiException
     */
    public function createLiveStreamEvents(array $liveStreamEvents)
    {
      return $this->__soapCall('createLiveStreamEvents', array(array('liveStreamEvents' => $liveStreamEvents)))->getRval();
    }

    /**
     * Gets a {@link LiveStreamEventPage} of {@link LiveStreamEvent} objects that
     * satisfy the given {@link Statement#query}. The following fields are
     * supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link LiveStreamEvent#id}</td>
     * </tr>
     * </table>
     *
     * list of live stream events
     *
     * @param \Google\AdsApi\AdManager\v201811\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201811\LiveStreamEventPage
     * @throws \Google\AdsApi\AdManager\v201811\ApiException
     */
    public function getLiveStreamEventsByStatement(\Google\AdsApi\AdManager\v201811\Statement $filterStatement)
    {
      return $this->__soapCall('getLiveStreamEventsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link LiveStreamEvent} objects that match the given
     * {@link Statement#query}.
     *
     * a set of live stream events
     *
     * @param \Google\AdsApi\AdManager\v201811\LiveStreamEventAction $liveStreamEventAction
     * @param \Google\AdsApi\AdManager\v201811\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201811\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201811\ApiException
     */
    public function performLiveStreamEventAction(\Google\AdsApi\AdManager\v201811\LiveStreamEventAction $liveStreamEventAction, \Google\AdsApi\AdManager\v201811\Statement $filterStatement)
    {
      return $this->__soapCall('performLiveStreamEventAction', array(array('liveStreamEventAction' => $liveStreamEventAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Registers the specified list of {@code sessionIds} for monitoring. Once the session IDs have
     * been registered, all logged information about the sessions will be persisted and can be viewed
     * via the Ad Manager UI.
     *
     * <p>A session ID is a unique identifier of a single user watching a live stream event.
     *
     * @param string[] $sessionIds
     * @return string[]
     * @throws \Google\AdsApi\AdManager\v201811\ApiException
     */
    public function registerSessionsForMonitoring(array $sessionIds)
    {
      return $this->__soapCall('registerSessionsForMonitoring', array(array('sessionIds' => $sessionIds)))->getRval();
    }

    /**
     * Updates the specified {@link LiveStreamEvent} objects.
     *
     * @param \Google\AdsApi\AdManager\v201811\LiveStreamEvent[] $liveStreamEvents
     * @return \Google\AdsApi\AdManager\v201811\LiveStreamEvent[]
     * @throws \Google\AdsApi\AdManager\v201811\ApiException
     */
    public function updateLiveStreamEvents(array $liveStreamEvents)
    {
      return $this->__soapCall('updateLiveStreamEvents', array(array('liveStreamEvents' => $liveStreamEvents)))->getRval();
    }

}
