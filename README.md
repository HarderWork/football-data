# FootballData plugin for CakePHP 3.x
The goal of this plugin is to provide football data for any CakePHP-application. And yes, football as in real football, not the kind where you pick it up with your hands and throws it around.

This is not a wrapper around football API's, rather a standalone football database that gathers data from different providers.

Providers will be
 - [ ] Football-data.org (free)
 - [ ] XMLSoccer.com (paid)


## Is this for me?
Not at this moment. Right now I'm prioritizing a re-factoring of my old application, so step 1 is to be what I need.
Next step is to make it available to the community to make your own stats site.
Lack of unit tests and documentation makes it even harder at the moment.

## Installation
Goto app folder and run

```
composer require harderwork/football-data:"dev-master"
```

then in config/bootstrap.php add

```
Plugin::load('HarderWork/FootballData', ['routes' => true]);
```
The plugin is now accessible at
```
http://yourapp.dev/football-data
```



If tables are not created, run
```
bin/cake migrations migrate -p HarderWork/FootballData
```

In your environment, define a cache engine to be used for caching heavy queries:
```
CACHE_FOOTBALLDATA_URL
```
