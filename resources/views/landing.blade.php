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
        html {
            scroll-behavior: smooth;
        }
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        .hero {
            background: linear-gradient(rgba(210, 180, 140, 0.7), rgba(255, 127, 0, 0.7)), url('https://images.unsplash.com/photo-1600891964599-f61ba0e24092?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 100vh;
        }

        .specialties {
            background: linear-gradient(rgba(255, 127, 0, 0.7), rgba(210, 180, 140, 0.7)), url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

                .food-card {
            transition: all 0.3s ease;
            transform: translateY(0);
        }
        
        .food-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
                .btn-primary {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            transition: 0.5s;
        }

        .btn-primary:hover::after {
            left: 100%;
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .social-icon {
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            transform: scale(1.2) rotate(10deg);
        }
        
        .offer-card {
            transition: all 0.3s ease;
        }
        
        .offer-card:hover {
            transform: scale(1.05);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        .slide-in {
            animation: slideIn 0.5s ease-out forwards;
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }
          .neon-link {
        color: #FF7F00; /* base neon orange */
        text-shadow: 0 0 5px #FF7F00, 0 0 10px #FF7F00, 0 0 20px #FF7F00;
        transition: all 0.3s ease;
    }

    .neon-link:hover {
        color: #FFD580;
        text-shadow: 0 0 10px #FFD580, 0 0 20px #FFD580, 0 0 30px #FFD580;
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
                        <a href="{{ route('reservations.create') }}" class="btn-primary bg-zeupreme-orange hover:bg-zeupreme-orange-dark text-white font-bold py-3 px-8 rounded-full text-lg inline-block">Book Table</a>
                    @else
                        <a href="{{ route('login') }}" class="btn-primary bg-zeupreme-orange hover:bg-zeupreme-orange-dark text-white font-bold py-3 px-8 rounded-full text-lg inline-block">Book Table</a>
                    @endauth
                </div>
            </div>
        </div>
    </section>

        <!-- Specialties Section -->
    <section id="specialties" class="specialties py-20">
        <div class="container mx-auto px-4">
            <h2 class="font-heading text-4xl md:text-5xl text-center text-white mb-16">Our Specialties</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-6xl mx-auto">
                <!-- Fried Chicken Card -->
                <div class="food-card bg-white rounded-2xl overflow-hidden shadow-xl">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1626645738196-c2a7c87a8f58?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Fried Chicken" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="font-heading text-2xl text-zeupreme-orange mb-2">Crispy Fried Chicken</h3>
                        <p class="text-gray-600 mb-4">Our signature crispy chicken, marinated for 24 hours and fried to golden perfection.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-zeupreme-orange">$12.99</span>
                            <button class="btn-primary bg-zeupreme-orange hover:bg-zeupreme-orange-dark text-white py-2 px-6 rounded-full">Add to Cart</button>
                        </div>
                    </div>
                </div>
                
                <!-- Tacos Card -->
                <div class="food-card bg-white rounded-2xl overflow-hidden shadow-xl">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1565299585323-38d6b0865b47?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1080&q=80" alt="Tacos" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="font-heading text-2xl text-zeupreme-orange mb-2">Zesty Street Tacos</h3>
                        <p class="text-gray-600 mb-4">Authentic street-style tacos with your choice of protein, fresh salsa, and lime crema.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-zeupreme-orange">$10.99</span>
                            <button class="btn-primary bg-zeupreme-orange hover:bg-zeupreme-orange-dark text-white py-2 px-6 rounded-full">Add to Cart</button>
                        </div>
                    </div>
                </div>
                
                <!-- Pizza Card -->
                <div class="food-card bg-white rounded-2xl overflow-hidden shadow-xl">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1081&q=80" alt="Pizza" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="font-heading text-2xl text-zeupreme-orange mb-2">Supreme Pizza</h3>
                        <p class="text-gray-600 mb-4">Loaded with premium toppings on our signature hand-tossed crust. A crowd favorite!</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-zeupreme-orange">$15.99</span>
                            <button class="btn-primary bg-zeupreme-orange hover:bg-zeupreme-orange-dark text-white py-2 px-6 rounded-full">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Current Offers -->
    <section id="offers" class="py-20 bg-zeupreme-brown-light">
        <div class="container mx-auto px-4">
            <h2 class="font-heading text-4xl md:text-5xl text-center text-zeupreme-orange mb-4">Current Offers</h2>
            <p class="text-center text-gray-700 mb-16">Limited time deals - grab them while they last!</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Offer 1 -->
                <div class="offer-card bg-white rounded-2xl overflow-hidden shadow-lg">
                    <div class="relative">
                        <div class="absolute top-4 right-4 bg-red-600 text-white font-bold py-1 px-3 rounded-full">HOT</div>
                        <img src="https://tb-static.uber.com/prod/enhanced-images/image-touchup-v1/2944af785f200e01c590cec37a3bdbde/e87ab110c99662c2980d98b20e9cd454.jpeg" alt="Family Feast" class="w-full h-56 object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-2xl text-zeupreme-orange mb-2">Family Feast Deal</h3>
                        <p class="text-gray-600 mb-4">2 Large Pizzas, 8-Piece Chicken, Fries & 4 Drinks</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-xl font-bold text-zeupreme-orange">$29.99</span>
                                <span class="text-gray-500 line-through ml-2">$42.99</span>
                            </div>
                            <button class="btn-primary bg-zeupreme-orange hover:bg-zeupreme-orange-dark text-white py-2 px-6 rounded-full">Order Now</button>
                        </div>
                    </div>
                </div>
                
                <!-- Offer 2 -->
                <div class="offer-card bg-white rounded-2xl overflow-hidden shadow-lg">
                    <div class="relative">
                        <div class="absolute top-4 right-4 bg-red-600 text-white font-bold py-1 px-3 rounded-full">NEW</div>
                        <img src="{{ asset('images/tacoss.jpg') }}" alt="Taco Tuesday" class="w-full h-56 object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-2xl text-zeupreme-orange mb-2">Taco Tuesday</h3>
                        <p class="text-gray-600 mb-4">3 Tacos + Drink + Chips for only $9.99 every Tuesday</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-xl font-bold text-zeupreme-orange">$9.99</span>
                                <span class="text-gray-500 line-through ml-2">$14.99</span>
                            </div>
                            <button class="btn-primary bg-zeupreme-orange hover:bg-zeupreme-orange-dark text-white py-2 px-6 rounded-full">Order Now</button>
                        </div>
                    </div>
                </div>
                
                <!-- Offer 3 -->
                <div class="offer-card bg-white rounded-2xl overflow-hidden shadow-lg">
                    <div class="relative">
                        <div class="absolute top-4 right-4 bg-red-600 text-white font-bold py-1 px-3 rounded-full">30% OFF</div>
                        <img src="https://images.unsplash.com/photo-1532903460337-0d1b9a71b2c0?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Lunch Combo" class="w-full h-56 object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-2xl text-zeupreme-orange mb-2">Lunch Combo</h3>
                        <p class="text-gray-600 mb-4">Half Sandwich + Soup/Salad + Drink (11am-2pm)</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-xl font-bold text-zeupreme-orange">$8.99</span>
                                <span class="text-gray-500 line-through ml-2">$12.99</span>
                            </div>
                            <button class="btn-primary bg-zeupreme-orange hover:bg-zeupreme-orange-dark text-white py-2 px-6 rounded-full">Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section id="location" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="font-heading text-4xl md:text-5xl text-center text-zeupreme-orange mb-4">Find Us</h2>
            <p class="text-center text-gray-700 mb-16">Visit our restaurant for the full Zeupreme experience</p>
            
            <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="bg-gray-100 rounded-2xl p-6 shadow-lg">
                    <h3 class="text-2xl font-bold text-zeupreme-orange mb-4">Our Location</h3>
                    <p class="text-gray-700 mb-6">
                        <i class="fas fa-map-marker-alt text-zeupreme-orange mr-2"></i>
                        123 Flavor Street, Westlands, Nairobi, Kenya
                    </p>
                    <p class="text-gray-700 mb-6">
                        <i class="fas fa-phone text-zeupreme-orange mr-2"></i>
                        +254 712 345 678
                    </p>
                    <p class="text-gray-700 mb-6">
                        <i class="fas fa-clock text-zeupreme-orange mr-2"></i>
                        Mon-Sat: 10am - 10pm<br>
                        Sun: 11am - 8pm
                    </p>
                    <div class="mt-8">
                        <h4 class="text-xl font-bold text-zeupreme-orange mb-3">Parking Available</h4>
                        <p class="text-gray-700">Free parking for customers in our dedicated lot</p>
                    </div>
                </div>
                
                <div class="rounded-2xl overflow-hidden shadow-lg h-96">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.808156989199!2d36.81221431475399!3d-1.2922351990550003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d4b2d5b5a7%3A0x1d5d0a0b4b4b4b4b!2sWestlands%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1629999999999!5m2!1sen!2ske" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Follow Us -->
    <section id="follow" class="py-20 bg-zeupreme-orange">
        <div class="container mx-auto px-4 text-center">
            <h2 class="font-heading text-4xl md:text-5xl text-white mb-4">Follow Us</h2>
            <p class="text-white mb-12 max-w-2xl mx-auto">Stay updated with our latest creations, special offers, and behind-the-scenes moments!</p>
            
            <div class="flex justify-center space-x-8 mb-16">
                <a href="https://www.instagram.com/zeus_thought5/" class="social-icon text-white text-4xl hover:text-zeupreme-brown-light">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="social-icon text-white text-4xl hover:text-zeupreme-brown-light">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="#" class="social-icon text-white text-4xl hover:text-zeupreme-brown-light">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-icon text-white text-4xl hover:text-zeupreme-brown-light">
                    <i class="fab fa-tiktok"></i>
                </a>
            </div>
            
            <div class="max-w-2xl mx-auto">
                <h3 class="text-2xl font-bold text-white mb-6">Subscribe to Our Newsletter</h3>
                <div class="flex flex-col sm:flex-row gap-4">
                    <input type="email" placeholder="Your email address" class="flex-grow px-6 py-3 rounded-full focus:outline-none focus:ring-2 focus:ring-white">
                    <button class="btn-primary bg-white hover:bg-gray-100 text-zeupreme-orange font-bold py-3 px-8 rounded-full">Subscribe</button>
                </div>
            </div>
        </div>
    </section>

        <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <a href="#" class="text-zeupreme-orange font-heading text-3xl">Zeupreme Deli🍔</a>
                    <p class="text-gray-400 mt-2">Where Flavor Meets Passion</p>
                </div>
                <div class="text-center md:text-right">
                    <p class="text-gray-400">&copy; 2023 Zeupreme Deli. All rights reserved.</p>
                    <p class="text-gray-500 mt-2">Designed by Zeus with ❤️ for food lovers</p>
                     <p class="text-gray-500 mt-2">
                        Check out my portfolio 
                        <a href="https://zeupreme.netlify.app/" target="_blank" class="neon-link">Zeus.com</a>
                    </p>

                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
        
        // Close mobile menu when clicking a link
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('mobile-menu').classList.add('hidden');
            });
        });
        
        // Parallax effect
        window.addEventListener('scroll', function() {
            const scrollPosition = window.pageYOffset;
            
            // Hero section parallax
            const hero = document.querySelector('.hero');
            hero.style.backgroundPositionY = -scrollPosition * 0.5 + 'px';
            
            // Specialties section parallax
            const specialties = document.querySelector('.specialties');
            specialties.style.backgroundPositionY = -scrollPosition * 0.3 + 'px';
        });
        
        // Slide-in animation for elements when they enter viewport
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('slide-in');
                }
            });
        }, { threshold: 0.1 });
        
        document.querySelectorAll('.food-card, .offer-card').forEach(card => {
            observer.observe(card);
        });
    </script>

 
</body>
</html>
