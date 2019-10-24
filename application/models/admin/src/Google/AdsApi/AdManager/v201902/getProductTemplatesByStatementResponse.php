<?php

namespace Google\AdsApi\AdManager\v201902;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getProductTemplatesByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201902\ProductTemplatePage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201902\ProductTemplatePage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201902\ProductTemplatePage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201902\ProductTemplatePage $rval
     * @return \Google\AdsApi\AdManager\v201902\getProductTemplatesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
