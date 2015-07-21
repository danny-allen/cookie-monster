<?php

    class CookieMonster{

        /**
         * $path
         *
         * The path to use the cookie for.
         * 
         * @var string
         */
        public $path = "/";


        /**
         * bake
         *
         * Saves (creates OR updates) a cookie.
         * 
         * @param  string $name  The name of the cookie to store the value under.
         * @param  string $value The value to store in the cookie.
         * @param  int    $days  The number of days untill the cookie expires.
         * @return string        The value from the cookie we just saved.
         */
        public function bake($name, $value, $days = 7){

            //set the timestring for strtotime
            $timestring = '+'.$days.' day';
            $timestring .= ($days > 1)? 's' : ''; //plural?

            //set one.
            setcookie($name, $value, strtotime($timestring), $this->path);

            //make it available for this load
            $_COOKIE[$name] = $value;

            //return the cookie value
            return $_COOKIE[$name];
        }


        /**
         * eat
         *
         * Delete a cookie by name.
         * 
         * @param  string $name Name of the cookie to delete.
         */
        public function eat($name){

            //delete cookie - if set
            if(isset($_COOKIE[$name])){
                unset($_COOKIE[$name]);
                setcookie($name, '', time() - 3600, $this->path);
            }
        }


        /**
         * grab
         *
         * Get a cookie by name.
         * 
         * @param  string $name The name of the cookie to get.
         * @return string       The value of the cookie.
         */
        public function grab($name){

            //return the cookie
            return isset($_COOKIE[$name])? $_COOKIE[$name] : false;
        }
    }