<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=no">

        <title>PolyBlog</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="{{asset('styles.css')}}" rel="stylesheet" type="text/css">

        {{-- Include Polymer Imports --}}
        @include('includes.polyimports')

       <style is="custom-style">
        paper-toolbar {
            --paper-toolbar-background: #e9e9e9;
            --paper-toolbar-color: #212121;
/*            --paper-toolbar: {
                font-size: 40px;
            };*/
        }
       </style>

    </head>
    <body class="fullbleed layout vertical">
        <paper-drawer-panel narrow>

            <paper-header-panel drawer>
                <div class="nav-div"> <a href="{{route('index')}}"><paper-icon-button icon="chevron-left"></paper-icon-button>Home</a></div>
                <div class="nav-div"> <a href="{{route('posts.index')}}"><paper-icon-button icon="chevron-left"></paper-icon-button>All Posts</a></div>
                <div class="nav-div"> <a href="{{route('categories.index')}}"><paper-icon-button icon="chevron-left"></paper-icon-button>All Categories</a></div>
            </paper-header-panel>

            <paper-header-panel mode="waterfall" main>

                <paper-toolbar class="main-toolbar">
                    <paper-icon-button icon="menu" paper-drawer-toggle></paper-icon-button>
                    <span class="title">PolyBlog</span>
                    <paper-icon-button icon="refresh"></paper-icon-button>
                    <paper-icon-button icon="add">+</paper-icon-button>
                </paper-toolbar>

                <div class="layout horizontal center-justified">
                    @yield('content')
                </div>

                <footer class="flex">&copy; PolyBlog.com | Powered by Sapioweb.com</footer>

            </paper-header-panel>
        </paper-drawer-panel>
    </body>
</html>
