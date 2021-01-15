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
     * @Given a deployed CAS service with :arg1 nodes
     */
    public function aDeployedCasServiceWithNodes($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given I have logged in node1 with a valid :arg1 and :arg2
     */
    public function iHaveLoggedInNodeWithAValidAnd($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Given I have got the :arg1 session for that user
     */
    public function iHaveGotTheSessionForThatUser($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I check the :arg1 in node2
     */
    public function iCheckTheInNode($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I get the correct :arg1 of the user that created the session
     */
    public function iGetTheCorrectOfTheUserThatCreatedTheSession($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I check the :arg1 in node3
     */
    public function iCheckTheInNode2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given I have logged in node2 with a valid :arg1 and :arg2
     */
    public function iHaveLoggedInNodeWithAValidAnd2($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @When I check the :arg1 in node1
     */
    public function iCheckTheInNode3($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given I have logged in node3 with a valid :arg1 and :arg2
     */
    public function iHaveLoggedInNodeWithAValidAnd3($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Given I have logged out that :arg1 in node1
     */
    public function iHaveLoggedOutThatInNode($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I get the message that describes it is an invalid :arg1
     */
    public function iGetTheMessageThatDescribesItIsAnInvalid($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I check the :arg1 in node :arg2
     */
    public function iCheckTheInNode4($arg1, $arg2)
    {
        throw new PendingException();
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
