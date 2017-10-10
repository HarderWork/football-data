# FootballData plugin for CakePHP

## Installation
Goto app folder and run

```
composer require harderwork/football-data
```

then in config/bootstrap.php add

```
Plugin::load('HarderWork/FootballData', ['routes' => true]);
```

If tables are not created, run
```
bin/cake migrations migrate -p FootballData
```

In your environment, define
```
CACHE_FOOTBALLDATA_URL
```
