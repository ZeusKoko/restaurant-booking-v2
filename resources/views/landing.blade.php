<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeupreme Deli - Where Flavor Meets Passion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- ... fonts + style config ... (same as your original head) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Luckiest+Guy&display=swap" rel="stylesheet">
    {{-- Keep your Tailwind config here --}}
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'zeupreme-orange': '#FF7F00',
                        'zeupreme-brown': '#D2B48C',
                        'zeupreme-orange-dark': '#E07000',
                        'zeupreme-brown-light': '#E5D0B1',
                    },
                    fontFamily: {
                        heading: ['Luckiest Guy', 'cursive'],
                        body: ['Poppins', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        .hero {
    background: linear-gradient(rgba(255, 127, 0, 0.2), rgba(210, 180, 140, 0.2)), url('https://images.unsplash.com/photo-1600891964599-f61ba0e24092?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 100vh;
}

    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-white bg-opacity-90 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <a href="{{ url('/') }}" class="text-zeupreme-orange font-heading text-3xl">Zeupreme Deli</a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#hero" class="text-gray-700 hover:text-zeupreme-orange font-medium">Home</a>
                    <a href="#specialties" class="text-gray-700 hover:text-zeupreme-orange font-medium">Specialties</a>
                    <a href="#offers" class="text-gray-700 hover:text-zeupreme-orange font-medium">Offers</a>
                    <a href="#location" class="text-gray-700 hover:text-zeupreme-orange font-medium">Location</a>
                    <a href="#follow" class="text-gray-700 hover:text-zeupreme-orange font-medium">Follow Us</a>
                    <!-- Book button in navbar -->
                    @auth
                        <a href="{{ route('reservations.create') }}" class="bg-zeupreme-orange text-white py-2 px-4 rounded-full font-medium">
                            Book Table
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="bg-zeupreme-orange text-white py-2 px-4 rounded-full font-medium">
                            Book Table
                        </a>
                    @endauth
                </div>
                <div class="flex items-center md:hidden">
                    <button id="menu-toggle" class="text-gray-700 hover:text-zeupreme-orange">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white py-4 px-4 shadow-lg">
            <div class="flex flex-col space-y-4">
                <a href="#hero" class="text-gray-700 hover:text-zeupreme-orange font-medium">Home</a>
                <a href="#specialties" class="text-gray-700 hover:text-zeupreme-orange font-medium">Specialties</a>
                <a href="#offers" class="text-gray-700 hover:text-zeupreme-orange font-medium">Offers</a>
                <a href="#location" class="text-gray-700 hover:text-zeupreme-orange font-medium">Location</a>
                <a href="#follow" class="text-gray-700 hover:text-zeupreme-orange font-medium">Follow Us</a>
                @auth
                    <a href="{{ route('reservations.create') }}" class="text-white bg-zeupreme-orange text-center py-2 rounded-full">Book Table</a>
                @else
                    <a href="{{ route('login') }}" class="text-white bg-zeupreme-orange text-center py-2 rounded-full">Book Table</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="hero flex items-center justify-center text-center">
        <div class="container mx-auto px-4 py-20 mt-20">
            <div class="max-w-3xl mx-auto">
                <h1 class="font-heading text-5xl md:text-7xl text-white mb-4 slide-in">Zeupreme Deli</h1>
                <h2 class="text-2xl md:text-3xl text-white mb-10 slide-in">Where Flavor Meets Passion</h2>
                <div class="flex flex-col sm:flex-row justify-center gap-4 mt-8">
                    <a href="#offers" class="btn-primary bg-zeupreme-orange hover:bg-zeupreme-orange-dark text-white font-bold py-3 px-8 rounded-full text-lg inline-block pulse">Order Now</a>
                    <a href="#specialties" class="btn-primary bg-white hover:bg-gray-100 text-zeupreme-orange font-bold py-3 px-8 rounded-full text-lg inline-block">View Menu</a>
                    @auth
                        <a href="{{ route('reservations.create') }}" class="btn-primary bg-zeupreme-brown hover:bg-zeupreme-orange-dark text-white font-bold py-3 px-8 rounded-full text-lg inline-block">Book Table</a>
                    @else
                        <a href="{{ route('login') }}" class="btn-primary bg-zeupreme-brown hover:bg-zeupreme-orange-dark text-white font-bold py-3 px-8 rounded-full text-lg inline-block">Book Table</a>
                    @endauth
                </div>
            </div>
        </div>
    </section>

    <!-- The rest of your static sections remain exactly the same: Specialties, Offers, Location, Follow, Footer -->
    <!-- ... paste ALL remaining sections as-is all the way to end of file ... -->

</body>
</html>
