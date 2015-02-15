<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Use for styling the menu
    'class' => 'navbar',
 
    // Here comes the menu strcture
    'items' => [

        // This is a menu item
        'me'  => [
            'text'  => 'Hem',
            'url'   => $this->di->get('url')->create(''),
            'title' => 'Hem'
        ],
 
        // This is a menu item
        'Moment'  => [
            'text'  => 'Moment',
            'url'   => $this->di->get('url')->create('comment'),
            'title' => 'De olika kursmomentens övningar',

            // Here we add the submenu, with some menu items, as part of a existing menu item
            'submenu' => [

                'items' => [

                    // This is a menu item of the submenu
                    'guestbook' => [
                        'text'  =>'K02: Gästbok 1',
                        'url'   => $this->di->get('url')->create('comment'),
                        'title' => 'gästbok 1'
                    ],
        
                    
                    // This is a menu item of the submenu
                    'item 2'  => [
                        'text'  => 'K02: Gästbok 2',
                        'url'   => $this->di->get('url')->asset('comment1'),
                        'title' => 'gästbok 2',
                        //'class' => 'italic'
                    ],
/*
                    // This is a menu item of the submenu
                    'item 3'  => [
                        'text'  => 'humans.txt',
                        'url'   => $this->di->get('url')->asset('humans.txt'),
                        'title' => 'Url to asset relative to frontcontroller',
                    ],*/
                ],
            ],
        ],
 
        // This is a menu item
        'redovisning' => [
            'text'  =>'Redovisning',
            'url'   => $this->di->get('url')->create('redovisning'),
            'title' => 'Redovisningar',
            'mark-if-parent-of' => 'controller',
        ],
        

        // This is a menu item
        'source' => [
            'text'  =>'Source',
            'url'   => $this->di->get('url')->create('source'),
            'title' => 'Källkoder'
        ],
                

    ],
 


    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    'callback' => function ($url) {
        if ($this->di->get('request')->getCurrentUrl($url) == $this->di->get('url')->create($url)) {
            return true;
        }
    },



    /**
     * Callback to check if current page is a decendant of the menuitem, this check applies for those
     * menuitems that has the setting 'mark-if-parent' set to true.
     *
     */
    'is_parent' => function ($parent) {
        $route = $this->di->get('request')->getRoute();
        return !substr_compare($parent, $route, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
   /*
    'create_url' => function ($url) {
        return $this->di->get('url')->create($url);
    },
    */
];
