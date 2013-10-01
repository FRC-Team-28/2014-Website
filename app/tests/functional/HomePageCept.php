<?php
$I = new TestGuy($scenario);
$I->wantTo('make sure I see Hello World on the Home Page');
$I->amOnPage('/');
$I->see('Hello World', 'h2');
