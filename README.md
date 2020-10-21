# timekeeper
php代码执行时长计时器


##use

```
composer require liuxiaoyucc/timekeeper

// 引入autoload.php; 引入插件
require 'vendor/autoload.php';
use liuxiaoyucc\timekeeper\TimeKeeper;

// 初始化TimeKeeper
$keeper = new TimeKeeper();

// 开始计时
$keeper->start;

// 结束计时
$keeper->end;

// 输出用时 ms
echo $keeper->consumeTime();
```