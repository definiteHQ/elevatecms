<?php
use Step\Acceptance\Admin as AdminTester;

class PostCest
{
    public function _before(AdminTester $I)
    {
    }

    public function _after(AdminTester $I)
    {
    }

    // tests
    public function createPost(AdminTester $I)
    {
        $I->loginAsAdmin();
        $I->amOnPage('backend/posts/create');
        $I->fillField('title', 'Unit Testing for Javascript with QUnit');
        $I->fillField('content', '
                <h1>Introduction</h1>
                <p>Hello guys, this is my first article to learn and share how we do unit-testing for better scripting with javascript. I wrote this article hoping that we all can make a great project and minifying the effort from bug and error in the future.</p>
                <p>Ok, so lets start learning this thing :D</p>
                <p>First of all, i wanna introduce little bit about unit-testing. Unit-testing itself is a methodology for developer&nbsp;to test each functions they will create&nbsp;for expecting the output for each needs. As we seen, nowadays many developer&nbsp;don’t care about this, especially the newbie programmer. So, many developer will do the repeated task to check the bug/error for the project they built. It takes many time and price consume.</p>
                <p>So, this methodology came out. With&nbsp;<strong>Unit Testing</strong>, we “developer” can create the expected result before going to write actual functional code first. From there, then we could test what a best practice for our code should be. So, we write our code and done doing stuff if the code are passed the tests.</p>
                <p>For example, if i’m gonna create some functional script to write “Hello World” to the console/output, then i was have many expectation. Like, what&nbsp;if the result is not “Hello World” string or else? So, before i’m creating the function, i will write the test code first. And then, I’m going to continue write the function and test each unit/code-line with my test file. And if there is an error, i can fix them immediately without waiting the function can be used in the project/program that i’ll be built with. After that, when my code inside the function has passed out the test, then my function will work 99% out of bugs/error. (The limitation of expected result is decided first from the developer, which is “me”).</p>
                <p>From that example, we can do much better, greater and fully controlled script on our project. That is what “<strong>Unit Testing</strong>” look a like.</p>
                <h2>The Language</h2>
                <p>There are many programming language that can adapt and use the “Unit Testing” methodology, but for my learning and tutorial, I’ll using&nbsp;<strong>Javascript</strong> as my main language (which is i’m using it since i’m a frontend developer) and use other related tools for learn this methodology.</p>
                <h2>QUnit: Javascript Unit Testing from jQuery</h2>
                <p style="text-align: center;"><img class="alignnone size-full wp-image-193" src="http://wiki.definite.co.id/wp-content/uploads/2016/11/qunit.png" alt="qunit" width="272" height="88" data-lazy-loaded="true" style="display: inline-block;">
                    <noscript>&lt;img class="alignnone size-full wp-image-193" src="http://wiki.definite.co.id/wp-content/uploads/2016/11/qunit.png" alt="qunit" width="272" height="88" /&gt;</noscript>
                </p>
                <p>Anddd, the tools I’ll be using for this tutorial is “<strong>QUnit</strong>” from the creator of jQuery. I can’t describe it completely, but you can read the official documentation <a href="https://qunitjs.com" target="_blank">here.</a></p>
            ');

        $I->fillField('excerpt', 'Hello guys, this is my first article to learn and share how we do unit-testing for better scripting with javascript. I wrote this article hoping that we all can make a great project and minifying the effort from bug and error in the future.');
        $I->fillField('seo_title', 'Unit Testing for Javascript with QUnit');
        $I->fillField('seo_content', 'First of all, i wanna introduce little bit about unit-testing. Unit-testing itself is a methodology for developer&nbsp;to test each functions they will create&nbsp;for expecting the output for each needs. As we seen, nowadays many developer&nbsp;don’t care about this, especially the newbie programmer. So, many developer will do the repeated task to check the bug/error for the project they built. It takes many time and price consume.');
        $I->click('Publish');
        $I->see('Post succesfully created!');
    }
}
