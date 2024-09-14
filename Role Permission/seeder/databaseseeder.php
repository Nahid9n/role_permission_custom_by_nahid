<?php

// Database Seeder --------------------------------------------------------------------
        $routeCollection = Route::getRoutes();
        $middlewareGroup = 'admin.auth';
        $routeNames = [];
        foreach ($routeCollection as $route){
            $middleWares = $route->gatherMiddleware();
            if (in_array($middlewareGroup,$middleWares)){
                $routeName = $route->getName();
                if ($routeName !== 'admin.dashboard' && $routeName !== 'admin.logout'){
                    array_push($routeNames,$routeName);
                }
            }
        }
        foreach ($routeNames as $name) {
            if(!empty($name)) {
                $permission = $name;
                $permission = trim(strtolower($permission));
                $permission = preg_replace('/[\s.,-]+/', ' ', $permission);
                Permission::create([
                    'name' => $permission
                ]);
            }
        }
        