<?php
/**
 * Bootstraps the Theme.
 */

namespace AUTOLOADER\Inc;

use AUTOLOADER\Inc\Traits\Singleton;

class AUTOLOADER {
    use Singleton;

    protected function __construct() {

        // load class.
        $this->set_hooks();
    }

    protected function set_hooks() {
        // actions and filters
    }
}