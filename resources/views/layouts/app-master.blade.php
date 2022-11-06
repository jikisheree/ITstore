<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>IT store</title>
    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <style>
        a{
            text-decoration-line:none !important;
        }
        a:hover{
            text-decoration-color: #ffcc66 !important;
        }
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            word-wrap: break-word;
        }

        .app {
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
        }

        .page-container {
            flex: 1 0 auto;
            display: flex;
        }

        .page-home {
            --page-home-padding: 4rem;
            padding-bottom: var(--page-home-padding);
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            background-color: #f8f8f8;
        }

        .the-main-header {
            width: 100%;
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom: 1px solid #f4f4f4;
        }

        .header-container>.container,
        .header-container>.container>.header-left,
        .header-container>.container>.header-right {
            display: flex;
            align-items: center;
        }

        .header-container {
            --layout-main-header-height: 5rem;
            background-color: #fff;
            position: relative;
            z-index: 1;
            width: 100%;
            height: var(--layout-main-header-height);
        }

        .header-container>.container {
            width: 100%;
            height: 100%;
            justify-content: space-between;
        }

        .container {
            width: 100%;
            padding: 0 .75rem;
            margin: 0 auto;
        }

        .text-field .text-field-container.-icon-right input {
            padding-right: 3rem;
        }

        .search-box .search-bar {
            width: 100%;
            display: flex;
        }

        input[type="search"i] {
            appearance: auto;
            box-sizing: border-box;
            padding: 1px 2px;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        .text-field input[type=email],
        .text-field input[type=number],
        .text-field input[type=password],
        .text-field input[type=search],
        .text-field input[type=tel],
        .text-field input[type=text],
        .text-field textarea {
            min-height: 2.5rem;
            min-width: 7rem;
            width: 100%;
            padding: .5rem .75rem;
            border: none;
            border-bottom: 1px solid rgba(0, 0, 0, .16);
            border-radius: 0;
            font-weight: 500;
            line-height: 1.5;
            color: rgba(0, 0, 0, .9);
        }

        .the-main-header .search-box-desktop {
            display: flex;
            margin-left: 4.75rem;
            width: 50vw;
            max-width: 31.25rem;
            height: 2.5rem;
        }

        .search-box {
            position: relative;
            width: 100%;
        }

        button {
            appearance: auto;
            writing-mode: horizontal-tb !important;
            text-rendering: auto;
            letter-spacing: normal;
            word-spacing: normal;
            line-height: normal;
            text-transform: none;
            text-indent: 0px;
            text-shadow: none;
            display: inline-block;
            text-align: center;
            align-items: flex-start;
            cursor: default;
            box-sizing: border-box;
            margin: 0em;
            padding: 1px 6px;
            border-width: 2px;
            border-style: outset;
            border-color: buttonborder;
            border-image: initial;
        }

        .btn.-primary {
            color: #252525;
            background-color: #fd0;
            border: 1px solid #fd0;
        }

        .btn-search {
            width: 4rem;
            margin-left: .5rem;
        }

        .header-menu-item {
            background-color: transparent;
            border: 0;
            padding: 0;
            overflow: visible;
            position: relative;
            width: 2.5rem;
            height: 2.5rem;
            margin-right: .5rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #252525;
            text-decoration: none;
            font-weight: 600;
            line-height: 1.5;
            cursor: pointer;
            margin-right: 0;
        }

        .header-menu-item.-with-text {
            width: auto;
            padding: 0 .375rem;
        }

        .svg-inline--fa.fa-w-14 {
            width: .875em;
        }

        .svg-inline--fa {
            display: inline-block;
            font-size: inherit;
            height: 1em;
            vertical-align: -.125em;
        }

        .separator {
            display: block;
            margin: 0 1.5rem;
            height: 1.5rem;
            border-left: 1px solid rgba(0, 0, 0, .08);
        }

        .header-menu-item.-with-text>.text {
            display: inline;
            margin-left: .5rem;
            margin-right: .5rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 5rem;
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="app">
        @include('layouts.partials.navbar')
        <main class="page-container">
            @yield('content')
        </main>
        <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    </div>
</body>

</html>