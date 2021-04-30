<?php
require_once __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/app.php';
$container = $app->getContainer();
$container->set('project_id', getenv('GCLOUD_PROJECT'));
# [START gae_flex_pubsub_env]
$container->set('topic', 'my-new-topic-2');
$container->set('subscription', 'my-new-topic-2-sub');
# [END gae_flex_pubsub_env]
$app->run();
