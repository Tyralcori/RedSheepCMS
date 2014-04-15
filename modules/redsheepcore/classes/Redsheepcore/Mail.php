<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Redsheepmail
 * Handles mail
 * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
 * @since 2014/04/14
 */
class Redsheepcore_Mail {

    /**
     * Simple Mailpattern
     * @var type 
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/15
     */
    private static $_mailPattern;

    /**
     * Getter for mailPattern
     * @return type
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/15
     */
    public static function getMailPattern() {
        // Return Mailpattern
        return self::$_mailPattern;
    }

    /**
     * Setter for mailPattern
     * @param type $pattern
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/15
     */
    public static function setMailPattern($pattern = null) {
        // Must not be empty
        if (empty($pattern)) {
            return false;
        }
        // Set pattern
        self::$_mailPattern = $pattern;
    }

    /**
     * Inits the mail transport
     * @param type $pattern
     * @param type $emails
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/14
     */
    public static function initMail($pattern = null, $emails = null) {
        // Both of them must not be empty
        if (empty($pattern) || empty($emails)) {
            return false;
        }

        // Get current mailPattern by name
        $mailPattern = ORM::factory('mailpattern')->where('name', '=', $pattern)->find();

        // Just for other functions
        self::setMailPattern($mailPattern);

        // Is text html?
        if ($mailPattern->sendHTML == 1) {
            $type = 'html';
        } else {
            $type = 'text';            
        }
        
        // Get message by type
        $message = self::getMessage($type);
        
        // We won't send any empty messages. 
        if (empty($message)) {
            return false;
        }

        // Update mailHeader
        $mailPattern->header = self::makePrettyHeader($mailPattern->header, $type);
        
        // Get all valid emails
        $validEmails = self::getValidEmails($emails);

        // Iterate emails
        foreach ($validEmails as $keyEmail => $email) {
            // Replace more vars in function
            $replacedMessage = self::setReplacements($email, $message);

            // Safe.. :S
            try {
                // Replace following
                $headerReplace = array('%from%', '%replyto%');
                
                // Includes the new header values
                $headerValues = array($mailPattern->from, $email);
                
                // Replace header stuff
                $newHeader = str_replace($headerReplace, $headerValues, $mailPattern->header);
                
                // Send it
                $mailSent = mail($email, $mailPattern->subject, $replacedMessage, $newHeader);
            } catch (Exception $e) {
                // Bla bla..
            }
        }
        
        // @todo: Yeah i just have to check some things
        return true;
    }

    /**
     * Get message - returns message
     * @param type $type
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/15
     */
    private static function getMessage($type = null) {
        // Type (text|html) must not be empty
        if (empty($type)) {
            return false;
        }

        // Current patterm
        $currentPattern = self::getMailPattern();

        // Check, if type (text|html) is isset on object
        $tempText = isset($currentPattern->$type) ? $currentPattern->$type : '';

        // If empty text, return false
        if (empty($tempText)) {
            return false;
        }

        // Return given text
        return $tempText;
    }

    /**
     * Get email and message, replace all vars / placeholders in message, return fine message
     * @param type $email
     * @param type $message
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/15
     */
    private static function setReplacements($email = null, $message = null) {
        // This must not be empty!
        if(empty($email) || empty($message)) {
            return false;
        }
        
        // Get current subscriber infos
        $currentSubscriber = ORM::factory('subscribe')->where('email', '=', $email)->find();
        
        // Replace vars
        $replaceVars = array('%firstname%', '%lastname%');
        
        // Replace to..
        $replaceTo = array($currentSubscriber->firstname, $currentSubscriber->lastname);
        
        // Clean message
        $clearedMessage = str_replace($replaceVars, $replaceTo, $message);
        
        // Now return
        return $clearedMessage;
    }

    /**
     * Get all the valid emails!
     * @param type $emails
     * @return boolean
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/15
     */
    private static function getValidEmails($emails = null) {
        // Must not be empty
        if (empty($emails)) {
            return false;
        }

        // Contains valid emails
        $validEmailContainer = array();

        // If is array, iterate all elements
        if (is_array($emails)) {
            // Per iteration ..
            foreach ($emails as $key => $email) {
                // .. check if email is valid
                if (filter_var($emails, FILTER_VALIDATE_EMAIL)) {
                    // If so, add into container
                    $validEmailContainer[] = $email;
                }
            }
            // Else anything else is typeof 
        } else {
            // If "anything else" is a valid email ..
            if (filter_var($emails, FILTER_VALIDATE_EMAIL)) {
                // .. add into container
                $validEmailContainer[] = $emails;
            }
        }

        // Just return.
        return $validEmailContainer;
    }
    
    /**
     * Generate mail header
     * @param type $header
     * @param string $type
     * @return string
     * @author Alexander Czichelski <a.czichelski@elitecoder.eu>
     * @since 2014/04/15
     */
    private static function makePrettyHeader($header = null, $type = null) {
        // Default type. Your problem, if you wont give me the type. (You only had one job..)
        if(empty($type)) {
            $type = 'text';
        }
        
        // Must not be empty
        if(empty($header)) {
            $header = 'From: %from%' . "\r\n" .
                      'Reply-To: %replyto%' . "\r\n" .
                      'X-Mailer: PHP/' . phpversion();
        }
        
        // Add some infos, if html
        if($type == 'html') {
            $header .= 'MIME-Version: 1.0' . "\r\n" . 
                       'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        }
        
        // Return our new header
        return $header;                
    }

}

?>
