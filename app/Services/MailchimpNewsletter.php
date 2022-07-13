<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class MailchimpNewsletter implements Newsletter
{
    protected ApiClient $client; //need to add this since I'm using PHP 7.4.3
    // with PHP 8 it should be (protected ApiClient $client) {}
    // apparently it's called a promoted constructor arc
    public function __construct(ApiClient $client)
    {
        $this->client = $client; //need to add this since I'm using PHP 7.4.3
    }

    public function subscribe(string $email, string $list = null)
    {
        $list ??= config('services.mailchimp.lists.subscribers');

        return $this->client->lists->addListMember($list, [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
    }
}