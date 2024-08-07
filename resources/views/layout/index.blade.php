<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinas Pendidikan Provinsi Jambi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        body {
            background-color: #0D47A1;
            color: white;
            font-family: "Poppins", sans-serif;
        }

        .content {
            padding: 20px;
        }

        .search-bar {
            /* background-color: #002080; */
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .search-bar input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
        }

        .carousel {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            margin-bottom: 20px;
            /* Ensures the border-radius is applied properly */
        }

        .social-icons {
            position: fixed;
            top: 50%;
            transform: translateY(-50%);
            left: 15px;
            z-index: 1000;
            background-color:
        }

        .social-icons a {
            display: block;
            margin-bottom: 10px;
            font-size: 24px;
        }

        .news-container {
            margin-top: 20px;
        }

        .news-main img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .news-sidebar img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .news-card {
            margin-bottom: 20px;
        }

        .announcement {
            border-bottom: 1px solid #e0e0e0;
            padding: 10px 0;
        }

        .date-time {
            display: flex;
            align-items: center;
            font-size: 0.9em;
            color: #888;
        }

        .date-time i {
            margin-right: 5px;
        }

        .preview {
            border: 1px solid #e0e0e0;
            padding: 15px;
            text-align: center;
            background-color: #f9f9f9;
        }

        .preview img {
            max-width: 100%;
            height: auto;
        }

        .gallery-title {
            margin: 20px 0;
            text-align: center;
        }



        .card-body {
            padding: 10px;
        }

        .card-text {
            font-size: 0.9em;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 5px;
        }

        .card-text i {
            margin-right: 5px;
        }

        .nav-tabs .nav-link {
            color: white;
        }

        .nav-tabs .nav-link.active {

            border: none;
            border-bottom: 2px solid white;
        }

        .left-column {
            flex: 1;
            margin-right: 20px;
        }

        .right-column {
            flex: 1;
            /* Blue color */
            padding: 20px;
        }

        .right-column .header {
            font-weight: bold;
            margin-bottom: 10px;
            border-bottom: 1px solid white;
            padding-bottom: 5px;
        }

        .right-column .content {
            background-color: white;
            color: black;
            padding: 20px;
        }
    </style>
</head>

<body>

    @include('layout/navbar')
    @yield('content')
    @include('layout.footer')




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="https://kit.fontawesome.com/f10456a175.js" crossorigin="anonymous"></script>

</body>

</html>
