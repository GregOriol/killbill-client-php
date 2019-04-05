# Killbill\Client\InvoicePaymentApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**completeInvoicePaymentTransaction**](InvoicePaymentApi.md#completeInvoicePaymentTransaction) | **PUT** /1.0/kb/invoicePayments/{paymentId} | Complete an existing transaction
[**createChargeback**](InvoicePaymentApi.md#createChargeback) | **POST** /1.0/kb/invoicePayments/{paymentId}/chargebacks | Record a chargeback
[**createChargebackReversal**](InvoicePaymentApi.md#createChargebackReversal) | **POST** /1.0/kb/invoicePayments/{paymentId}/chargebackReversals | Record a chargebackReversal
[**createInvoicePaymentCustomFields**](InvoicePaymentApi.md#createInvoicePaymentCustomFields) | **POST** /1.0/kb/invoicePayments/{paymentId}/customFields | Add custom fields to payment
[**createInvoicePaymentTags**](InvoicePaymentApi.md#createInvoicePaymentTags) | **POST** /1.0/kb/invoicePayments/{paymentId}/tags | Add tags to payment
[**createRefundWithAdjustments**](InvoicePaymentApi.md#createRefundWithAdjustments) | **POST** /1.0/kb/invoicePayments/{paymentId}/refunds | Refund a payment, and adjust the invoice if needed
[**deleteInvoicePaymentCustomFields**](InvoicePaymentApi.md#deleteInvoicePaymentCustomFields) | **DELETE** /1.0/kb/invoicePayments/{paymentId}/customFields | Remove custom fields from payment
[**deleteInvoicePaymentTags**](InvoicePaymentApi.md#deleteInvoicePaymentTags) | **DELETE** /1.0/kb/invoicePayments/{paymentId}/tags | Remove tags from payment
[**getInvoicePayment**](InvoicePaymentApi.md#getInvoicePayment) | **GET** /1.0/kb/invoicePayments/{paymentId} | Retrieve a payment by id
[**getInvoicePaymentCustomFields**](InvoicePaymentApi.md#getInvoicePaymentCustomFields) | **GET** /1.0/kb/invoicePayments/{paymentId}/customFields | Retrieve payment custom fields
[**getInvoicePaymentTags**](InvoicePaymentApi.md#getInvoicePaymentTags) | **GET** /1.0/kb/invoicePayments/{paymentId}/tags | Retrieve payment tags
[**modifyInvoicePaymentCustomFields**](InvoicePaymentApi.md#modifyInvoicePaymentCustomFields) | **PUT** /1.0/kb/invoicePayments/{paymentId}/customFields | Modify custom fields to payment

# **completeInvoicePaymentTransaction**
> completeInvoicePaymentTransaction($body, $xKillbillCreatedBy, $paymentId, $xKillbillReason, $xKillbillComment, $controlPluginName, $pluginProperty)

Complete an existing transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Killbill Api Key
$config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiKey', 'Bearer');// Configure API key authorization: Killbill Api Secret
$config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiSecret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiSecret', 'Bearer');// Configure HTTP basic authorization: basicAuth
$config = Killbill\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Killbill\Client\Api\InvoicePaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Killbill\Client\Model\PaymentTransaction(); // \Killbill\Client\Model\PaymentTransaction | 
$xKillbillCreatedBy = "xKillbillCreatedBy_example"; // string | 
$paymentId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$xKillbillReason = "xKillbillReason_example"; // string | 
$xKillbillComment = "xKillbillComment_example"; // string | 
$controlPluginName = array("controlPluginName_example"); // string[] | 
$pluginProperty = array("pluginProperty_example"); // string[] | 

try {
    $apiInstance->completeInvoicePaymentTransaction($body, $xKillbillCreatedBy, $paymentId, $xKillbillReason, $xKillbillComment, $controlPluginName, $pluginProperty);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentApi->completeInvoicePaymentTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Killbill\Client\Model\PaymentTransaction**](../Model/PaymentTransaction.md)|  |
 **xKillbillCreatedBy** | **string**|  |
 **paymentId** | [**string**](../Model/.md)|  |
 **xKillbillReason** | **string**|  | [optional]
 **xKillbillComment** | **string**|  | [optional]
 **controlPluginName** | [**string[]**](../Model/string.md)|  | [optional]
 **pluginProperty** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Killbill Api Key](../../README.md#Killbill Api Key), [Killbill Api Secret](../../README.md#Killbill Api Secret), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createChargeback**
> \Killbill\Client\Model\InvoicePayment createChargeback($body, $xKillbillCreatedBy, $paymentId, $xKillbillReason, $xKillbillComment, $pluginProperty)

Record a chargeback

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Killbill Api Key
$config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiKey', 'Bearer');// Configure API key authorization: Killbill Api Secret
$config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiSecret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiSecret', 'Bearer');// Configure HTTP basic authorization: basicAuth
$config = Killbill\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Killbill\Client\Api\InvoicePaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Killbill\Client\Model\InvoicePaymentTransaction(); // \Killbill\Client\Model\InvoicePaymentTransaction | 
$xKillbillCreatedBy = "xKillbillCreatedBy_example"; // string | 
$paymentId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$xKillbillReason = "xKillbillReason_example"; // string | 
$xKillbillComment = "xKillbillComment_example"; // string | 
$pluginProperty = array("pluginProperty_example"); // string[] | 

try {
    $result = $apiInstance->createChargeback($body, $xKillbillCreatedBy, $paymentId, $xKillbillReason, $xKillbillComment, $pluginProperty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentApi->createChargeback: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Killbill\Client\Model\InvoicePaymentTransaction**](../Model/InvoicePaymentTransaction.md)|  |
 **xKillbillCreatedBy** | **string**|  |
 **paymentId** | [**string**](../Model/.md)|  |
 **xKillbillReason** | **string**|  | [optional]
 **xKillbillComment** | **string**|  | [optional]
 **pluginProperty** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Killbill\Client\Model\InvoicePayment**](../Model/InvoicePayment.md)

### Authorization

[Killbill Api Key](../../README.md#Killbill Api Key), [Killbill Api Secret](../../README.md#Killbill Api Secret), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createChargebackReversal**
> \Killbill\Client\Model\InvoicePayment createChargebackReversal($body, $xKillbillCreatedBy, $paymentId, $xKillbillReason, $xKillbillComment, $pluginProperty)

Record a chargebackReversal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Killbill Api Key
$config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiKey', 'Bearer');// Configure API key authorization: Killbill Api Secret
$config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiSecret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiSecret', 'Bearer');// Configure HTTP basic authorization: basicAuth
$config = Killbill\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Killbill\Client\Api\InvoicePaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Killbill\Client\Model\InvoicePaymentTransaction(); // \Killbill\Client\Model\InvoicePaymentTransaction | 
$xKillbillCreatedBy = "xKillbillCreatedBy_example"; // string | 
$paymentId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$xKillbillReason = "xKillbillReason_example"; // string | 
$xKillbillComment = "xKillbillComment_example"; // string | 
$pluginProperty = array("pluginProperty_example"); // string[] | 

try {
    $result = $apiInstance->createChargebackReversal($body, $xKillbillCreatedBy, $paymentId, $xKillbillReason, $xKillbillComment, $pluginProperty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentApi->createChargebackReversal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Killbill\Client\Model\InvoicePaymentTransaction**](../Model/InvoicePaymentTransaction.md)|  |
 **xKillbillCreatedBy** | **string**|  |
 **paymentId** | [**string**](../Model/.md)|  |
 **xKillbillReason** | **string**|  | [optional]
 **xKillbillComment** | **string**|  | [optional]
 **pluginProperty** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Killbill\Client\Model\InvoicePayment**](../Model/InvoicePayment.md)

### Authorization

[Killbill Api Key](../../README.md#Killbill Api Key), [Killbill Api Secret](../../README.md#Killbill Api Secret), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createInvoicePaymentCustomFields**
> \Killbill\Client\Model\CustomField[] createInvoicePaymentCustomFields($body, $xKillbillCreatedBy, $paymentId, $xKillbillReason, $xKillbillComment)

Add custom fields to payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Killbill Api Key
$config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiKey', 'Bearer');// Configure API key authorization: Killbill Api Secret
$config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiSecret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiSecret', 'Bearer');// Configure HTTP basic authorization: basicAuth
$config = Killbill\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Killbill\Client\Api\InvoicePaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Killbill\Client\Model\CustomField()); // \Killbill\Client\Model\CustomField[] | 
$xKillbillCreatedBy = "xKillbillCreatedBy_example"; // string | 
$paymentId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$xKillbillReason = "xKillbillReason_example"; // string | 
$xKillbillComment = "xKillbillComment_example"; // string | 

try {
    $result = $apiInstance->createInvoicePaymentCustomFields($body, $xKillbillCreatedBy, $paymentId, $xKillbillReason, $xKillbillComment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentApi->createInvoicePaymentCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Killbill\Client\Model\CustomField[]**](../Model/CustomField.md)|  |
 **xKillbillCreatedBy** | **string**|  |
 **paymentId** | [**string**](../Model/.md)|  |
 **xKillbillReason** | **string**|  | [optional]
 **xKillbillComment** | **string**|  | [optional]

### Return type

[**\Killbill\Client\Model\CustomField[]**](../Model/CustomField.md)

### Authorization

[Killbill Api Key](../../README.md#Killbill Api Key), [Killbill Api Secret](../../README.md#Killbill Api Secret), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createInvoicePaymentTags**
> \Killbill\Client\Model\Tag[] createInvoicePaymentTags($body, $xKillbillCreatedBy, $paymentId, $xKillbillReason, $xKillbillComment)

Add tags to payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Killbill Api Key
$config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiKey', 'Bearer');// Configure API key authorization: Killbill Api Secret
$config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiSecret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiSecret', 'Bearer');// Configure HTTP basic authorization: basicAuth
$config = Killbill\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Killbill\Client\Api\InvoicePaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array("body_example"); // string[] | 
$xKillbillCreatedBy = "xKillbillCreatedBy_example"; // string | 
$paymentId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$xKillbillReason = "xKillbillReason_example"; // string | 
$xKillbillComment = "xKillbillComment_example"; // string | 

try {
    $result = $apiInstance->createInvoicePaymentTags($body, $xKillbillCreatedBy, $paymentId, $xKillbillReason, $xKillbillComment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentApi->createInvoicePaymentTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string[]**](../Model/string.md)|  |
 **xKillbillCreatedBy** | **string**|  |
 **paymentId** | [**string**](../Model/.md)|  |
 **xKillbillReason** | **string**|  | [optional]
 **xKillbillComment** | **string**|  | [optional]

### Return type

[**\Killbill\Client\Model\Tag[]**](../Model/Tag.md)

### Authorization

[Killbill Api Key](../../README.md#Killbill Api Key), [Killbill Api Secret](../../README.md#Killbill Api Secret), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRefundWithAdjustments**
> \Killbill\Client\Model\InvoicePayment createRefundWithAdjustments($body, $xKillbillCreatedBy, $paymentId, $xKillbillReason, $xKillbillComment, $externalPayment, $paymentMethodId, $pluginProperty)

Refund a payment, and adjust the invoice if needed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Killbill Api Key
$config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiKey', 'Bearer');// Configure API key authorization: Killbill Api Secret
$config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiSecret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiSecret', 'Bearer');// Configure HTTP basic authorization: basicAuth
$config = Killbill\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Killbill\Client\Api\InvoicePaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Killbill\Client\Model\InvoicePaymentTransaction(); // \Killbill\Client\Model\InvoicePaymentTransaction | 
$xKillbillCreatedBy = "xKillbillCreatedBy_example"; // string | 
$paymentId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$xKillbillReason = "xKillbillReason_example"; // string | 
$xKillbillComment = "xKillbillComment_example"; // string | 
$externalPayment = true; // bool | 
$paymentMethodId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$pluginProperty = array("pluginProperty_example"); // string[] | 

try {
    $result = $apiInstance->createRefundWithAdjustments($body, $xKillbillCreatedBy, $paymentId, $xKillbillReason, $xKillbillComment, $externalPayment, $paymentMethodId, $pluginProperty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentApi->createRefundWithAdjustments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Killbill\Client\Model\InvoicePaymentTransaction**](../Model/InvoicePaymentTransaction.md)|  |
 **xKillbillCreatedBy** | **string**|  |
 **paymentId** | [**string**](../Model/.md)|  |
 **xKillbillReason** | **string**|  | [optional]
 **xKillbillComment** | **string**|  | [optional]
 **externalPayment** | **bool**|  | [optional]
 **paymentMethodId** | [**string**](../Model/.md)|  | [optional]
 **pluginProperty** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Killbill\Client\Model\InvoicePayment**](../Model/InvoicePayment.md)

### Authorization

[Killbill Api Key](../../README.md#Killbill Api Key), [Killbill Api Secret](../../README.md#Killbill Api Secret), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInvoicePaymentCustomFields**
> deleteInvoicePaymentCustomFields($paymentId, $xKillbillCreatedBy, $customField, $xKillbillReason, $xKillbillComment)

Remove custom fields from payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Killbill Api Key
$config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiKey', 'Bearer');// Configure API key authorization: Killbill Api Secret
$config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiSecret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiSecret', 'Bearer');// Configure HTTP basic authorization: basicAuth
$config = Killbill\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Killbill\Client\Api\InvoicePaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$xKillbillCreatedBy = "xKillbillCreatedBy_example"; // string | 
$customField = array("customField_example"); // string[] | 
$xKillbillReason = "xKillbillReason_example"; // string | 
$xKillbillComment = "xKillbillComment_example"; // string | 

try {
    $apiInstance->deleteInvoicePaymentCustomFields($paymentId, $xKillbillCreatedBy, $customField, $xKillbillReason, $xKillbillComment);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentApi->deleteInvoicePaymentCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentId** | [**string**](../Model/.md)|  |
 **xKillbillCreatedBy** | **string**|  |
 **customField** | [**string[]**](../Model/string.md)|  | [optional]
 **xKillbillReason** | **string**|  | [optional]
 **xKillbillComment** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[Killbill Api Key](../../README.md#Killbill Api Key), [Killbill Api Secret](../../README.md#Killbill Api Secret), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInvoicePaymentTags**
> deleteInvoicePaymentTags($paymentId, $xKillbillCreatedBy, $tagDef, $xKillbillReason, $xKillbillComment)

Remove tags from payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Killbill Api Key
$config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiKey', 'Bearer');// Configure API key authorization: Killbill Api Secret
$config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiSecret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiSecret', 'Bearer');// Configure HTTP basic authorization: basicAuth
$config = Killbill\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Killbill\Client\Api\InvoicePaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$xKillbillCreatedBy = "xKillbillCreatedBy_example"; // string | 
$tagDef = array("tagDef_example"); // string[] | 
$xKillbillReason = "xKillbillReason_example"; // string | 
$xKillbillComment = "xKillbillComment_example"; // string | 

try {
    $apiInstance->deleteInvoicePaymentTags($paymentId, $xKillbillCreatedBy, $tagDef, $xKillbillReason, $xKillbillComment);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentApi->deleteInvoicePaymentTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentId** | [**string**](../Model/.md)|  |
 **xKillbillCreatedBy** | **string**|  |
 **tagDef** | [**string[]**](../Model/string.md)|  | [optional]
 **xKillbillReason** | **string**|  | [optional]
 **xKillbillComment** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[Killbill Api Key](../../README.md#Killbill Api Key), [Killbill Api Secret](../../README.md#Killbill Api Secret), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoicePayment**
> \Killbill\Client\Model\InvoicePayment getInvoicePayment($paymentId, $withPluginInfo, $withAttempts, $pluginProperty, $audit)

Retrieve a payment by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Killbill Api Key
$config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiKey', 'Bearer');// Configure API key authorization: Killbill Api Secret
$config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiSecret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiSecret', 'Bearer');// Configure HTTP basic authorization: basicAuth
$config = Killbill\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Killbill\Client\Api\InvoicePaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$withPluginInfo = true; // bool | 
$withAttempts = true; // bool | 
$pluginProperty = array("pluginProperty_example"); // string[] | 
$audit = "audit_example"; // string | 

try {
    $result = $apiInstance->getInvoicePayment($paymentId, $withPluginInfo, $withAttempts, $pluginProperty, $audit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentApi->getInvoicePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentId** | [**string**](../Model/.md)|  |
 **withPluginInfo** | **bool**|  | [optional]
 **withAttempts** | **bool**|  | [optional]
 **pluginProperty** | [**string[]**](../Model/string.md)|  | [optional]
 **audit** | **string**|  | [optional]

### Return type

[**\Killbill\Client\Model\InvoicePayment**](../Model/InvoicePayment.md)

### Authorization

[Killbill Api Key](../../README.md#Killbill Api Key), [Killbill Api Secret](../../README.md#Killbill Api Secret), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoicePaymentCustomFields**
> \Killbill\Client\Model\CustomField[] getInvoicePaymentCustomFields($paymentId, $audit)

Retrieve payment custom fields

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Killbill Api Key
$config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiKey', 'Bearer');// Configure API key authorization: Killbill Api Secret
$config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiSecret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiSecret', 'Bearer');// Configure HTTP basic authorization: basicAuth
$config = Killbill\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Killbill\Client\Api\InvoicePaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$audit = "audit_example"; // string | 

try {
    $result = $apiInstance->getInvoicePaymentCustomFields($paymentId, $audit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentApi->getInvoicePaymentCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentId** | [**string**](../Model/.md)|  |
 **audit** | **string**|  | [optional]

### Return type

[**\Killbill\Client\Model\CustomField[]**](../Model/CustomField.md)

### Authorization

[Killbill Api Key](../../README.md#Killbill Api Key), [Killbill Api Secret](../../README.md#Killbill Api Secret), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoicePaymentTags**
> \Killbill\Client\Model\Tag[] getInvoicePaymentTags($paymentId, $includedDeleted, $pluginProperty, $audit)

Retrieve payment tags

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Killbill Api Key
$config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiKey', 'Bearer');// Configure API key authorization: Killbill Api Secret
$config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiSecret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiSecret', 'Bearer');// Configure HTTP basic authorization: basicAuth
$config = Killbill\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Killbill\Client\Api\InvoicePaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$includedDeleted = true; // bool | 
$pluginProperty = array("pluginProperty_example"); // string[] | 
$audit = "audit_example"; // string | 

try {
    $result = $apiInstance->getInvoicePaymentTags($paymentId, $includedDeleted, $pluginProperty, $audit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentApi->getInvoicePaymentTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentId** | [**string**](../Model/.md)|  |
 **includedDeleted** | **bool**|  | [optional]
 **pluginProperty** | [**string[]**](../Model/string.md)|  | [optional]
 **audit** | **string**|  | [optional]

### Return type

[**\Killbill\Client\Model\Tag[]**](../Model/Tag.md)

### Authorization

[Killbill Api Key](../../README.md#Killbill Api Key), [Killbill Api Secret](../../README.md#Killbill Api Secret), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyInvoicePaymentCustomFields**
> modifyInvoicePaymentCustomFields($body, $xKillbillCreatedBy, $paymentId, $xKillbillReason, $xKillbillComment)

Modify custom fields to payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Killbill Api Key
$config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiKey', 'Bearer');// Configure API key authorization: Killbill Api Secret
$config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiSecret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiSecret', 'Bearer');// Configure HTTP basic authorization: basicAuth
$config = Killbill\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Killbill\Client\Api\InvoicePaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Killbill\Client\Model\CustomField()); // \Killbill\Client\Model\CustomField[] | 
$xKillbillCreatedBy = "xKillbillCreatedBy_example"; // string | 
$paymentId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$xKillbillReason = "xKillbillReason_example"; // string | 
$xKillbillComment = "xKillbillComment_example"; // string | 

try {
    $apiInstance->modifyInvoicePaymentCustomFields($body, $xKillbillCreatedBy, $paymentId, $xKillbillReason, $xKillbillComment);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentApi->modifyInvoicePaymentCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Killbill\Client\Model\CustomField[]**](../Model/CustomField.md)|  |
 **xKillbillCreatedBy** | **string**|  |
 **paymentId** | [**string**](../Model/.md)|  |
 **xKillbillReason** | **string**|  | [optional]
 **xKillbillComment** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[Killbill Api Key](../../README.md#Killbill Api Key), [Killbill Api Secret](../../README.md#Killbill Api Secret), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

