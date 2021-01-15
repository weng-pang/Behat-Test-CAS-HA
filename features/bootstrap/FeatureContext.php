<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        
    }

    /**
     * @Given a deployed CAS service with :count nodes
     */
    public function aDeployedCasServiceWithNodes($count)
    {
        echo $count. "\n";
        //throw new PendingException();
    }

    /**
     * @Given I have logged in node1 with a valid :username and :password
     */
    public function iHaveLoggedInNodeWithAValidAnd($username, $password)
    {
        echo 'node1 login ' . $username . " " . $password . "\n";
        //throw new PendingException();
    }

    /**
     * @Given I have got the :ticket session for that user
     */
    public function iHaveGotTheSessionForThatUser($ticket)
    {
        echo $ticket. " obtained \n";
        //throw new PendingException();
    }

    /**
     * @When I check the :ticket in node1
     */
    public function iCheckTheInNode1($ticket)
    {
        echo 'checking ticket in node 1'."\n";
        //throw new PendingException();
    }

    /**
     * @Then I get the correct :username of the user that created the session
     */
    public function iGetTheCorrectOfTheUserThatCreatedTheSession($username)
    {
        echo 'username for session' ."\n";
        //throw new PendingException();
    }

    /**
     * @When I check the :ticket in node2
     */
    public function iCheckTheInNode2($ticket)
    {
        echo 'checking ticket in node 2'."\n";
        //throw new PendingException();
    }

    /**
     * @Given I have logged in node2 with a valid :username and :password
     */
    public function iHaveLoggedInNodeWithAValidAnd2($username, $password)
    {
        echo 'node2 login' . $username . " " . $password . "\n";
        //throw new PendingException();
    }

    /**
     * @When I check the :ticket in node3
     */
    public function iCheckTheInNode3($ticket)
    {
        echo 'checking ticket in node 3'."\n";
        //throw new PendingException();
    }

    /**
     * @Given I have logged in node3 with a valid :username and :password
     */
    public function iHaveLoggedInNodeWithAValidAnd3($username, $password)
    {
        echo 'node3 login' . $username . " " . $password . "\n";
        //throw new PendingException();
    }

    /**
     * @Given I have logged out that :ticket in node1
     */
    public function iHaveLoggedOutThatInNode($ticket)
    {
        echo 'node1 logout ' . $ticket . "\n";
        //throw new PendingException();
    }

    /**
     * @Then I get the message that describes it is an invalid :ticket
     */
    public function iGetTheMessageThatDescribesItIsAnInvalid($ticket)
    {
        echo 'invalid ticket shown ' . $ticket . "\n";
        //throw new PendingException();
    }



    /**
     * @Given I have logged out that :arg1 in node2
     */
    public function iHaveLoggedOutThatInNode2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given I have logged out that :arg1 in node3
     */
    public function iHaveLoggedOutThatInNode3($arg1)
    {
        throw new PendingException();
    }
}
