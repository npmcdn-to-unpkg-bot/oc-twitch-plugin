<?php

return [
    'plugin' => [
        'name' => 'Twitch',
        'description' => 'Provides Twitch.tv integration services.'
    ],
    'settings' => [
        'channel_name' => 'Channel Name',
        'channel_description' => 'Name of the twitch channel.',
        'twitch_id_title' => 'Twitch ID',
        'twitch_id_description' => 'Channel name for live streams or video id for past broadcast.',
        'width_name' => 'Width',
        'width_description' => 'Width of the embed Stream/Video.',
        'height_name' => 'Height',
        'height_description' =>'Height of the embed Stream/Video.',
        'volume_name' => 'Volume',
        'volume_description' => 'Default Volume of the embed Stream/Video.',
        'limit_title' => 'Limit',
        'limit_description' => 'Limit of Items to show. Default: 10',
        'posts_no_posts' => 'Show Twitch Feed Posts.',
        'posts_no_posts_description' => 'Show Twitch Feed Posts.'
    ],
    'check' => [
        'name' => 'Twitch Online Check',
        'description' => 'Shows if a Channel is online.'
    ],
    'feed' => [
        'name' => 'Twitch Feed',
        'description' => 'Show Twitch Feed Posts.',
        'disabled' => 'This Channel Feed is disabled.'
    ],
    'toplist' => [
        'name' => 'Twitch Toplist',
        'description' => 'Outputs a Twitch Toplist.',
        'type_title' => 'Toplist Type'
    ],
    'stream' => [
        'name' => 'Twitch Stream',
        'description' => 'Embedding Twitch Live Streams & Videos',
        'type_title' => 'Type',
        'type_description' => 'Stream for live streams or Video for past broadcasts',
    ]
];
