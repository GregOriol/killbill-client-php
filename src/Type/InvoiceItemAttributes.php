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

class InvoiceItemAttributes extends \Killbill\Client\Resource
{
    /** @var string|null */
    protected $invoiceItemId = null;
    /** @var string|null */
    protected $invoiceId = null;
    /** @var string|null */
    protected $linkedInvoiceItemId = null;
    /** @var string|null */
    protected $accountId = null;
    /** @var string|null */
    protected $childAccountId = null;
    /** @var string|null */
    protected $bundleId = null;
    /** @var string|null */
    protected $subscriptionId = null;
    /** @var string|null */
    protected $planName = null;
    /** @var string|null */
    protected $phaseName = null;
    /** @var string|null */
    protected $usageName = null;
    /** @var string|null */
    protected $itemType = null;
    /** @var string|null */
    protected $description = null;
    /** @var string|null */
    protected $startDate = null;
    /** @var string|null */
    protected $endDate = null;
    /** @var float|null */
    protected $amount = null;
    /** @var string|null */
    protected $currency = null;
    /** @var array|null */
    protected $childItems = null;
    /** @var array|null */
    protected $auditLogs = null;

    /**
     * @param string|null $invoiceItemId
     */
    public function setInvoiceItemId($invoiceItemId)
    {
        $this->invoiceItemId = $invoiceItemId;
    }

    /**
     * @return string|null
     */
    public function getInvoiceItemId()
    {
        return $this->invoiceItemId;
    }

    /**
     * @param string|null $invoiceId
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;
    }

    /**
     * @return string|null
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * @param string|null $linkedInvoiceItemId
     */
    public function setLinkedInvoiceItemId($linkedInvoiceItemId)
    {
        $this->linkedInvoiceItemId = $linkedInvoiceItemId;
    }

    /**
     * @return string|null
     */
    public function getLinkedInvoiceItemId()
    {
        return $this->linkedInvoiceItemId;
    }

    /**
     * @param string|null $accountId
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param string|null $childAccountId
     */
    public function setChildAccountId($childAccountId)
    {
        $this->childAccountId = $childAccountId;
    }

    /**
     * @return string|null
     */
    public function getChildAccountId()
    {
        return $this->childAccountId;
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
     * @param string|null $planName
     */
    public function setPlanName($planName)
    {
        $this->planName = $planName;
    }

    /**
     * @return string|null
     */
    public function getPlanName()
    {
        return $this->planName;
    }

    /**
     * @param string|null $phaseName
     */
    public function setPhaseName($phaseName)
    {
        $this->phaseName = $phaseName;
    }

    /**
     * @return string|null
     */
    public function getPhaseName()
    {
        return $this->phaseName;
    }

    /**
     * @param string|null $usageName
     */
    public function setUsageName($usageName)
    {
        $this->usageName = $usageName;
    }

    /**
     * @return string|null
     */
    public function getUsageName()
    {
        return $this->usageName;
    }

    /**
     * @param string|null $itemType
     */
    public function setItemType($itemType)
    {
        $this->itemType = $itemType;
    }

    /**
     * @return string|null
     */
    public function getItemType()
    {
        return $this->itemType;
    }

    /**
     * @param string|null $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string|null $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string|null $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param float|null $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return float|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string|null $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param array|null $childItems
     */
    public function setChildItems($childItems)
    {
        $this->childItems = $childItems;
    }

    /**
     * @return array|null
     */
    public function getChildItems()
    {
        return $this->childItems;
    }

    /**
     * @param array|null $auditLogs
     */
    public function setAuditLogs($auditLogs)
    {
        $this->auditLogs = $auditLogs;
    }

    /**
     * @return array|null
     */
    public function getAuditLogs()
    {
        return $this->auditLogs;
    }

}