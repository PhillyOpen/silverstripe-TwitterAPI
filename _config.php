<?php

/* 
 * Twitter API (see http://dev.twitter.com/doc for reference
*/

/**
 * Set the OAuth token and secret for the single user application
 *
 *
 * NOTE:    Login to your Twitter account and setup your application before
 *          setting the oauth credentials and application keys
 **/
/* Set app oAuth credentials */

Twitter::setOAuthCredentials('consumer_key','consumer_secret');
/**
 * Set the Application token and secret
 *
 * NOTE:    Login to your Twitter account and setup your application before
 *          setting the oauth credentials and application keys
 **/
 
 /* Set app credentials */

Twitter::setApplicationCredentials('application_key','application_secret');
