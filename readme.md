# php osu api
instance
```php
require 'Osu.php';
$api_key = 'your_key';
$osu = new Osu($key);
```

get user data example
```php
$user = $osu->getUserStats('idke');

// game mode (0 = osu!, 1 = Taiko, 2 = CtB, 3 = osu!mania)
// $user = $osu->getUserStats('idke', 3);

print_r($user);
```

get user top scores
```php
// pass a second parameter for game mode (0 = osu!, 1 = Taiko, 2 = CtB, 3 = osu!mania)
$scores = $osu->getUserTopScores('idke');

print_r($scores);
```

get beatmap data example
```php
$beatmap = $osu->getBeatmapSet('780318');

print_r($beatmap);
```

get beatmap scores
```php
// pass a second parameter for game mode (0 = osu!, 1 = Taiko, 2 = CtB, 3 = osu!mania)
$beatmap_scores = $osu->getBeatmapScores('780318');

print_r($beatmap_scores);
```
