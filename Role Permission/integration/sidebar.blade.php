<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(auth()->user()->hasPermission('admin user index') || auth()->user()->hasPermission('admin role index') || auth()->user()->hasPermission('admin permission index'))
    <li class="slide">
        <a class="side-menu__item" data-bs-toggle="slide" href="#">
            <i class="side-menu__icon fa-solid fa-gear"></i>
            <span class="side-menu__label">User & Access</span><i class="angle fa fa-angle-right"></i>
        </a>
        <ul class="slide-menu">
            <li class="side-menu-label1"><a href="">User & Access</a></li>
            @if(auth()->user()->hasPermission('admin user index'))
            <li><a href="{{route('admin.user.index')}}" class="slide-item">users</a></li>
            @endif
            @if(auth()->user()->hasPermission('admin role index'))
            <li><a href="{{route('admin.role.index')}}" class="slide-item">Role</a></li>
            @endif
            @if(auth()->user()->hasPermission('admin permission index'))
            <li><a href="{{route('admin.permission.index')}}" class="slide-item">Permission</a></li>
            @endif
        </ul>
    </li>
    @endif
</body>
</html>
