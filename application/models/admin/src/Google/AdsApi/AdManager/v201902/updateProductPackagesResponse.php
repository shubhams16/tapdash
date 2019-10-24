<?php

namespace Google\AdsApi\AdManager\v201902;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateProductPackagesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201902\ProductPackage[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201902\ProductPackage[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201902\ProductPackage[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201902\ProductPackage[]|null $rval
     * @return \Google\AdsApi\AdManager\v201902\updateProductPackagesResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
