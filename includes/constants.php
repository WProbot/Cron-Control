<?php

namespace WP_Cron_Control_Revisited;

/**
 * Job queues
 */
const JOB_QUEUE_SIZE                  = 10;
const JOB_QUEUE_WINDOW_IN_SECONDS     = 60;
const JOB_EXECUTION_BUFFER_IN_SECONDS = 15;
const JOB_TIMEOUT_IN_MINUTES          = 10;
const JOB_CONCURRENCY_LIMIT           = 10;

/**
 * REST API
 */
const REST_API_NAMESPACE     = 'wp-cron-control-revisited/v1';
const REST_API_ENDPOINT_LIST = 'events';
const REST_API_ENDPOINT_RUN  = 'event';
