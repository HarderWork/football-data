# FootballData plugin for CakePHP

## Installation
Goto <app>/plugins folder and run

```
git clone https://github.com/HarderWork/football-data.git FootballData
```

then in config/bootstrap.php add

```
Plugin::load('FootballData', ['routes' => true]);
```

In composer.json add
```
    "autoload": {
        "psr-4": {
            "App\\": "src",
            "FootballData\\": "./plugins/FootballData/src"
        }
    }
```

Save and run

```
composer dumpautoload
```

If tables are not created, run
```
bin/cake migrations migrate -p FootballData
```

In your environment, define
```
CACHE_FOOTBALLDATA_URL
```
