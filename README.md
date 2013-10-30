# Flora PAC

A PAC(Proxy auto-config) file generator with fetched China IP range, which helps walk around GFW.

Inspired by https://github.com/fivesheep/chnroutes .

## Installation
<pre>
$ git clone https://github.com/Leask/Flora_Pac.git
</pre>

## Uasge
<pre>
$ ./flora_pac -h
usage: flora_pac [-h] [-x [PROXY]] [-p [PORT]]

Generate proxy auto-config rules.

optional arguments:
  -h, --help            show this help message and exit
  -x [PROXY], --proxy [PROXY]
                        Proxy Server, examples:
                            SOCKS5 127.0.0.1:8964;
                            SOCKS 127.0.0.1:8964;
                            PROXY 127.0.0.1:6489
  -p [PORT], --port [PORT]
                        Pac Server Port [OPTIONAL], examples: 8970
</pre>
* Run as a HTTP PAC server:
<pre>
$ ./flora_pac -x 'SOCKS5 127.0.0.1:8964; SOCKS 127.0.0.1:8964; DIRECT' -p 8970
</pre>
![PAC Server demo on Mac](https://raw.github.com/Leask/Flora_Pac/master/screenshots/mac.jpg "PAC Server demo on Mac")
* [NEW] Use it directly from official host:
http://www.leaskh.com/blog/2013/10/30/测试为-flora_pac-提供-http-host/

## Get help
* Email/iMsg/GTalk: i@leaskh.com

## See also
* A powerful fork: https://github.com/yaleh/Flora_Pac
