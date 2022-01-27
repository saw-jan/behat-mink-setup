<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\MinkExtension\Context\RawMinkContext;
use Page\LoginPage;
use PHPUnit\Framework\Assert;

/**
 * Defines application features from the specific context.
 */
class WebContext  extends RawMinkContext implements Context
{
    private $loginPage;

    public function __construct(LoginPage $loginPage)
    {
        $this->loginPage = $loginPage;
    }

    /**
     * @Given the user has visited to login page
     */
    public function theUserHasVisitedToLoginPage()
    {
        $this->loginPage->open();
    }

    /**
     * @When the user logs in with user :arg1 and password :arg2
     */
    public function theUserLogsInWithUserAndPassword($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Then the files page should be displayed
     */
    public function theFilesPageShouldBeDisplayed()
    {
        throw new PendingException();
    }


}
