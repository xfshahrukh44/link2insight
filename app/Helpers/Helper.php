<?php

use App\Models\FacebookPage;
use App\Models\FacebookPageMeta;

function get_page_info ($urls) {
    try {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:3044',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
  "urls": ["https://example.com", "https://example.org"]
}',
            CURLOPT_HTTPHEADER => array(
                'lang: 3',
                'Content-Type: application/json',
                'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOjE1LCJpZCI6MTUsImZpcnN0X25hbWUiOiJjZWRyaWMiLCJsYXN0X25hbWUiOiJtYXlhIiwiZW1haWwiOiJhc2Q0NDFAbWFpbGluYXRvci5jb20iLCJwaG9uZSI6IjEyMzQ2NzgiLCJwYXNzd29yZCI6IiQyYiQxMCRIQlYzT1BzZHFNZkxYZGtZL0hVdU91MjBsb3JpS0t3SkVFSmQ2TmtTQ2d2RW8yR3lLeGdRUyIsInJvbGVfaWQiOjEsInByb2ZpbGVfcGljdHVyZSI6Imh0dHBzOi8vbG9jYWxob3N0OjMwMTMvdXBsb2Fkcy91c2Vycy9UZDlLR1BvVm5RdnZKYTBmcWNnUi5qcGciLCJvdHAiOiI4MjM1MTYiLCJvdHBfZXhwaXJlc19hdCI6IjE2OTA4NDY0MjY5OTciLCJibG9ja2VkX2F0IjpudWxsLCJmY21fdG9rZW4iOm51bGwsImJsb2NrZWRfdXNlcnMiOm51bGwsImNyZWF0ZWRfYXQiOm51bGwsImlhdCI6MTY5MjA0MTQ3NywiZXhwIjoxNzIzNTk5MDc3fQ.fnFHWPpScWzgyA_w_Hl1_w-4GW5OQ6CMdd18FbDN6PI'
            ),
        ));

//        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
//        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//        curl_setopt($curl, CURLOPT_PROXY, $_SERVER['SERVER_ADDR'] . ':' .  $_SERVER['SERVER_PORT']);
        $response = curl_exec($curl);

        // Check the return value of curl_exec(), too
        if ($response === false) {
            throw new Exception(curl_error($curl), curl_errno($curl));
        }

        curl_close($curl);
        return json_decode($response);
    } catch (\Exception $e) {
//        trigger_error(sprintf(
//            'Curl failed with error #%d: %s',
//            $e->getCode(), $e->getMessage()),
//            E_USER_ERROR);
        return [];
    }
}

function store_fetched_page_info ($data) {
    if (count($data) == 0) {
        return false;
    }

    foreach ($data as $page) {
        if (!$facebook_page = FacebookPage::where('url', $page->url)->first()) {
            continue;
        }

        foreach ($page as $key => $value) {
            if ($value == "") {
                continue;
            }

            FacebookPageMeta::create([
                'facebook_page_id' => $facebook_page->id,
                'key' => $key,
                'value' => $value,
            ]);
        }
    }
}
