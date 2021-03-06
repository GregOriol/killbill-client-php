<?php

/*
* Copyright 2011-2017 Ning, Inc.
 *
 * Ning licenses this file to you under the Apache License, version 2.0
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

namespace Killbill\Client;

use Killbill\Client\Swagger\Model\Catalog;

/**
 * Tests for ServerCatalog
 */
class ServerCatalogTest extends KillbillTest
{
    /**
     * Tear down test
     */
    public function tearDown(): void
    {
        parent::tearDown();
        unset($this->externalBundleId);
        unset($this->account);
    }

    /**
     * Test basic API
     */
    public function testBasic()
    {
        /** @var Catalog $catalog */
        list($catalog) = $this->client->getCatalogApi()->getCatalogJson();
        self::assertCount(6, $catalog->getProducts());

        //check XML
        $xml = $this->client->getCatalogApi()->getCatalogXml();
        $dom = new \DOMDocument();
        $dom->loadXml($xml);
        $xp = new \DOMXPath($dom);
        self::assertSame(6.0, $xp->evaluate('count(//versions[1]/version/products/product)'));
    }
}
