<?php
/**
 * WorkbooksApi
 * PHP version 5
 *
 * @category Class
 * @package  RoomsApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Vimbox-rooms
 *
 * Beta
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RoomsApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use RoomsApi\ApiException;
use RoomsApi\Configuration;
use RoomsApi\HeaderSelector;
use RoomsApi\ObjectSerializer;

/**
 * WorkbooksApi Class Doc Comment
 *
 * @category Class
 * @package  RoomsApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorkbooksApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation roomsServerApiV1WorkbooksByLessonsGet
     *
     * Return workbooks with provided lessonIds
     *
     * @param  string[] $lessonIds Lesson ids (optional)
     * @param  int $studentId Student id (optional)
     * @param  string $projectName Project Name (optional, default to vimbox)
     *
     * @throws \RoomsApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \RoomsApi\Models\WorkbookWithLastRoomDate
     */
    public function roomsServerApiV1WorkbooksByLessonsGet($lessonIds = null, $studentId = null, $projectName = 'vimbox')
    {
        list($response) = $this->roomsServerApiV1WorkbooksByLessonsGetWithHttpInfo($lessonIds, $studentId, $projectName);
        return $response;
    }

    /**
     * Operation roomsServerApiV1WorkbooksByLessonsGetWithHttpInfo
     *
     * Return workbooks with provided lessonIds
     *
     * @param  string[] $lessonIds Lesson ids (optional)
     * @param  int $studentId Student id (optional)
     * @param  string $projectName Project Name (optional, default to vimbox)
     *
     * @throws \RoomsApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \RoomsApi\Models\WorkbookWithLastRoomDate, HTTP status code, HTTP response headers (array of strings)
     */
    public function roomsServerApiV1WorkbooksByLessonsGetWithHttpInfo($lessonIds = null, $studentId = null, $projectName = 'vimbox')
    {
        $returnType = '\RoomsApi\Models\WorkbookWithLastRoomDate';
        $request = $this->roomsServerApiV1WorkbooksByLessonsGetRequest($lessonIds, $studentId, $projectName);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoomsApi\Models\WorkbookWithLastRoomDate',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation roomsServerApiV1WorkbooksByLessonsGetAsync
     *
     * Return workbooks with provided lessonIds
     *
     * @param  string[] $lessonIds Lesson ids (optional)
     * @param  int $studentId Student id (optional)
     * @param  string $projectName Project Name (optional, default to vimbox)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function roomsServerApiV1WorkbooksByLessonsGetAsync($lessonIds = null, $studentId = null, $projectName = 'vimbox')
    {
        return $this->roomsServerApiV1WorkbooksByLessonsGetAsyncWithHttpInfo($lessonIds, $studentId, $projectName)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation roomsServerApiV1WorkbooksByLessonsGetAsyncWithHttpInfo
     *
     * Return workbooks with provided lessonIds
     *
     * @param  string[] $lessonIds Lesson ids (optional)
     * @param  int $studentId Student id (optional)
     * @param  string $projectName Project Name (optional, default to vimbox)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function roomsServerApiV1WorkbooksByLessonsGetAsyncWithHttpInfo($lessonIds = null, $studentId = null, $projectName = 'vimbox')
    {
        $returnType = '\RoomsApi\Models\WorkbookWithLastRoomDate';
        $request = $this->roomsServerApiV1WorkbooksByLessonsGetRequest($lessonIds, $studentId, $projectName);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'roomsServerApiV1WorkbooksByLessonsGet'
     *
     * @param  string[] $lessonIds Lesson ids (optional)
     * @param  int $studentId Student id (optional)
     * @param  string $projectName Project Name (optional, default to vimbox)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function roomsServerApiV1WorkbooksByLessonsGetRequest($lessonIds = null, $studentId = null, $projectName = 'vimbox')
    {

        $resourcePath = '/rooms/server-api/v1/workbooks/byLessons';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($lessonIds)) {
            $lessonIds = ObjectSerializer::serializeCollection($lessonIds, 'csv', true);
        }
        if ($lessonIds !== null) {
            $queryParams['lessonIds'] = ObjectSerializer::toQueryValue($lessonIds);
        }
        // query params
        if ($studentId !== null) {
            $queryParams['studentId'] = ObjectSerializer::toQueryValue($studentId);
        }
        // query params
        if ($projectName !== null) {
            $queryParams['projectName'] = ObjectSerializer::toQueryValue($projectName);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation roomsServerApiV1WorkbooksHwFindBelongerForStudentAndStepPairsPost
     *
     * Найти \"владельца\"(ДЗ/Тест) для набора степ/студент.
     *
     * @param  string $studentStepPairs  (required)
     * @param  string $studentStepPairs2 Student Step Pairs (required)
     *
     * @throws \RoomsApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \RoomsApi\Models\Belonger[]
     */
    public function roomsServerApiV1WorkbooksHwFindBelongerForStudentAndStepPairsPost($studentStepPairs, $studentStepPairs2)
    {
        list($response) = $this->roomsServerApiV1WorkbooksHwFindBelongerForStudentAndStepPairsPostWithHttpInfo($studentStepPairs, $studentStepPairs2);
        return $response;
    }

    /**
     * Operation roomsServerApiV1WorkbooksHwFindBelongerForStudentAndStepPairsPostWithHttpInfo
     *
     * Найти \"владельца\"(ДЗ/Тест) для набора степ/студент.
     *
     * @param  string $studentStepPairs  (required)
     * @param  string $studentStepPairs2 Student Step Pairs (required)
     *
     * @throws \RoomsApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \RoomsApi\Models\Belonger[], HTTP status code, HTTP response headers (array of strings)
     */
    public function roomsServerApiV1WorkbooksHwFindBelongerForStudentAndStepPairsPostWithHttpInfo($studentStepPairs, $studentStepPairs2)
    {
        $returnType = '\RoomsApi\Models\Belonger[]';
        $request = $this->roomsServerApiV1WorkbooksHwFindBelongerForStudentAndStepPairsPostRequest($studentStepPairs, $studentStepPairs2);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoomsApi\Models\Belonger[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation roomsServerApiV1WorkbooksHwFindBelongerForStudentAndStepPairsPostAsync
     *
     * Найти \"владельца\"(ДЗ/Тест) для набора степ/студент.
     *
     * @param  string $studentStepPairs  (required)
     * @param  string $studentStepPairs2 Student Step Pairs (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function roomsServerApiV1WorkbooksHwFindBelongerForStudentAndStepPairsPostAsync($studentStepPairs, $studentStepPairs2)
    {
        return $this->roomsServerApiV1WorkbooksHwFindBelongerForStudentAndStepPairsPostAsyncWithHttpInfo($studentStepPairs, $studentStepPairs2)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation roomsServerApiV1WorkbooksHwFindBelongerForStudentAndStepPairsPostAsyncWithHttpInfo
     *
     * Найти \"владельца\"(ДЗ/Тест) для набора степ/студент.
     *
     * @param  string $studentStepPairs  (required)
     * @param  string $studentStepPairs2 Student Step Pairs (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function roomsServerApiV1WorkbooksHwFindBelongerForStudentAndStepPairsPostAsyncWithHttpInfo($studentStepPairs, $studentStepPairs2)
    {
        $returnType = '\RoomsApi\Models\Belonger[]';
        $request = $this->roomsServerApiV1WorkbooksHwFindBelongerForStudentAndStepPairsPostRequest($studentStepPairs, $studentStepPairs2);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'roomsServerApiV1WorkbooksHwFindBelongerForStudentAndStepPairsPost'
     *
     * @param  string $studentStepPairs  (required)
     * @param  string $studentStepPairs2 Student Step Pairs (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function roomsServerApiV1WorkbooksHwFindBelongerForStudentAndStepPairsPostRequest($studentStepPairs, $studentStepPairs2)
    {
        // verify the required parameter 'studentStepPairs' is set
        if ($studentStepPairs === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $studentStepPairs when calling roomsServerApiV1WorkbooksHwFindBelongerForStudentAndStepPairsPost'
            );
        }
        // verify the required parameter 'studentStepPairs2' is set
        if ($studentStepPairs2 === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $studentStepPairs2 when calling roomsServerApiV1WorkbooksHwFindBelongerForStudentAndStepPairsPost'
            );
        }

        $resourcePath = '/rooms/server-api/v1/workbooks/hw/findBelongerForStudentAndStepPairs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // form params
        if ($studentStepPairs2 !== null) {
            $formParams['studentStepPairs'] = ObjectSerializer::toFormValue($studentStepPairs2);
        }
        // body params
        $_tempBody = null;
        if (isset($studentStepPairs)) {
            $_tempBody = $studentStepPairs;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation roomsServerApiV1WorkbooksNotStartedHwCountGet
     *
     * Return count not started homeworks
     *
     * @param  string $studentId  (optional)
     *
     * @throws \RoomsApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return int
     */
    public function roomsServerApiV1WorkbooksNotStartedHwCountGet($studentId = null)
    {
        list($response) = $this->roomsServerApiV1WorkbooksNotStartedHwCountGetWithHttpInfo($studentId);
        return $response;
    }

    /**
     * Operation roomsServerApiV1WorkbooksNotStartedHwCountGetWithHttpInfo
     *
     * Return count not started homeworks
     *
     * @param  string $studentId  (optional)
     *
     * @throws \RoomsApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function roomsServerApiV1WorkbooksNotStartedHwCountGetWithHttpInfo($studentId = null)
    {
        $returnType = 'int';
        $request = $this->roomsServerApiV1WorkbooksNotStartedHwCountGetRequest($studentId);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'int',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation roomsServerApiV1WorkbooksNotStartedHwCountGetAsync
     *
     * Return count not started homeworks
     *
     * @param  string $studentId  (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function roomsServerApiV1WorkbooksNotStartedHwCountGetAsync($studentId = null)
    {
        return $this->roomsServerApiV1WorkbooksNotStartedHwCountGetAsyncWithHttpInfo($studentId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation roomsServerApiV1WorkbooksNotStartedHwCountGetAsyncWithHttpInfo
     *
     * Return count not started homeworks
     *
     * @param  string $studentId  (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function roomsServerApiV1WorkbooksNotStartedHwCountGetAsyncWithHttpInfo($studentId = null)
    {
        $returnType = 'int';
        $request = $this->roomsServerApiV1WorkbooksNotStartedHwCountGetRequest($studentId);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'roomsServerApiV1WorkbooksNotStartedHwCountGet'
     *
     * @param  string $studentId  (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function roomsServerApiV1WorkbooksNotStartedHwCountGetRequest($studentId = null)
    {

        $resourcePath = '/rooms/server-api/v1/workbooks/notStartedHwCount';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($studentId !== null) {
            $queryParams['studentId'] = ObjectSerializer::toQueryValue($studentId);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
