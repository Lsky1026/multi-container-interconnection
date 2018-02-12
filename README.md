# multi-container-interconnection

## 该项目为docker多容器互联方案最后方案

## 项目组成为 docker + php7.2 + mysql5.7 + redis4.0 + phalcon3.3.1 + memcached
> --lsky

    1. git clone git@github.com:Lsky1026/multi-container-interconnection.git

    2. docker network create range-net

    3.docker-compose up -d

    4.所有依赖全部安装完成 打开浏览器 输入localhost:8001及看到phpinfo、mysql和redis连接信息
    !["成功照片"](./success.png)

    5. 不知道如何在容器中连接mysql或者redis请看./data/index.php文件

    6.修改 ./etc/nginx/default.conf中的项目目录 即可正常使用