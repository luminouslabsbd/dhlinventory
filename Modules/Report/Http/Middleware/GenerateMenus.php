<?php

namespace Modules\Report\Http\Middleware;

use Closure;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /*
         *
         * Module Menu for Admin Backend
         *
         * *********************************************************************
         */
        \Menu::make('admin_sidebar', function ($menu) {

            // Reports
            // $menu->add('<i class="nav-icon fa-regular fa-sun"></i> '.__('Reports'), [
            //     'route' => 'backend.reports.index',
            //     'class' => 'nav-item',
            // ])
            // ->data([
            //     'order'         => 77,
            //     'activematches' => ['admin/reports*'],
            //     'permission'    => ['view_reports'],
            // ])
            // ->link->attr([
            //     'class' => 'nav-link',
            // ]);



            // Access Control Dropdown
            $accessControl = $menu->add('<i class="nav-icon fa-regular fa-sun"></i> Reports', [
                'class' => 'nav-group',
            ])
                ->data([
                    'order' => 77,
                    'activematches' => [
                        'activematches' => ['admin/reports*'],
                        'permission'    => ['view_reports'],
                    ],
                    'permission' => ['view_users', 'view_roles'],
                ]);
            $accessControl->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href' => '#',
            ]);

            // Submenu: Users
            // $accessControl->add('<i class="nav-icon fa-regular fa-sun"></i> Reports List', [
            //     'route' => 'backend.reports.index',
            //     'class' => 'nav-item',
            // ])
            //     ->data([
            //         'order' => 78,
            //         'activematches' => ['admin/reports*'],
            //         'permission'    => ['view_reports'],
            //     ])
            //     ->link->attr([
            //         'class' => 'nav-link',
            //     ]);

            // Submenu: Roles
            $accessControl->add('<i class="nav-icon fa-regular fa-sun"></i> Packaging Material', [
                 
                'class' => 'nav-item',
            ])
                ->data([
                    'order' => 79,
                    'activematches' => ['admin/reports*'],
                    'permission'    => ['view_reports'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                    'href' => '/admin/reports/report1',
                ]);


                $accessControl->add('<i class="nav-icon fa-regular fa-sun"></i> Quantity Movement', [
                 
                    'class' => 'nav-item',
                ])
                    ->data([
                        'order' => 79,
                        'activematches' => ['admin/reports*'],
                        'permission'    => ['view_reports'],
                    ])
                    ->link->attr([
                        'class' => 'nav-link',
                        'href' => '/admin/reports/report2',
                    ]);


                    $accessControl->add('<i class="nav-icon fa-regular fa-sun"></i> Value Movement', [
                 
                        'class' => 'nav-item',
                    ])
                        ->data([
                            'order' => 79,
                            'activematches' => ['admin/reports*'],
                            'permission'    => ['view_reports'],
                        ])
                        ->link->attr([
                            'class' => 'nav-link',
                            'href' => '/admin/reports/report3',
                        ]);


                        $accessControl->add('<i class="nav-icon fa-regular fa-sun"></i>  Product Movement', [
                 
                            'class' => 'nav-item',
                        ])
                            ->data([
                                'order' => 79,
                                'activematches' => ['admin/reports*'],
                                'permission'    => ['view_reports'],
                            ])
                            ->link->attr([
                                'class' => 'nav-link',
                                'href' => '/admin/reports/report4',
                            ]);


                        $accessControl->add('<i class="nav-icon fa-regular fa-sun"></i> Vendor', [
                
                            'class' => 'nav-item',
                        ])
                            ->data([
                                'order' => 79,
                                'activematches' => ['admin/reports*'],
                                'permission'    => ['view_reports'],
                            ])
                            ->link->attr([
                                'class' => 'nav-link',
                                'href' => '/admin/reports/report5',
                            ]);


                        $accessControl->add('<i class="nav-icon fa-regular fa-sun"></i> Requestor', [
            
                            'class' => 'nav-item',
                        ])
                            ->data([
                                'order' => 79,
                                'activematches' => ['admin/reports*'],
                                'permission'    => ['view_reports'],
                            ])
                            ->link->attr([
                                'class' => 'nav-link',
                                'href' => '/admin/reports/report6',
                            ]);


                        $accessControl->add('<i class="nav-icon fa-regular fa-sun"></i> Price fluctuation', [
        
                            'class' => 'nav-item',
                        ])
                            ->data([
                                'order' => 79,
                                'activematches' => ['admin/reports*'],
                                'permission'    => ['view_reports'],
                            ])
                            ->link->attr([
                                'class' => 'nav-link',
                                'href' => '/admin/reports/report7',
                            ]);


                        $accessControl->add('<i class="nav-icon fa-regular fa-sun"></i> Stock', [
    
                            'class' => 'nav-item',
                        ])
                            ->data([
                                'order' => 79,
                                'activematches' => ['admin/reports*'],
                                'permission'    => ['view_reports'],
                            ])
                            ->link->attr([
                                'class' => 'nav-link',
                                'href' => '/admin/reports/report8',
                            ]);


                        $accessControl->add('<i class="nav-icon fa-regular fa-sun"></i> Free Analysis', [

                            'class' => 'nav-item',
                        ])
                            ->data([
                                'order' => 79,
                                'activematches' => ['admin/reports*'],
                                'permission'    => ['view_reports'],
                            ])
                            ->link->attr([
                                'class' => 'nav-link',
                                'href' => '/admin/reports/report9',
                            ]);
        })->sortBy('order');

        return $next($request);
    }
}
