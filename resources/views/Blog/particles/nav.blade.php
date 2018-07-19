<div class="navbar">


    <ul class="layui-nav layui-bg-blue">
        <label for="to-mune" class="to-mune">菜单</label>

        <input type="checkbox" class="to-mune " id="to-mune" style="display: none">


        <li class="layui-nav-item">
            <a href="">主页</a>
        </li>

        <li class="layui-nav-item">
            <a href="{{route('create')}}">发帖</a>
        </li>

        <li class="layui-nav-item">
            <a href="">标签</a>

            <dl class="layui-nav-child">
           @foreach($blogtags as $blogtag)
                <dd><a href="{{route('tag.show',$blogtag->id)}}">php是世界最好的</a></dd>
           @endforeach
            </dl>

        </li>

        <li class="layui-nav-item">

            {{--已登录--}}
            @if (!Auth::guest())
            <a href=""><img src="{{asset('blog/img/avatar.jpg')}}" class="layui-nav-img">我</a>
            <dl class="layui-nav-child">
                <dd><a href="javascript:;">个人中心</a></dd>
                <dd><a href="javascript:;">退了</a></dd>
            </dl>
             @else
                <a href=""><img src="{{asset('blog/img/avatar.jpg')}}" class="layui-nav-img">我</a>
                <dl class="layui-nav-child">
                    <dd><a href="javascript:;">登录</a></dd>
                    <dd><a href="javascript:;">注册</a></dd>
                </dl>

            @endif

        </li>

        <li class="layui-nav-item">
            <a href="">消息</a>
        </li>


        <li class="layui-nav-item">
            <a href="">搜索</a>
            <dl class="layui-nav-child">
                <dd>
                    <form class="layui-form layui-form-pane" action="">

                        <input type="text" name="title" required lay-verify="required" placeholder="随便搜点什么吧" autocomplete="off" class="layui-input" id="hacker-search">
                        <button class="layui-btn" style="width: 100%">搜索</button>
                    </form>
                </dd>


            </dl>
        </li>







        <li class="layui-nav-item login" >
            <a href="">登录</a>
        </li>



    </ul>

