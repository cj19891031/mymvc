# api接口文档

## 目录
* [学生端](#学生端)
    * [获取抢购活动数据](#1获取抢购活动数据)
    * [更改抢购合同状态](#2更改抢购合同状态)
    * [预约抢购](#3预约抢购)
* [教师端](#教师端)
* [wechat端](#wechat端)

测服api的host : http://dev.uuabc.com

***

### 学生端

###### 1.获取抢购活动数据

> 接口地址 index.php?m=Student&c=Activity%2FActivity&a=getActivityInfo&id=1
* method get
* params 
    * id int 活动ID


```
返回数据结构
{
  "code": 0,
  "data": {
    "id": "1",
    "title": "123324",
    "template_id": "64",
    "url": "",
    "start_time": 1490198400,  本次活动开始时间戳
    "end_time": 1490889600,    本次活动结束时间戳
    "week": {
      "2": "10",
      "3": "10",
      "4": "10",
      "5": "10",
      "6": "10"
    },
    "week_start": "480",
    "week_end": "1200",
    "status": "1",
    "type": "0",
    "for_people": "0",
    "first_activity": 1490253480,
    "last_activity": 1490948280,
    "wait_seconds": 0   //距离活动开始剩余秒数，若为0则表示活动正在进行
  }
}
```

###### 2.更改抢购合同状态
> 接口地址 index.php?m=Student&c=Activity%2FActivity&a=changeContract 需要登录
* method post
* params 
    * id int 合同ID
    * status 0 拒绝  1 同意

```
返回数据结构
{
    "code" : 0|-1,
    "msg" : 'success|fail'
}
```

###### 3.预约抢购
> 接口地址 index.php?m=Student&c=Activity%2FActivity&a=getAppointment 需要登录
* method get
* params 
    * id int 活动ID

```
返回数据结构
{
    "code" : 0|-1,
    "msg" : 'success|fail'
}
```

***

### 教师端


***

### wechat端


