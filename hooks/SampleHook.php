<?php

namespace Slackbot\Hooks;
require_once 'Hook.php';

class SampleHook extends Hook {
    
    /**
     * The declared name of this hook.
	 * @type String
     */
    protected $name = 'SampleHook';
    
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
