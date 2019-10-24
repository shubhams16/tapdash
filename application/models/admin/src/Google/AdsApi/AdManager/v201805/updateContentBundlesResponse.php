<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateContentBundlesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201805\ContentBundle[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201805\ContentBundle[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\ContentBundle[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\ContentBundle[]|null $rval
     * @return \Google\AdsApi\AdManager\v201805\updateContentBundlesResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
