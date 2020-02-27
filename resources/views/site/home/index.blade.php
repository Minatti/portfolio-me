<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        
     /*   :padrao 
        {
            --primary-color: #302AE6;
            --secondary-color: #536390;
            --font-color: #424242;
            --bg-color: #fff;
            --heading-color: #292922;
        }        
    */
        [data-theme="dark"] {
            --primary-color: #9A97F3;
            --secondary-color: #818cab;
            --font-color: #fff;
            --bg-color: #161625;
            --heading-color: #818cab;
        }            
            html, body {
                /*background-color: #fff; */
                /* color: #636b6f; */
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-color: var(--bg-color);
                color: var(--font-color);                
            }
            
            h1 {
                color: var(--secondary-color);

                /*other styles*/
                .....
            }

            a {
                color: var(--primary-color);

                /*other styles*/
                .....
            }

            /*Simple css to style it like a toggle switch*/
            .theme-switch-wrapper {
              display: flex;
              align-items: center;

              em {
                margin-left: 10px;
                font-size: 1rem;
              }
            }
            .theme-switch {
              display: inline-block;
              height: 34px;
              position: relative;
              width: 60px;
            }

            .theme-switch input {
              display:none;
            }

            .slider {
              background-color: #ccc;
              bottom: 0;
              cursor: pointer;
              left: 0;
              position: absolute;
              right: 0;
              top: 0;
              transition: .4s;
            }

            .slider:before {
              background-color: #fff;
              bottom: 4px;
              content: "";
              height: 26px;
              left: 4px;
              position: absolute;
              transition: .4s;
              width: 26px;
            }

            input:checked + .slider {
              background-color: #66bb6a;
            }

            input:checked + .slider:before {
              transform: translateX(26px);
            }

            .slider.round {
              border-radius: 34px;
            }

            .slider.round:before {
              border-radius: 50%;
            }                        
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
                    <div class="top-right links theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox" />
                            <div class="slider round"></div>
                          </label>
                      <em> Dark Theme</em>                   
                </div>
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        <script type="text/javascript">

            const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

                function switchTheme(e) 
            {
                    if (e.target.checked) 
                    {
                        document.documentElement.setAttribute('data-theme', 'dark');
                    }
                    else 
                    {
                        document.documentElement.setAttribute('data-theme', 'light');
                    }    
            }

            toggleSwitch.addEventListener('change', switchTheme, false);                        


                function switchTheme(e) 
            {
                if (e.target.checked) 
                {
                    document.documentElement.setAttribute('data-theme', 'dark');
                    localStorage.setItem('theme', 'dark'); //add this
                }
                else 
                {
                    document.documentElement.setAttribute('data-theme', 'light');
                    localStorage.setItem('theme', 'light'); //add this
                }    
            }            

            const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;

            if (currentTheme) 
            {
                document.documentElement.setAttribute('data-theme', currentTheme);

                if (currentTheme === 'dark') 
                {
                    toggleSwitch.checked = true;
                }
            }            
        </script>
    </body>
</html>
