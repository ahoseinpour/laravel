<p align="center">
    <img src="media/g4n.png"
         height="200" alt="ghasedak for php">
</p>

 
<p align="center"><sup><strong> Ghasedak sms webservice package for php. </strong></sup></p>

## install

The easiest way to install Behat is by using Composer:

``` 
composer require ghasedak/laravel:"dev-master"
```
 

## usage


Add the Ghasedak\Laravel\ServiceProvider provider to the providers array in config/app.php:

``` 
'providers' => [
  ...
  Ghasedak\GhasedakServiceProvider,
],
```

Then add the facade to your aliases array:

``` 
'aliases' => [
  ...
  'Ghasedak' =>   Ghasedak\GhasedakFacade::class,
],
 ```

You need a [Ghasedak](https://ghasedakapi.com) account. Register and get your API key.

Create an instance from `Ghasedak` class with your API key:

```javascript
$api = new \Ghasedak\GhasedakApi( env(GHASEDAKAPI_KEY));
```

Send some sms:

```javascript
api.SendSimple( 
	  "09xxxxxxxxx",
      "Hello World!"
 );
```

:)

##
 
