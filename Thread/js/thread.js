window.Echo=(function(f,a){var h=function(i){this.elem=i;this.render();this.listen()};var g=[];var e=function(i){var j=i.getBoundingClientRect();return((j.top>=0&&j.left>=0&&j.top)<=(f.innerHeight||a.documentElement.clientHeight)*2)};var c=function(i,j){i.src=i.getAttribute("data-echo");if(j){j()}};var d=function(j,i){if(g.indexOf(j)!==-1){g.splice(i,1)}};var b=function(){for(var k=0;k<g.length;k++){var j=g[k];if(e(j)){c(j,d(j,k))}}};h.prototype={init:function(){g.push(this.elem)},render:function(){if(a.addEventListener){a.addEventListener("DOMContentLoaded",b,false)}else{f.onload=b}},listen:function(){f.onscroll=b}};return h})(window,document);
var APP = {
    data: {
        config:{
            noimg: 0
        }
    },
    view: {},
    model: {},

    util: {},
    event: {}
};

APP.util.turnObjToArray = function (obj) {
    return [].map.call(obj, function (element) {
        return element;
    })
};
APP.util.dateFormat = function (date, format) {
    var date = {
        "M+": date.getMonth() + 1,
        "d+": date.getDate(),
        "h+": date.getHours(),
        "m+": date.getMinutes(),
        "s+": date.getSeconds(),
        "q+": Math.floor((date.getMonth() + 3) / 3),
        "S+": date.getMilliseconds()
    };
    if (/(y+)/i.test(format)) {
        format = format.replace(RegExp.$1, (date.getFullYear() + '').substr(4 - RegExp.$1.length));
    }
    for (var k in date) {
        if (new RegExp("(" + k + ")").test(format)) {
            format = format.replace(RegExp.$1, RegExp.$1.length == 1
                ? date[k] : ("00" + date[k]).substr(("" + date[k]).length));
        }
    }
    return format;
};

APP.event.eventRegister = function (domId, event, cb) {
    document.getElementById(domId).addEventListener(event, cb);
};

APP.data.Thread = {
    "data": {
        "ReplyList": [
            {
                "id": "1135699",
                "group_article_type": "1",
                "group_article_id": "274",
                "pid": "124664",
                "uid": "18667059",
                "username": "二院院長",
                "content": "<b>LZ你想多了~没事的~~~</b>",
                "lights": "2",
                "create_at": "1402041476",
                "banned": 0,
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
                "floor": 1
            },
            {
                "id": "1135708",
                "group_article_type": "1",
                "group_article_id": "274",
                "pid": "124701",
                "uid": "16615120",
                "username": "yangjingfu23",
                "content": "她不喜欢你，还建议个毛！",
                "lights": "2",
                "create_at": "1402041489",
                "banned": 0,
                "user_avator": "http://i2.hoopchina.com.cn/user/120/16615120/16615120_big_5.jpg",
                "floor": 2
            },
            {
                "id": "1135713",
                "group_article_type": "1",
                "group_article_id": "274",
                "pid": "124871",
                "uid": "18381185",
                "username": "小棍戳屎玩",
                "content": "一楼说的很对你想的太多了，确实是有事儿",
                "lights": "0",
                "create_at": "1402041578",
                "banned": 0,
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
                "floor": 3
            },
            {
                "id": "1135720",
                "group_article_type": "1",
                "group_article_id": "274",
                "pid": "125133",
                "uid": "18704833",
                "username": "伯来士特",
                "content": "你不就是想把她叫过来，然后使用我ID狠狠的来一发吗。",
                "lights": "0",
                "create_at": "1402041709",
                "banned": 0,
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
                "floor": 4
            },
            {
                "id": "1135725",
                "group_article_type": "1",
                "group_article_id": "274",
                "pid": "125631",
                "uid": "18533723",
                "username": "正恠输入",
                "content": "楼主，你其实已经知道答案了！",
                "lights": "1",
                "create_at": "1402041942",
                "banned": 0,
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
                "floor": 5
            },
            {
                "id": "1135730",
                "group_article_type": "1",
                "group_article_id": "274",
                "pid": "125684",
                "uid": "17239464",
                "username": "你不懂扣篮",
                "content": "你可以过去啊",
                "lights": "0",
                "create_at": "1402041968",
                "banned": 0,
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
                "floor": 6
            },
            {
                "id": "1135737",
                "group_article_type": "1",
                "group_article_id": "274",
                "pid": "125763",
                "uid": "18579626",
                "username": "澜湗",
                "content": "为森马 你不过去找她呢？ 很简单的问题啊 你知道答案 她也知道",
                "lights": "0",
                "create_at": "1402042004",
                "banned": 0,
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
                "floor": 7
            },
            {
                "id": "1135741",
                "group_article_type": "1",
                "group_article_id": "274",
                "pid": "126536",
                "uid": "16905860",
                "username": "吴语迪31",
                "content": "<b style=\"background-color: rgb(0, 255, 0);\">楼上是怎么知道楼主被绿的</b>",
                "lights": "0",
                "create_at": "1402042368",
                "banned": 0,
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
                "floor": 8
            },
            {
                "id": "1135746",
                "group_article_type": "1",
                "group_article_id": "274",
                "pid": "127883",
                "uid": "16551751",
                "username": "迎风射一脸",
                "content": "楼上几位怎么想的 ，都是绿色字体  惟恐天下不乱么？  楼主放心，她只是爱上我了。 ",
                "lights": "0",
                "create_at": "1402043058",
                "banned": 0,
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
                "floor": 9
            },
            {
                "id": "1135752",
                "group_article_type": "1",
                "group_article_id": "274",
                "pid": "128023",
                "uid": "16465940",
                "username": "wzk1222",
                "content": "那是一道光，如此美妙",
                "lights": "1",
                "create_at": "1402043130",
                "banned": 0,
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
                "floor": 10
            },
            {
                "id": "1135758",
                "group_article_type": "1",
                "group_article_id": "274",
                "pid": "128230",
                "uid": "3417211",
                "username": "qq279997514",
                "content": "这个情况一般都不用担心，bxj上多得是！",
                "lights": "0",
                "create_at": "1402043235",
                "banned": 0,
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
                "floor": 11
            },
            {
                "id": "1135764",
                "group_article_type": "1",
                "group_article_id": "274",
                "pid": "129266",
                "uid": "16207808",
                "username": "标准地板流",
                "content": "LZ放心吧 你想多了 真的",
                "lights": "0",
                "create_at": "1402043775",
                "banned": 0,
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
                "floor": 12
            },
            {
                "id": "1135770",
                "group_article_type": "1",
                "group_article_id": "274",
                "pid": "129420",
                "uid": "16988750",
                "username": "纯之念",
                "content": "楼上的 你们怎么能这么说  楼主    你女友说的肯定是真的 我相信    PS： 我很想看到楼主发的下一帖来好好形容突变",
                "lights": "0",
                "create_at": "1402043860",
                "banned": 0,
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
                "floor": 13
            },
            {
                "id": "1135774",
                "group_article_type": "1",
                "group_article_id": "274",
                "pid": "131918",
                "uid": "17912939",
                "username": "sneaker骗子",
                "content": "<b>肯定没有多大事儿</b><b>你想啊</b><b>研究生毕业那么多麻烦事</b><b>放宽心！</b>",
                "lights": "0",
                "create_at": "1402045192",
                "banned": 0,
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
                "floor": 14
            },
            {
                "id": "1135780",
                "group_article_type": "1",
                "group_article_id": "274",
                "pid": "132002",
                "uid": "17087814",
                "username": "风该停了",
                "content": "LZ你想多了，她就是忙了一些，没事的。",
                "lights": "0",
                "create_at": "1402045240",
                "banned": 0,
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
                "floor": 15
            },
            {
                "id": "1089131",
                "group_article_type": "1",
                "group_article_id": "1",
                "pid": "0",
                "uid": "18232070",
                "username": "谢思了",
                "content": "aaa",
                "lights": "1",
                "create_at": "1402450590",
                "banned": 0,
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
                "floor": 1
            },
            {
                "id": "1089236",
                "group_article_type": "1",
                "group_article_id": "1",
                "pid": "0",
                "uid": "18232103",
                "username": "抖哥3",
                "content": "aaa",
                "lights": "0",
                "create_at": "1402454467",
                "banned": 0,
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
                "floor": 2
            },
            {
                "id": "1089237",
                "group_article_type": "1",
                "group_article_id": "1",
                "pid": "0",
                "uid": "18232103",
                "username": "抖哥3",
                "content": "aaa",
                "lights": "0",
                "create_at": "1402454492",
                "banned": 0,
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
                "floor": 3
            },
            {
                "id": "1089238",
                "group_article_type": "1",
                "group_article_id": "1",
                "pid": "0",
                "uid": "18232103",
                "username": "抖哥3",
                "content": "aaa",
                "lights": "1",
                "create_at": "1402454508",
                "banned": 0,
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
                "floor": 4
            },
            {
                "id": "1089239",
                "group_article_type": "1",
                "group_article_id": "1",
                "pid": "0",
                "uid": "18232103",
                "username": "抖哥3",
                "content": "aaa",
                "lights": "0",
                "create_at": "1402454553",
                "banned": 0,
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
                "floor": 5
            },
            {
                "id": "1089240",
                "group_article_type": "1",
                "group_article_id": "1",
                "pid": "0",
                "uid": "18232103",
                "username": "抖哥3",
                "content": "aaa",
                "lights": "0",
                "create_at": "1402454573",
                "banned": 0,
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
                "floor": 6
            },
            {
                "id": "1089241",
                "group_article_type": "1",
                "group_article_id": "1",
                "pid": "0",
                "uid": "18232103",
                "username": "抖哥3",
                "content": "aaa",
                "lights": "0",
                "create_at": "1402454586",
                "banned": 0,
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
                "floor": 7
            },
            {
                "id": "1089242",
                "group_article_type": "1",
                "group_article_id": "1",
                "pid": "0",
                "uid": "18232103",
                "username": "抖哥3",
                "content": "aaa",
                "lights": "1",
                "create_at": "1402454590",
                "banned": 0,
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
                "floor": 8
            },
            {
                "id": "1089249",
                "group_article_type": "1",
                "group_article_id": "1",
                "pid": "0",
                "uid": "18232103",
                "username": "chunlan275",
                "content": "aaa",
                "lights": "0",
                "create_at": "1402627840",
                "banned": 0,
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
                "floor": 9
            },
            {
                "id": "1089288",
                "group_article_type": "1",
                "group_article_id": "1",
                "pid": "0",
                "uid": "18232103",
                "username": "chunlan275",
                "content": "tttttt",
                "lights": "0",
                "create_at": "1402630833",
                "banned": 0,
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
                "floor": 10
            }
        ],
        "ReplyTotal": 1,
        "ThreadInfo": {
            "content" : "临近期末，又到了一学期开始预习的时候，趁着今天北京下暴雨，让我来走心的水一贴。时间回到两个星期以前，正是装备区热闹非凡的几天，无非是为了今年可以说最火的一双鞋，胭脂6。本人从得知发售消息的那天起，不断地攒人品，帮宿舍打热水，带饮料，在公交车上抢个座位，只为等到老奶奶过来，让个座位当雷锋。。。。终于等啊等啊等，等到发售的时间，拉着同学，去胜道的各个点登记，拿到10个号，结果擦肩而过，3点出门，9点才回到学校。。让同学走渠道拿一双没成功，周末官网被砍单，跑去亚新抽签，号发到我这刚好没有了，早上7点到deal果断排不上号，原本还以为努努力能原价拿下一双，看来我是天真了。。。。<p><p><img src=\"http://i2.hoopchina.com.cn/blogfile/201406/06/BbsImg140203359038251_800*600.jpg\" link=\"\" link=\"\"></p></p>来吧，加价，原价党轻调戏。。。花了1800，收了双42.5的，现在看起来价格还不错，可是。。。。。卖家把我的货发错了，又让我等了4天，心中一万只羊驼在奔跑。。。。<p><p><img src=\"http://i2.hoopchina.com.cn/blogfile/201406/06/BbsImg140203479580898_741*899.jpg\" link=\"\" link=\"\"></p></p><p><p><img src=\"http://i2.hoopchina.com.cn/blogfile/201406/06/BbsImg140203480448370_600*800.jpg\" link=\"\" link=\"\"></p></p><p><p><img src=\"http://i3.hoopchina.com.cn/blogfile/201406/06/BbsImg140203498272068_800*600.jpg\" link=\"\" link=\"\"></p></p><p><p><img src=\"http://i3.hoopchina.com.cn/blogfile/201406/06/BbsImg140203501460900_800*600.jpg\" link=\"\" link=\"\"></p></p>真的很好看，不忍直视了，尤其是那大底，好多人说喜欢黄色的那种，而我对这种冰蓝没有抵抗。。。做工还算不错，起码我的没有什么大的瑕疵。。。。<p><p><img src=\"http://i3.hoopchina.com.cn/blogfile/201406/06/BbsImg140203651261209_600*800.jpg\" link=\"\" link=\"\"></p></p><p><p><img src=\"http://i1.hoopchina.com.cn/blogfile/201406/06/BbsImg140203652751479_600*800.jpg\" link=\"\" link=\"\"></p></p><p><p><img src=\"http://i1.hoopchina.com.cn/blogfile/201406/06/BbsImg140203667293448_800*600.jpg\" link=\"\" link=\"\"></p></p><p><p><img src=\"http://i1.hoopchina.com.cn/blogfile/201406/06/BbsImg140203667541019_600*800.jpg\" link=\"\" link=\"\"></p></p>搭着配套的T，让我好好地出去装一下逼。。。。。。同学给了两张电影的兑换券，拉着女朋友就去看了，选了场很火X战警，来到面发现，居然！！只有我们两个人，包场ing。。。。。<p><p><img src=\"http://i1.hoopchina.com.cn/blogfile/201406/06/BbsImg140203707087641_600*800.jpg\" link=\"\" link=\"\"></p></p><p><p><img src=\"http://i3.hoopchina.com.cn/blogfile/201406/06/BbsImg140203708371598_800*600.jpg\" link=\"\" link=\"\"></p></p>电影真的很好看，真的。。只是我习惯性的又睡着了，中午没睡，太困，也就5分钟吧。。。。看完电影去楼下吃麻小，原谅我从南方来，真的吃不了太辣的，我的最爱还是唐宫，什么虾饺、叉烧吧、马拉糕，不能再说了。。。<p><p><img src=\"http://i3.hoopchina.com.cn/blogfile/201406/06/BbsImg140203746781606_800*600.jpg\" link=\"\" link=\"\"></p></p>今早的nba总决赛挺精彩的，我船被淘汰以后我就一直以一个傍观者自居，希望詹姆斯下一场能满血复活，这样的比赛才好看，也为马刺的老人家们鼓掌，话说迪奥是焕发了第二春吗？再让我矫情矫情。。。。明天就是高考，不知不觉，高中毕业两年，还有一个月大二就结束了，真的过的很快，虽然我知道不容易，但我已经做好了考研的决定，，，大学真的很快，且上且珍惜啊。。。。散点卡，就散到50楼吧，每人66卡，祝大家都能顺順利利，原价收鞋。。。。",
            "cover" : "",
            "create_at" : "1402038104",
            "group_article_type" : 1,
            "group_id" : "97",
            "id" : "85",
            "last_reply_time" : "1402104484",
            "lights" : "1",
            "note" : "临近期末，又到了一学期开始预习的时候，趁着今天北京下暴雨，让我来走心的水一贴。时间回到两个星期以前，正是装备区热闹非凡的几天，无非是为了今年可以说最火的一双鞋，胭脂6。本",
            "replies" : "207",
            "tid" : "9669156",
            "title" : "散点卡，升点级【谨以此文献给美丽的胭脂和美好的生活】",
            "uid" : "16176742",
            "user_avator" : "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png",
            "username" : "Paul19940120",
            "zan" : "0"
        },
        "ThreadZan": [
            {
                "uid": "18232103",
                "user_avator": "http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png"
            }
        ],
        "ThreadHot": [],
        "ThreadIsZan": false,
        "GroupReplyPage": 1
    },
    "status": 200,
    "msg": "ok"
};

/**
 * 点击头像进入个人主页
 */
function goProfilePage() {
    var param = {
            "uid": $(this).data('uid')
        },
        paramStr = JSON.stringify(param);
    window.location.href = 'hupuapp://goHomePage?p=' + paramStr;
}


/**
 * =====================================================
 * 帖子内容
 * =====================================================
 */
/**
 * 帖子内容视图
 * @param thread Thread json data
 * @constructor
 */
APP.view.Thread = function () {
    this.DomContainer = $("#js-thread");
}
/**
 * 帖子内容渲染
 * @param model Thread json data
 */
APP.view.Thread.prototype.render = function (data) {
    if(data && data.ThreadInfo) {
        this.DomContainer.show();
        this.DomContainer.html(this.template(data.ThreadInfo));
        //1：无图模式 0：有图模式
        //添加图片加载事件
        if(APP.data.config.noimg == 1) {
            //点击加载
            $('img').on('tap', function(e) {
                //显示loading

                //加载图片
                $(e.target).attr('src', $(e.target).data('src'));
            });
            $('img').on('load', function(e) {

            })

        } else {

        }
    } else {
        this.DomContainer.hide();
    }
}

/**
 * 帖子内容模板
 * @param model Thread json data
 * @returns {string}
 */
APP.view.Thread.prototype.template = function (model) {
    var templateSnippets = [],
        output = '';

    templateSnippets.push('<header>');

    //1：无图模式 0：有图模式
    if(APP.data.config.noimg == 1) {
        templateSnippets.push('<img class="avatar js-avatar" src="http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png" width="33" height="33" data-uid="' + model.uid + '">');
    } else {
        templateSnippets.push('<img class="avatar js-avatar" src="http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png" data-echo="' + model.user_avator + '" width="33" height="33" data-uid="' + model.uid + '">');
    }

    templateSnippets.push('<div class="user-info">');
    templateSnippets.push('<span class="nickname">' + model.username + '</span><br/>');
    templateSnippets.push('<span class="datetime">' + APP.util.dateFormat(new Date(Number(model.create_at) * 1000), 'M-dd h:mm') + '</span>');
    templateSnippets.push('</div>');
    templateSnippets.push('</header>');
    templateSnippets.push('<article class="thread-content">');
    templateSnippets.push('<h1 id="js-thread-title" class="thread-title">' + model.title + '</h1>');
    //1：无图模式 0：有图模式
    if(APP.data.config.noimg == 1) {
        var content = model.content.replace(/<img[^>]+src\s*=\s*['\"]([^'\"]+)['\"][^>]*>/gi,function(m, p1 ,p2 ,p3) {

            return '<img data-src="' + p1 + '" src="http://b1.hoopchina.com.cn/images/hupu_app/clickdefault.png">';
        });
        templateSnippets.push('<p>' + content + '</p>');
    } else {
        var content = model.content.replace(/<img[^>]+src\s*=\s*['\"]([^'\"]+)['\"][^>]*>/gi,function(m, p1 ,p2 ,p3) {

            return '<img data-echo="' + p1 + '" src="http://b1.hoopchina.com.cn/images/hupu_app/1x1.png">';
        });
        templateSnippets.push('<p>' + content + '</p>');
    }

    templateSnippets.push('</article>');

    for (var i = 0, len = templateSnippets.length; i < len; i++) {
        output += templateSnippets[i];
    }
    return output;
};


/**
 * =====================================================
 * 赞
 * =====================================================
 */
/**
 * 赞内容视图
 * @param container dom container id
 * @constructor
 */
APP.view.ThreadZan = function (container) {
    this.DomContainer = $('#' + container);
}
/**
 * 赞内容渲染
 * @param model Thread json data
 */
APP.view.ThreadZan.prototype.render = function (data) {
    console.log(data && data.ThreadZan && data.ThreadZan.length)
    if(data && data.ThreadZan && data.ThreadZan.length) {
        this.DomContainer.html(this.template(data));
        $("#js-threadZan").show();
    } else {
        this.DomContainer.hide();
        $("#js-threadZan").hide();
    }
}
/**
 * 赞内容模板
 * @param model Thread json data
 * @returns {string}
 */
APP.view.ThreadZan.prototype.template = function (data) {
    var templateSnippets = [],
        output = '',
        collection = data ? data.ThreadZan : null,
        len = collection ? collection.length : 0;

    templateSnippets.push('<input type="hidden" id="js-zan-count" value="' + len + '">');
    templateSnippets.push('<input type="hidden" id="js-group-article-id" value="' + data.ThreadInfo.id + '">');
    templateSnippets.push('<h1 class="approve-title" data-count="' + len + '">' + len + '人点赞过这个帖子</h1>');
    templateSnippets.push('<ul class="clearfix approve-avatars">');
    for (var i = 0; i < len; i++) {
        //1：无图模式 0：有图模式
        if(APP.data.config.noimg == 1) {
            templateSnippets.push('<li class="pull-left"><img data-src="' + collection[i].user_avator + '" src="http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png" width="33" height="33"');
        } else {
            templateSnippets.push('<li class="pull-left"><img src="' + collection[i].user_avator + '" width="33" height="33"></li>');
        }

        if (i >= 5) {
            templateSnippets.push('<li class="pull-left"><img src="' + collection[i].user_avator + '" width="33" height="33"></li>');
            templateSnippets.push('<li class="pull-left"><span class="more">...</span></li>');
            break;
        }
    }
    templateSnippets.push('</ul>');

    for (var i = 0, len = templateSnippets.length; i < len; i++) {
        output += templateSnippets[i];
    }
    return output;
}

/**
 * =====================================================
 * 回帖
 * =====================================================
 */
/**
 * 回帖视图
 * @param container dom容器
 * @constructor
 */
APP.view.Reply = function (container) {
    this.DomContainer = document.getElementById(container);
}

// 操作事件
var opertionDiv = $('#js-operation'),
    startX = 0,
    startY = 0;

APP.event.popUpOperation = function (e) {
    opertionDiv.data('content', this.textContent.substring(0,40));
    opertionDiv.data('group-article-id', $(this).data('group-article-id'));
    opertionDiv.data('reply-id', $(this).data("reply-id"));
    opertionDiv.data('floor', $(this).data('floor'));
    opertionDiv.data('tid', $(this).data('tid'));

    startX = e.target.offsetLeft;
    startY = e.target.offsetTop;

    if (opertionDiv.css('display') == "none") {
        opertionDiv.show();
        opertionDiv.css('top',(startY - 20) + 'px');
    } else {
        opertionDiv.hide();
        opertionDiv.css('top',(startY - 20) + 'px');
        opertionDiv.show();
    }
};

/**
 * 回帖内容渲染
 * @param model Thread json data
 */
APP.view.Reply.prototype.render = function (data, category) {
    this.DomContainer.innerHTML = this.template(data, category);
    // 点击头像
    $('.js-avatar').off('tap');
    $('.js-avatar').each(function(index, item) {
        $(this).on('tap', goProfilePage);
    });


    var allReplySections = $('.reply'),
        lastTarget = null;
    allReplySections.on('tap', APP.event.popUpOperation);

}

/**
 * 回帖内容模板
 * @param model Thread json data
 * @returns {string}
 */
APP.view.Reply.prototype.template = function (data, category) {
    if(data) {

        var templateSnippets = [],
            collection = null,
            len = -1;

        switch(category) {
            case "hot":
                collection = data ? data.ThreadHot : null,
                    len = collection ? collection.length : 0;
                if(len) {
                    $('#js-hotReplySection').show();
                } else {
                    return "";
                }
                break;
            case "all":
                collection = data ? data.ReplyList : null,
                    len = collection ? collection.length : 0;
                if(len) {
                    $('#js-allReplyHeader').show();
                } else {
                    return "";
                }
                break;
            default :
                return "";
        }


        for (var i = 0, len = collection.length; i < len; i++) {
            templateSnippets.push('<li class="board-item inner-padding" id="' + collection[i].id + '">');
            //1：无图模式 0：有图模式
            if(APP.data.config.noimg == 1) {
                templateSnippets.push('<img class="avatar js-avatar" data-src="' + collection[i].user_avator + '" src="http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png" width="33" height="33" data-uid="' + collection[i].uid + '">');
            } else {
                templateSnippets.push('<img class="avatar js-avatar" data-echo="' + collection[i].user_avator + '" src="' + collection[i].user_avator + '" width="33" height="33" data-uid="' + collection[i].uid + '">');
            }

            templateSnippets.push('<div class="user-info">');
            templateSnippets.push('<span class="nickname">' + collection[i].username + '</span><br/>');
            templateSnippets.push('<div class="user-info-content">');
            templateSnippets.push('<span class="datetime">' + APP.util.dateFormat(new Date(Number(collection[i].create_at) * 1000), 'M-dd h:mm') + '</span>');
            templateSnippets.push('<span class="light js-light' + collection[i].id + '">' + collection[i].lights + '亮</span>');

            if (collection[i].floor) {
                templateSnippets.push('<span class="floor">' + collection[i].floor + '楼</span>');
            }
            templateSnippets.push('</div>');
            //1：无图模式 0：有图模式
            if(APP.data.config.noimg == 1) {
                var content = collection[i].content.replace(/<img[^>]+src\s*=\s*['\"]([^'\"]+)['\"][^>]*>/gi,function(m, p1 ,p2 ,p3) {

                    return '<img data-src="' + p1 + '" src="http://b1.hoopchina.com.cn/images/hupu_app/clickdefault.png">';
                });
                templateSnippets.push('<div class="reply" data-tid="' + data.ThreadInfo.tid + '" data-floor="' + collection[i].floor + '" data-group-article-id="' + collection[i].group_article_id + '" data-reply-id="' + collection[i].id + '">' + content + '</div>');
            } else {
                var content = collection[i].content.replace(/<img[^>]+src\s*=\s*['\"]([^'\"]+)['\"][^>]*>/gi,function(m, p1 ,p2 ,p3) {

                    return '<img data-echo="' + p1 + '" src="http://b1.hoopchina.com.cn/images/hupu_app/1x1.png">';
                });
                templateSnippets.push('<div class="reply" data-tid="' + data.ThreadInfo.tid + '" data-floor="' + collection[i].floor + '" data-group-article-id="' + collection[i].group_article_id + '" data-reply-id="' + collection[i].id + '">' + content + '</div>');
            }

            templateSnippets.push('</div>');
            templateSnippets.push('</li>');
        }

        return templateSnippets.join('');
    } else {
        return "";
    }

}

// 亮了
APP.event.eventRegister('js-light', 'touchend', function () {
    var param = {
            "group_article_id": opertionDiv.data("group-article-id"),
            "reply_id": opertionDiv.data("reply-id")
        },
        paramStr = JSON.stringify(param);

    window.location.href = 'hupuapp://addLight?p=' + paramStr;
    opertionDiv.hide();
});
//点亮回调函数
function addLightCallback(id, config) {
    var num = config.num;
    $('.js-light'+id).each(function(index,dmo){
        originLightCount = $(dmo).text().slice(0,-1) * 1;
        $(dmo).text((originLightCount + num) + '亮');
    });
}

// 引用
APP.event.eventRegister('js-quote', 'touchend', function () {
    var param = {
            "group_article_id": opertionDiv.data("group-article-id"),
            "reply_id": opertionDiv.data("reply-id"),
            "floor": opertionDiv.data("floor")
        },
        paramStr = JSON.stringify(param);

    window.location.href = 'hupuapp://addQuote?p=' + paramStr;
    opertionDiv.hide();
});

// 分享
APP.event.eventRegister('js-share', 'touchend', function () {
    var param = {
            "url": "http://bbs.hupu.com/"+opertionDiv.data("tid")+".html",
            "content": opertionDiv.data("content"),
            "title": $("#js-thread-title").text()
        },
        paramStr = JSON.stringify(param);
    console.log(param)
    window.location.href = 'hupuapp://addShare?p=' + paramStr;
    opertionDiv.hide();
});

// 复制
APP.event.eventRegister('js-copy', 'touchend', function () {
    var param = {
            content: opertionDiv.data('content')
        },
        paramStr = JSON.stringify(param);

    window.location.href = 'hupuapp://addCopy?p=' + paramStr;
    opertionDiv.hide();
});

/**
 * 有图无图模式设置
 */
function imgModeSetup() {
    //1：无图模式 0：有图模式
    // 有图时延迟加载
    if(APP.data.config.noimg == 0) {
        $('img[data-echo]').each(function (index, img) {
            if(index < 5) {
                $(img).attr('src', $(img).data('echo'));
            } else {
                new Echo(img).init();
            }
        });

        // 点击后手机展示原图
        $('p>img').on('tap', function() {
            var param = {src:this.src};
            var paramStr = JSON.stringify(param);
            window.location.href = 'hupuapp://showImg?p=' + paramStr;
        });
    } else {
        //添加图片加载事件
        //点击加载
        $('p>img').on('tap', function(e) {
            //显示loading
            //加载图片
            $(e.target).attr('src', $(e.target).data('src'));
            //再次点击手机展示图片
            $(e.target).on('tap', function() {
                var param = {src:this.src};
                var paramStr = JSON.stringify(param);
                window.location.href = 'hupuapp://showImg?p=' + paramStr;
            });
        });
    }
    //a 标记处理
    $('.reply a').on('tap', function(e) {
        if(this.href.indexOf('hupuapp://') != 0 )
        {
            var param = {href:this.href};
            var paramStr = JSON.stringify(param);
            window.location.href = 'hupuapp://goLink?p=' + paramStr;
        }
        e.preventDefault();
        return false;
    });
    $('.thread-content a').on('tap', function(e) {
        if(this.href.indexOf('hupuapp://') != 0 )
        {
            var param = {href:this.href};
            var paramStr = JSON.stringify(param);
            window.location.href = 'hupuapp://goLink?p=' + paramStr;
        }
        e.preventDefault();
        return false;
    });

}

/**
 * 上拉下拉刷新
 * @param context 上下文容器
 */
function draggerSetup(context) {
    var dragger = new DragLoader(context, {
        dragDownRegionCls: 'last-page',
        dragUpRegionCls: 'next-page',
        downToggle: "on",
        upToggle: "on",
        dragDownHelper: function(status) {
            if (status == 'default') {
                return '<div>向下拉加载最新</div>';
            } else if (status == 'prepare') {
                return '<div>释放刷新</div>';
            } else if (status == 'load') {
                return '<div>加载中...</div>';
            }
        },
        dragUpHelper: function(status) {
            if (status == 'default') {
                return '<div>向上拉加载更多</div>';
            } else if (status == 'prepare') {
                return '<div>释放刷新</div>';
            } else if (status == 'load') {
                return '<div>加载中...</div>';
            }
        }
    });
    dragger.on('dragDownLoad', function() {
        setTimeout(function() {
            console.log('dragdownLoad callback------------------------>')
            dragger.reset();
        }, 2000);
    });
    dragger.on('dragUpLoad', function() {
        console.log('dragdownUp callback------------------------>')
        setTimeout(function() {
            dragger.reset();
        }, 2000);
    });
    dragger.setDragDownDisabled(true);
};

/**
 * 初始化帖子内容和赞
 * @param data
 * @param config
 */
function initThread(data, config) {
    window.scrollTo(0,0)
    var threadData = data,
        config = config;
    APP.data.config = config;
    APP.data.curpage = 1;
    new APP.view.Thread().render(threadData.data);
    new APP.view.ThreadZan("js-threadZan").render(threadData.data);
    new APP.view.Reply("js-threadHot").render(threadData.data, "hot");
    new APP.view.Reply("js-replyList").render(threadData.data, "all");
    imgModeSetup();
//    draggerSetup(document.getElementById('js-allReplies'));
    draggerSetup(document.getElementsByClassName('wrap')[0]);
    console.log( $('.last-page'));
}

/**
 * 初始化 热门回帖和全部回帖
 * @param data
 * @param config
 */
function initReply(data, config) {
    window.scrollTo(0,0)
    var replyData = data,
        config = config;
    APP.data.config = config;
    new APP.view.Thread().render({});
    new APP.view.ThreadZan("js-threadZan").render([]);
    new APP.view.Reply("js-threadHot").render([], "hot");
    new APP.view.Reply("js-replyList").render(replyData.data, "all");

    imgModeSetup();
    draggerSetup(document.getElementsByClassName('wrap')[0]);
}



//赞点击事件
var threadZanSection = $('#js-threadZan');
threadZanSection.on('touchstart', function () {
    threadZanSection.addClass('touch-row-active');
});
threadZanSection.on('tap', function () {
    threadZanSection.removeClass('touch-row-active');
    var param = {
            "group_article_id": $('#js-group-article-id').val(),
            "count": $('#js-zan-count').val()
        },
        paramStr = JSON.stringify(param);
    window.location.href = 'hupuapp://goZanList?p=' + paramStr;
});

// 滚动事件
window.addEventListener('scroll', function () {
    //关闭操作菜单
    if(!opertionDiv.is(":hidden")) {
        opertionDiv.hide();
    }
});


initThread(APP.data.Thread, {noimg: 0});


