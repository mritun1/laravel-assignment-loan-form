<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ABC BANK</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite(['resources/scss/app.scss'])
</head>

<body>

    <div class="content header">
        <div class="container-mid">
            <div class="navbar1">
                <div>
                    <div>
                        <img
                            src="https://st2.depositphotos.com/4035913/6124/i/450/depositphotos_61243733-stock-illustration-business-company-logo.jpg" />
                    </div>
                    <div>
                        <button class="active">Personal</button>
                    </div>
                    <div>
                        <button>NRI</button>
                    </div>
                    <div>
                        <button>SME</button>
                    </div>
                    <div>
                        <button>Wholesale</button>
                    </div>
                    <div>
                        <button>Agri</button>
                    </div>
                </div>
                <div>
                    <button><i class="fa-solid fa-location-dot"></i> location</button>
                    <button><i class="fa-solid fa-question"></i> Blog</button>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-mid">