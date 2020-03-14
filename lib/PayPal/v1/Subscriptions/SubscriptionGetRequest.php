<?php


namespace PayPal\v1\Subscriptions;


use BraintreeHttp\HttpRequest;class SubscriptionGetRequest extends HttpRequest
{
    function __construct($subscriptionId)
    {
        parent::__construct("/v1/billing/subscriptions/{subscription_id}?", "GET");

        $this->path = str_replace("{subscription_id}", urlencode($subscriptionId), $this->path);
        $this->headers["Content-Type"] = "application/json";
    }
}
