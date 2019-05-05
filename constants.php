<?php
/*
|--------------------------------------------------------------------------
| JWT secreate key
|--------------------------------------------------------------------------
*/
define('SECRETE_KEY',       '_a2JusEokyNd_8QAxLVDNA3_AO6_Dr3rt_lX7j6oIrFv1qOgJ_ZzRRP'); // secrete key
define('EMPTY_SHA512',       'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e'); // secrete key
/*
|--------------------------------------------------------------------------
| Cookie data
|--------------------------------------------------------------------------
*/
define('COOKIE_NAME',             'auth_token'); 
define('COOKIE_PATH',                      '/'); 
define('COOKIE_DOMAIN',                     ''); 
define('COOKIE_SECURE',                  false); 
define('COOKIE_HTTPONLY',                 true);
/*
/*
|--------------------------------------------------------------------------
| Data Types
|--------------------------------------------------------------------------
*/
define('BOOLEAN',                    '1'); // no errors
define('INTERGER',                   '2'); // no errors
define('STRING',                     '3'); // no errors
/*
|--------------------------------------------------------------------------
| RESTfull Error Codes
|--------------------------------------------------------------------------
*/
define('SUCCESS',                       200);
define('CREATED',                       201);
define('ACCEPTED',                      202);
define('NO_CONTENT',                    204);//
define('RESET_CONTENT',                 205);//
define('PARTIAL_CONTENT',               206);
define('ALREADY_EXIST',                 207);

define('BAD_REQUEST',                   400); 
define('UNAUTHORISED',                  401);
define('FORBIDDEN',                     403); 

define('REQUEST_METHOD_NOT_ALLOWED',    405); 
define('UNSUPPORTED_CONTENT_TYPE',      415);

define('INVALID_CREDENTIALS',           422); 
define('VALIDATE_PARAMETER_REQUIRED',   404); 
define('VALIDATE_PARAMETER_DATATYPE',   404); 
define('API_NAME_REQUIRED',             404);
define('API_PARAM_REQUIRED',            404); 
define('API_DOES_NOT_EXIST',            404); 
define('DATABASE_CONNECTION_ERROR',     417); 