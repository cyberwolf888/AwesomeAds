<?php

return array(
    // set your paypal credential
    'client_id' => 'AUJwOwvWAgokDTu5v9RGf3v1UxLr3xT0dJL8UwblO_xaknaV8I4CkdC13i-E9XM1yDcchPfWeu5VB54P',
    'secret' => 'EIH9Bv7FyjrSZIcdJd-FD7saWQeNTt_rryKxjK2W3BsssI70R7DycbVwQ0QuvRglV6Ed7Gk1VZv3NRhp',

    /**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 600,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);