# CookieMonster

## Details

An object making cookie management a little easier, stopping repetative checks etc...

## Installing

Just include the object and use it as shown below.

## Usage


    //instantiate cookie object
    $cookieMonster = new CookieMonster();

    //store or update your cookie - the default number of days to store is 7
    $cookieMonster->bake('cookieName', 'cookieValue');

    //store your cookie for 14 days
    $cookieMonster->bake('cookieName', 'cookieValue', 14);

    //get your cookie
    $cookieMonster->grab('cookieName');

    //destory your cookie
    $cookieMonster->eat('cookieName');


## Options

| Option 	    		| Default value    	| Description   							|
| --------------------- |-------------------| ------------------------------------------|
| path		    		| /					| The path to use the cookie for.			|
