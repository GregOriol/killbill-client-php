<?php

/*
 * Copyright 2011-2017 Ning, Inc.
 * Copyright 2014 Groupon, Inc.
 * Copyright 2014 The Billing Project, LLC
 *
 * The Billing Project licenses this file to you under the Apache License, version 2.0
 * (the "License"); you may not use this file except in compliance with the
 * License.  You may obtain a copy of the License at:
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace Killbill\Client\Type;

/*
 * DO NOT EDIT!!!
 * File automatically generated by killbill-java-parser (git@github.com:killbill/killbill-java-parser.git)
 */

/**
 * InvoiceDryRunAttributes
 */
class InvoiceDryRunAttributes extends \Killbill\Client\AbstractResource
{
    /** @var string|null */
    protected $dryRunType = null;
    /** @var string|null */
    protected $dryRunAction = null;
    /** @var string|null */
    protected $phaseType = null;
    /** @var string|null */
    protected $productName = null;
    /** @var string|null */
    protected $productCategory = null;
    /** @var string|null */
    protected $billingPeriod = null;
    /** @var string|null */
    protected $priceListName = null;
    /** @var string|null */
    protected $subscriptionId = null;
    /** @var string|null */
    protected $bundleId = null;
    /** @var string|null */
    protected $effectiveDate = null;
    /** @var string|null */
    protected $billingPolicy = null;
    /** @var PhasePriceOverrideAttributes[]|null */
    protected $priceOverrides = null;

    /**
     * @param string|null $dryRunType
     */
    public function setDryRunType($dryRunType)
    {
        $this->dryRunType = $dryRunType;
    }

    /**
     * @return string|null
     */
    public function getDryRunType()
    {
        return $this->dryRunType;
    }

    /**
     * @param string|null $dryRunAction
     */
    public function setDryRunAction($dryRunAction)
    {
        $this->dryRunAction = $dryRunAction;
    }

    /**
     * @return string|null
     */
    public function getDryRunAction()
    {
        return $this->dryRunAction;
    }

    /**
     * @param string|null $phaseType
     */
    public function setPhaseType($phaseType)
    {
        $this->phaseType = $phaseType;
    }

    /**
     * @return string|null
     */
    public function getPhaseType()
    {
        return $this->phaseType;
    }

    /**
     * @param string|null $productName
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    /**
     * @return string|null
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param string|null $productCategory
     */
    public function setProductCategory($productCategory)
    {
        $this->productCategory = $productCategory;
    }

    /**
     * @return string|null
     */
    public function getProductCategory()
    {
        return $this->productCategory;
    }

    /**
     * @param string|null $billingPeriod
     */
    public function setBillingPeriod($billingPeriod)
    {
        $this->billingPeriod = $billingPeriod;
    }

    /**
     * @return string|null
     */
    public function getBillingPeriod()
    {
        return $this->billingPeriod;
    }

    /**
     * @param string|null $priceListName
     */
    public function setPriceListName($priceListName)
    {
        $this->priceListName = $priceListName;
    }

    /**
     * @return string|null
     */
    public function getPriceListName()
    {
        return $this->priceListName;
    }

    /**
     * @param string|null $subscriptionId
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * @return string|null
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * @param string|null $bundleId
     */
    public function setBundleId($bundleId)
    {
        $this->bundleId = $bundleId;
    }

    /**
     * @return string|null
     */
    public function getBundleId()
    {
        return $this->bundleId;
    }

    /**
     * @param string|null $effectiveDate
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;
    }

    /**
     * @return string|null
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * @param string|null $billingPolicy
     */
    public function setBillingPolicy($billingPolicy)
    {
        $this->billingPolicy = $billingPolicy;
    }

    /**
     * @return string|null
     */
    public function getBillingPolicy()
    {
        return $this->billingPolicy;
    }

    /**
     * @param PhasePriceOverrideAttributes[]|null $priceOverrides
     */
    public function setPriceOverrides($priceOverrides)
    {
        $this->priceOverrides = $priceOverrides;
    }

    /**
     * @return PhasePriceOverrideAttributes[]|null
     */
    public function getPriceOverrides()
    {
        return $this->priceOverrides;
    }

    /**
     * @return string
     */
    public function getPriceOverridesType()
    {
        return PhasePriceOverrideAttributes::class;
    }

}
