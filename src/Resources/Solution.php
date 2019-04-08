<?php

namespace Freshdesk\Resources;

use Freshdesk\Resources\Traits\AllTrait;
use Freshdesk\Resources\Traits\CreateTrait;
use Freshdesk\Resources\Traits\DeleteTrait;
use Freshdesk\Resources\Traits\UpdateTrait;
use Freshdesk\Resources\Traits\ViewTrait;

/**
 * Forum category resource
 *
 * This provides access to the forum category resources
 *
 * @package Api\Resources
 */
class Solution extends AbstractResource
{

    use AllTrait, CreateTrait, ViewTrait, UpdateTrait, DeleteTrait;

    /**
     * The resource endpoint
     *
     * @internal
     * @var string
     *
     */
    protected $endpoint = '/solutions';

    /**
     * List solution categories
     *
     * @param array|null $query
     * @return mixed|null
     * @throws \Freshdesk\Exceptions\AccessDeniedException
     * @throws \Freshdesk\Exceptions\ApiException
     * @throws \Freshdesk\Exceptions\AuthenticationException
     * @throws \Freshdesk\Exceptions\ConflictingStateException
     * @throws \Freshdesk\Exceptions\NotFoundException
     * @throws \Freshdesk\Exceptions\RateLimitExceededException
     * @throws \Freshdesk\Exceptions\UnsupportedContentTypeException
     * @throws \Freshdesk\Exceptions\MethodNotAllowedException
     * @throws \Freshdesk\Exceptions\UnsupportedAcceptHeaderException
     * @throws \Freshdesk\Exceptions\ValidationException
     */
    public function categories($endPoint = null, $locale = null, array $query = null)
    {
        if (empty($endPoint)) {
            $endPoint = 'categories/' . $locale;
        }

        return $this->api()->request('GET', $this->endpoint($endPoint), null, $query);
    }

    /**
     * List solution folders
     *
     * @var category id
     * @param array|null $query
     * @return mixed|null
     * @throws \Freshdesk\Exceptions\AccessDeniedException
     * @throws \Freshdesk\Exceptions\ApiException
     * @throws \Freshdesk\Exceptions\AuthenticationException
     * @throws \Freshdesk\Exceptions\ConflictingStateException
     * @throws \Freshdesk\Exceptions\NotFoundException
     * @throws \Freshdesk\Exceptions\RateLimitExceededException
     * @throws \Freshdesk\Exceptions\UnsupportedContentTypeException
     * @throws \Freshdesk\Exceptions\MethodNotAllowedException
     * @throws \Freshdesk\Exceptions\UnsupportedAcceptHeaderException
     * @throws \Freshdesk\Exceptions\ValidationException
     */
    public function folders($id, $endPoint = null, $locale = null, array $query = null)
    {
        if (empty($endPoint)) {
            $endPoint = 'categories/' . $id . '/folders/' . $locale;
        }

        return $this->api()->request('GET', $this->endpoint($endPoint), null, $query, $id);
    }

    /**
     * List solution categories
     *
     * @var folder id
     * @param array|null $query
     * @return mixed|null
     * @throws \Freshdesk\Exceptions\AccessDeniedException
     * @throws \Freshdesk\Exceptions\ApiException
     * @throws \Freshdesk\Exceptions\AuthenticationException
     * @throws \Freshdesk\Exceptions\ConflictingStateException
     * @throws \Freshdesk\Exceptions\NotFoundException
     * @throws \Freshdesk\Exceptions\RateLimitExceededException
     * @throws \Freshdesk\Exceptions\UnsupportedContentTypeException
     * @throws \Freshdesk\Exceptions\MethodNotAllowedException
     * @throws \Freshdesk\Exceptions\UnsupportedAcceptHeaderException
     * @throws \Freshdesk\Exceptions\ValidationException
     */
    public function articles($id, $endPoint = null, $locale = null, array $query = null)
    {
        if (empty($endPoint)) {
            $endPoint = 'folders/' . $id . '/articles/' . $locale;
        }

        return $this->api()->request('GET', $this->endpoint($endPoint), null, $query);
    }
}
