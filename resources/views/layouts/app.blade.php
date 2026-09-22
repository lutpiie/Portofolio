<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nystra Coffee</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cream: '#FDF5E6',
                        'cream-dark': '#F0E4C8',
                        'green-brand': '#1B3A5C',
                        'green-dark': '#0E2540',
                        'green-light': '#2E5D8C',
                    },
                    fontFamily: {
                        display: ['Playfair Display', 'serif'],
                        body: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FDF5E6;
        }
        .font-display {
            font-family: 'Playfair Display', serif;
        }

        .img-placeholder {
            background-color: #E8E0D0;
            border: 2px dashed #C4B89A;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #B0A68C;
            border-radius: 12px;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(12px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .page-animate {
            animation: fadeIn 0.4s ease;
        }

        .nav-link {
            position: relative;
            transition: color 0.3s ease;
            padding-bottom: 4px;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #FDF5E6;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        .menu-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .menu-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 16px 32px rgba(0,0,0,0.12);
        }

        .item-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .item-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }

        .btn-kembali:hover {
            transform: translateX(-4px);
        }

        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #FDF5E6; }
        ::-webkit-scrollbar-thumb { background: #C4B89A; border-radius: 4px; }
    </style>
</head>
<body class="min-h-screen">

    <!-- NAVBAR -->
    @include('partials.navbar')

    <!-- KONTEN HALAMAN -->
    <div class="page-animate">
        @yield('content')
    </div>

    <!-- FOOTER -->
    @include('partials.footer')

</body>
</html>