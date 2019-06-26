# 一对一，一对多消息发送
ThinkPHP5.1 命令行启动多个Workerman 服务

[![Latest Stable Version](https://poser.pugx.org/xiaodi/xiaodi-worker/v/stable)](https://packagist.org/packages/xiaodi/xiaodi-worker)
[![Total Downloads](https://poser.pugx.org/xiaodi/xiaodi-worker/downloads)](https://packagist.org/packages/xiaodi/xiaodi-worker)
[![Latest Unstable Version](https://poser.pugx.org/xiaodi/xiaodi-worker/v/unstable)](https://packagist.org/packages/xiaodi/xiaodi-worker)
[![LICENSE](https://img.shields.io/badge/license-Anti%20996-blue.svg)](https://github.com/996icu/996.ICU/blob/master/LICENSE)
[![Monthly Downloads](https://poser.pugx.org/xiaodi/xiaodi-worker/d/monthly)](https://packagist.org/packages/xiaodi/xiaodi-worker)
[![Daily Downloads](https://poser.pugx.org/xiaodi/xiaodi-worker/d/daily)](https://packagist.org/packages/xiaodi/xiaodi-worker)

### 命令
`参数一` 服务名称  
`参数二` 命令 如 [start|stop|reload|restart|status]  
`参数三` 是否守护进程模式  

`php think service:run 参数一 参数二 参数三`

### 启动
原生支持的命令 [start|stop|reload|restart|status]
```sh
php think service:run Http start
php think service:run Channel start
```

### 守护进程
```sh
php think service:run Http start -d
php think service:run Channel start -d
```
