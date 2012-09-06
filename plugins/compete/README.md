PHP wrapper for [Compete API](https://www.compete.com/developer/).

## Examples of usage
Wrapper has generic method `get`. You can retrieve any kind of metric via this method:
```php
<?php
require 'Compete.php';

// Create API wrapper instance
$compete = new Compete('YOUR_API_KEY');

// Basic usage
$data = $compete->get('SOME_DOMAIN', 'METRIC_CODE');

// Get the number of people who visited a domain
$data = $compete->get('facebook.com', 'uv');

// Get the ranking of the domain by total number of unique visitors
$data = $compete->get('google.com', 'rank');
```

Here is list of available metrics:
<table cellpadding="0" cellspacing="0"><tbody><tr><td bgcolor="#eee">Metric Name</td><td bgcolor="#eee">Basic or All-Acces?</td><td bgcolor="#eee">description</td><td bgcolor="#eee">metric code</td></tr><tr><td class="first_column">Unique Visitors</td><td>Basic</td><td align="left" class="third_column">The number of people who visited a domain</td><td><em>uv</em></td></tr><tr><td bgcolor="#f0f0f0" class="first_column">Visits</td><td bgcolor="#f0f0f0">Basic</td><td align="left" bgcolor="#f0f0f0" class="third_column">The number of separate visits made to a domain by all unique visitors</td><td bgcolor="#f0f0f0"><em>vis</em></td></tr><tr><td class="first_column">Rank</td><td>Basic</td><td align="left" class="third_column">The ranking of the domain by total number of unique visitors</td><td><em>rank</em></td></tr><tr><td bgcolor="#f0f0f0" class="first_column">Page Views</td><td bgcolor="#f0f0f0">All-Access</td><td align="left" bgcolor="#f0f0f0" class="third_column">The number of times a page has been loaded from a domain</td><td bgcolor="#f0f0f0"><em>pv</em></td></tr><tr><td class="first_column">Average Stay</td><td>All-Access</td><td align="left" class="third_column">The average number of seconds that a visit lasts </td><td><em>avgstay</em></td></tr><tr><td bgcolor="#f0f0f0" class="first_column">Visits/Person</td><td bgcolor="#f0f0f0">All-Access</td><td align="left" bgcolor="#f0f0f0" class="third_column">The average number of times each unique visitor visits the domain</td><td bgcolor="#f0f0f0"><em>vpp</em></td></tr><tr><td class="first_column">Pages/Visit</td><td>All-Access</td><td align="left" class="third_column">The average number of pages displayed during a visit</td><td><em>ppv</em></td></tr><tr><td bgcolor="#f0f0f0" class="first_column">Attention</td><td bgcolor="#f0f0f0">All-Access</td><td align="left" bgcolor="#f0f0f0" class="third_column">The percent of total minutes spent by all US users on the internet that were spent on this domain</td><td bgcolor="#f0f0f0"><em>att</em></td></tr><tr><td class="first_column"> Reach (daily)</td><td>All-Access</td><td align="left" class="third_column">The percent of all US users on the internet that had at least one visit to this domain by day</td><td><em>reachd</em></td></tr><tr><td bgcolor="#f0f0f0" class="first_column">Attention (daily)</td><td bgcolor="#f0f0f0">All-Access</td><td align="left" bgcolor="#f0f0f0" class="third_column">The percent of total minutes spent by all US users on the internet that were spent on this domain by day</td><td bgcolor="#f0f0f0"><em>attd</em></td></tr><tr><td class="first_column">Gender</td><td>All-Access</td><td align="left" class="third_column">The split between males and females visiting a domain</td><td><em>gen</em></td></tr><tr><td bgcolor="#f0f0f0" class="first_column">Age</td><td bgcolor="#f0f0f0">All-Access</td><td align="left" bgcolor="#f0f0f0" class="third_column">Percent of unique visitors in various age brackets</td><td bgcolor="#f0f0f0"><em>age</em></td></tr><tr><td class="first_column">Income</td><td>All-Access</td><td align="left" class="third_column">Percent of unique visitors in various income brackets</td><td><em>inc</em></td></tr></tbody></table>

Also you can use specific methods for getting data:
```php
<?php
  // The number of people who visited a domain
  $compete->uniqueVisitors('example.com');

  // The number of separate visits made to a domain by all unique visitors
  $compete->visits('example.com');

  // The ranking of the domain by total number of unique visitors
  $compete->rank('example.com');

  // The number of times a page has been loaded from a domain
  $compete->pageViews('example.com');

  // The average number of seconds that a visit lasts
  $compete->averageStay('example.com');

  // The average number of times each unique visitor visits the domain
  $compete->visitsPerson('example.com');

  // The average number of pages displayed during a visit
  $compete->pagesVisit('example.com');

  // The percent of total minutes spent by all US users
  // on the internet that were spent on this domain
  $compete->attention('example.com');

  // The percent of all US users on the internet that
  // had at least one visit to this domain by day
  $compete->dailyReach('example.com');

  // The percent of total minutes spent by all US users 
  // on the internet that were spent on this domain by day
  $compete->dailyAttention('example.com');

  // The split between males and females visiting a domain
  $compete->gender('example.com');

  // Percent of unique visitors in various age brackets
  $compete->age('example.com');

  // Percent of unique visitors in various income brackets
  $compete->income('example.com');
```

## Response format
Return values have same format but decoded via `json_decode` (wrapped in `stdClass`).
Trends field name depends on specific metric.
```json
{
  "status": "OK",
  "data": {
    "trends": {
      "uv": [
        {"date": "200906", "value": 90714948},
        {"date": "200907", "value": 98292793},
        {"date": "200908", "value": 103509116},
        ...
      ]
    },
    "trends_low_sample": false,
    "query_cost": 13,
    "trends_frequency": "monthly"
  }
} 
```

## Errors
If there is some error in request wrapper will throw `CompeteException`.

## TODO
* Add support for additional request params(date, graph, ...)
