<?php
/**
 * TeamMembersApi
 * PHP version 5
 *
 * @category Class
 * @package  SignRequest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SignRequest API
 *
 * API for SignRequest.com
 * OpenAPI spec version: v1
 * Contact: tech-support@signrequest.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.10
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SignRequest\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use SignRequest\ApiException;
use SignRequest\Configuration;
use SignRequest\HeaderSelector;
use SignRequest\ObjectSerializer;

/**
 * TeamMembersApi Class Doc Comment
 *
 * @category Class
 * @package  SignRequest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TeamMembersApi
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
     * @var HeaderSelector
     */
    protected $headerSelector;

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
     * Operation teamMembersList
     *
     * Retrieve a list of Team Members
     *
     * @param  string $is_active  (optional)
     * @param  string $is_owner  (optional)
     * @param  string $is_admin  (optional)
     * @param  string $user__email  (optional)
     * @param  string $user__first_name  (optional)
     * @param  string $user__last_name  (optional)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $limit Number of results to return per page. (optional)
     *
     * @throws \SignRequest\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SignRequest\Model\InlineResponse2006
     */
    public function teamMembersList($is_active = null, $is_owner = null, $is_admin = null, $user__email = null, $user__first_name = null, $user__last_name = null, $page = null, $limit = null)
    {
        list($response) = $this->teamMembersListWithHttpInfo($is_active, $is_owner, $is_admin, $user__email, $user__first_name, $user__last_name, $page, $limit);
        return $response;
    }

    /**
     * Operation teamMembersListWithHttpInfo
     *
     * Retrieve a list of Team Members
     *
     * @param  string $is_active  (optional)
     * @param  string $is_owner  (optional)
     * @param  string $is_admin  (optional)
     * @param  string $user__email  (optional)
     * @param  string $user__first_name  (optional)
     * @param  string $user__last_name  (optional)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $limit Number of results to return per page. (optional)
     *
     * @throws \SignRequest\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SignRequest\Model\InlineResponse2006, HTTP status code, HTTP response headers (array of strings)
     */
    public function teamMembersListWithHttpInfo($is_active = null, $is_owner = null, $is_admin = null, $user__email = null, $user__first_name = null, $user__last_name = null, $page = null, $limit = null)
    {
        $returnType = '\SignRequest\Model\InlineResponse2006';
        $request = $this->teamMembersListRequest($is_active, $is_owner, $is_admin, $user__email, $user__first_name, $user__last_name, $page, $limit);

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
                        '\SignRequest\Model\InlineResponse2006',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation teamMembersListAsync
     *
     * Retrieve a list of Team Members
     *
     * @param  string $is_active  (optional)
     * @param  string $is_owner  (optional)
     * @param  string $is_admin  (optional)
     * @param  string $user__email  (optional)
     * @param  string $user__first_name  (optional)
     * @param  string $user__last_name  (optional)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $limit Number of results to return per page. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function teamMembersListAsync($is_active = null, $is_owner = null, $is_admin = null, $user__email = null, $user__first_name = null, $user__last_name = null, $page = null, $limit = null)
    {
        return $this->teamMembersListAsyncWithHttpInfo($is_active, $is_owner, $is_admin, $user__email, $user__first_name, $user__last_name, $page, $limit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation teamMembersListAsyncWithHttpInfo
     *
     * Retrieve a list of Team Members
     *
     * @param  string $is_active  (optional)
     * @param  string $is_owner  (optional)
     * @param  string $is_admin  (optional)
     * @param  string $user__email  (optional)
     * @param  string $user__first_name  (optional)
     * @param  string $user__last_name  (optional)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $limit Number of results to return per page. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function teamMembersListAsyncWithHttpInfo($is_active = null, $is_owner = null, $is_admin = null, $user__email = null, $user__first_name = null, $user__last_name = null, $page = null, $limit = null)
    {
        $returnType = '\SignRequest\Model\InlineResponse2006';
        $request = $this->teamMembersListRequest($is_active, $is_owner, $is_admin, $user__email, $user__first_name, $user__last_name, $page, $limit);

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
     * Create request for operation 'teamMembersList'
     *
     * @param  string $is_active  (optional)
     * @param  string $is_owner  (optional)
     * @param  string $is_admin  (optional)
     * @param  string $user__email  (optional)
     * @param  string $user__first_name  (optional)
     * @param  string $user__last_name  (optional)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $limit Number of results to return per page. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function teamMembersListRequest($is_active = null, $is_owner = null, $is_admin = null, $user__email = null, $user__first_name = null, $user__last_name = null, $page = null, $limit = null)
    {

        $resourcePath = '/team-members/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($is_active !== null) {
            $queryParams['is_active'] = ObjectSerializer::toQueryValue($is_active);
        }
        // query params
        if ($is_owner !== null) {
            $queryParams['is_owner'] = ObjectSerializer::toQueryValue($is_owner);
        }
        // query params
        if ($is_admin !== null) {
            $queryParams['is_admin'] = ObjectSerializer::toQueryValue($is_admin);
        }
        // query params
        if ($user__email !== null) {
            $queryParams['user__email'] = ObjectSerializer::toQueryValue($user__email);
        }
        // query params
        if ($user__first_name !== null) {
            $queryParams['user__first_name'] = ObjectSerializer::toQueryValue($user__first_name);
        }
        // query params
        if ($user__last_name !== null) {
            $queryParams['user__last_name'] = ObjectSerializer::toQueryValue($user__last_name);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
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
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
     * Operation teamMembersRead
     *
     * Retrieve a Team Member
     *
     * @param  string $uuid uuid (required)
     *
     * @throws \SignRequest\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SignRequest\Model\TeamMember
     */
    public function teamMembersRead($uuid)
    {
        list($response) = $this->teamMembersReadWithHttpInfo($uuid);
        return $response;
    }

    /**
     * Operation teamMembersReadWithHttpInfo
     *
     * Retrieve a Team Member
     *
     * @param  string $uuid (required)
     *
     * @throws \SignRequest\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SignRequest\Model\TeamMember, HTTP status code, HTTP response headers (array of strings)
     */
    public function teamMembersReadWithHttpInfo($uuid)
    {
        $returnType = '\SignRequest\Model\TeamMember';
        $request = $this->teamMembersReadRequest($uuid);

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
                        '\SignRequest\Model\TeamMember',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation teamMembersReadAsync
     *
     * Retrieve a Team Member
     *
     * @param  string $uuid (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function teamMembersReadAsync($uuid)
    {
        return $this->teamMembersReadAsyncWithHttpInfo($uuid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation teamMembersReadAsyncWithHttpInfo
     *
     * Retrieve a Team Member
     *
     * @param  string $uuid (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function teamMembersReadAsyncWithHttpInfo($uuid)
    {
        $returnType = '\SignRequest\Model\TeamMember';
        $request = $this->teamMembersReadRequest($uuid);

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
     * Create request for operation 'teamMembersRead'
     *
     * @param  string $uuid (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function teamMembersReadRequest($uuid)
    {
        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $uuid when calling teamMembersRead'
            );
        }

        $resourcePath = '/team-members/{uuid}/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($uuid !== null) {
            $resourcePath = str_replace(
                '{' . 'uuid' . '}',
                ObjectSerializer::toPathValue($uuid),
                $resourcePath
            );
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
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
