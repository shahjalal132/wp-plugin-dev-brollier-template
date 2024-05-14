<?php
/**
 * Bootstraps the plugin.
 */

namespace AUTOLOADER\Inc;

use AUTOLOADER\Inc\Traits\Singleton;

class AUTOLOADER {
    use Singleton;

    protected function __construct() {

        // load class.

        
        // invoke hooks
        $this->set_hooks();
    }

    protected function set_hooks() {
        // actions and filters
    }
}