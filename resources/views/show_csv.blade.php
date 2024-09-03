<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Halaman Show File Csv</title>
    <!-- ... existing code ... -->
    <style>
        #wrapper {
            display: flex;
        }

        #wrapper #content-wrapper {
            background-color: #f8f9fc;
            width: 100%;
            overflow-x: hidden;
        }

        #wrapper #content-wrapper #content {
            flex: 1 0 auto;
        }

        .navbar {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding: 0.5rem 1rem;
        }

        .navbar .container,
        .navbar .container-fluid {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }

        .navbar-nav {
            display: flex;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .navbar-nav .nav-link {
            padding-right: 0;
            padding-left: 0;
            color: black;
            font-size: 18px;
            transition: color 0.3s, transform 0.3s;
        }

        .nav-link:hover,
        .nav-link:focus {
            text-decoration: none;
            color: #ffcc00;
            transform: scale(1.1);
        }

        .navbar-expand {
            flex-flow: row nowrap;
            justify-content: flex-start;
        }

        .shadow {
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15) !important;
        }

        .d-flex {
            display: flex;
        }

        .flex-column {
            flex-direction: column !important;
        }

        .detail-csv {
            padding: 30px;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!--Navbar Section-->
                <nav class="navbar navbar-expand shadow">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/layanan.slb">Service</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://www.slb.com" target="_blank">About</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#layanan4">Contact</a></li>
                    </ul>
                </nav>
                <div class="container-fluid">
                    <div class="detail-csv">
                        <a href="/search-slb" class="btn btn-secondary">Kembali</a>
                        <h3 class="detail-csv-title mt-3">Detail File CSV</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    @if (!empty($csvData) && count($csvData) > 0)
                                        @foreach ($csvData[0] as $header)
                                            @php
                                                $headers = str_replace(' ', '', explode(';', $header));
                                            @endphp
                                            @foreach ($headers as $head)
                                                <th>{{ $head }}</th>
                                            @endforeach
                                        @endforeach
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($csvData as $index => $row)
                                    @if ($index > 0)
                                        <tr>
                                            @foreach ($row as $cell)
                                                @php
                                                    $cells = str_replace(' ', '', explode(';', $cell));
                                                @endphp
                                                @foreach ($cells as $col)
                                                    <td>{{ $col }}</td>
                                                @endforeach
                                            @endforeach
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"></script>
