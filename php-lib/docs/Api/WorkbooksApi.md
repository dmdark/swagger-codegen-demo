# RoomsApi\WorkbooksApi

All URIs are relative to *https://rooms.vimbox.test-a101.skyeng.link*

Method | HTTP request | Description
------------- | ------------- | -------------
[**roomsServerApiV1WorkbooksByLessonsGet**](WorkbooksApi.md#roomsServerApiV1WorkbooksByLessonsGet) | **GET** /rooms/server-api/v1/workbooks/byLessons | Return workbooks with provided lessonIds
[**roomsServerApiV1WorkbooksHwFindBelongerForStudentAndStepPairsPost**](WorkbooksApi.md#roomsServerApiV1WorkbooksHwFindBelongerForStudentAndStepPairsPost) | **POST** /rooms/server-api/v1/workbooks/hw/findBelongerForStudentAndStepPairs | Найти \&quot;владельца\&quot;(ДЗ/Тест) для набора степ/студент.
[**roomsServerApiV1WorkbooksNotStartedHwCountGet**](WorkbooksApi.md#roomsServerApiV1WorkbooksNotStartedHwCountGet) | **GET** /rooms/server-api/v1/workbooks/notStartedHwCount | Return count not started homeworks


# **roomsServerApiV1WorkbooksByLessonsGet**
> \RoomsApi\Models\WorkbookWithLastRoomDate roomsServerApiV1WorkbooksByLessonsGet($lessonIds, $studentId, $projectName)

Return workbooks with provided lessonIds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = RoomsApi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RoomsApi\Api\WorkbooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lessonIds = array("lessonIds_example"); // string[] | Lesson ids
$studentId = 56; // int | Student id
$projectName = "vimbox"; // string | Project Name

try {
    $result = $apiInstance->roomsServerApiV1WorkbooksByLessonsGet($lessonIds, $studentId, $projectName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkbooksApi->roomsServerApiV1WorkbooksByLessonsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lessonIds** | [**string[]**](../Model/string.md)| Lesson ids | [optional]
 **studentId** | **int**| Student id | [optional]
 **projectName** | **string**| Project Name | [optional] [default to vimbox]

### Return type

[**\RoomsApi\Models\WorkbookWithLastRoomDate**](../Model/WorkbookWithLastRoomDate.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roomsServerApiV1WorkbooksHwFindBelongerForStudentAndStepPairsPost**
> \RoomsApi\Models\Belonger[] roomsServerApiV1WorkbooksHwFindBelongerForStudentAndStepPairsPost($studentStepPairs, $studentStepPairs2)

Найти \"владельца\"(ДЗ/Тест) для набора степ/студент.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = RoomsApi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RoomsApi\Api\WorkbooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$studentStepPairs = "studentStepPairs_example"; // string | 
$studentStepPairs2 = "studentStepPairs_example"; // string | Student Step Pairs

try {
    $result = $apiInstance->roomsServerApiV1WorkbooksHwFindBelongerForStudentAndStepPairsPost($studentStepPairs, $studentStepPairs2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkbooksApi->roomsServerApiV1WorkbooksHwFindBelongerForStudentAndStepPairsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **studentStepPairs** | **string**|  |
 **studentStepPairs2** | **string**| Student Step Pairs |

### Return type

[**\RoomsApi\Models\Belonger[]**](../Model/Belonger.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roomsServerApiV1WorkbooksNotStartedHwCountGet**
> int roomsServerApiV1WorkbooksNotStartedHwCountGet($studentId)

Return count not started homeworks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = RoomsApi\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RoomsApi\Api\WorkbooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$studentId = "studentId_example"; // string | 

try {
    $result = $apiInstance->roomsServerApiV1WorkbooksNotStartedHwCountGet($studentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkbooksApi->roomsServerApiV1WorkbooksNotStartedHwCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **studentId** | **string**|  | [optional]

### Return type

**int**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

