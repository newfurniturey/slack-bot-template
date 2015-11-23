<?php

namespace Slackbot\Hooks;
require_once 'Hook.php';

class SampleHook extends Hook {
    
    /**
     * List of supported tokens.
     * @type Array
     */
    protected $tokens = array(
        'abcd1234dcba'
    );
    
    /**
     * List of supported triggers. (to be populated by subclasses)
     * @type Array
     */
    protected $triggers = array(
        '.hello'
    );
    
    /**
     * Processes the input text and returns the response for Slack.
     *
     * @param String $raw_text
     * @return String
     */
    public function process($trigger, $raw_text) {
        $text = trim(substr($raw_text, strlen($trigger) + 1));
        return $text;
    }
}
