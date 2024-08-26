<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Waleed Anwar's - Portfolio</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Beginner:wght@400..700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/typescript@latest/lib/typescript.js"></script>
    <link rel="icon" href="images/images.png" type="image/png" sizes="192x192">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
 .carousel-container {
    position: relative;
    width: 100%;
    overflow: hidden;
    background-color: #1F2937; /* Gray-800 */
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.carousel-wrapper {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.carousel {
    display: flex;
    gap: 30px;
}

.carousel-item {
    flex: 0 0 320px;
    background-color: #F9FAFB; /* Gray-50 */
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.carousel-item:hover {
    transform: scale(1.05);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
}

.carousel-content {
    text-align: center;
}

.carousel-item img {
    width: 90px;
    height: 90px;
    border-radius: 50%;
    margin-bottom: 15px;
    border: 4px solid #1F2937; /* Gray-800 */
}

.carousel-item h3 {
    color: #111827; /* Gray-900 */
    font-size: 1.25rem;
    margin-bottom: 5px;
}

.carousel-item p {
    color: #6B7280; /* Gray-500 */
    font-size: 0.875rem;
}

.review-text {
    color: #374151; /* Gray-600 */
    font-size: 1rem;
    margin-top: 10px;
}

.carousel-control {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: #111827; /* Gray-900 */
    color: white;
    border: none;
    border-radius: 50%;
    padding: 12px;
    cursor: pointer;
    z-index: 100;
}

.carousel-control.left {
    left: 20px;
}

.carousel-control.right {
    right: 20px;
}

.carousel-control:focus {
    outline: none;
}

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(1.05);
                opacity: 0.7;
            }
        }

        button,
        a {
            animation: pulse 2s infinite;
        }

        #goTopBtn {
            display: none;
            /* Hidden by default */
            z-index: 1000;
            /* Ensure it appears above other elements */
        }

        #goTopBtn.show {
            display: block;
        }

        /* Optional: Style for the typing cursor */
        #greeting::after {
            content: '|';
            animation: blink 0.7s infinite;
            font-weight: bold;
        }

        @keyframes blink {
            50% {
                opacity: 0;
            }
        }

        .fancy-border-radius-radius {
            border-radius: 100% 0% 100% 0% / 0% 81% 19% 100%;
        }

        .faq-content {
            display: none;

        }

        .faq-content.show {
            display: block;

        }

        /* Custom styles for navbar transition */
        #navbar {
            transition: all 0.8s ease;
        }

        #navbar.scrolled {
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50%;
            background-color: white;
            border-radius: 9999px;
            z-index: 50;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #navbar.scrolled .mobile-menu-button {
            display: block;
        }

        /* Ensure hamburger menu is only visible on mobile */
        .mobile-menu-button {
            display: none;
        }

        @media (max-width: 768px) {
            .mobile-menu-button {
                display: block;
            }
        }

        ::-webkit-scrollbar {
            width: 12px;
            /* Width of the scrollbar */
        }

        ::-webkit-scrollbar-track {
            background: #f4f4f4;
            /* Background of the scrollbar track */
            border-radius: 10px;
            /* Rounded corners of the track */
        }

        ::-webkit-scrollbar-thumb {
            background-color: #ff7043;
            /* Color of the scrollbar thumb */
            border-radius: 10px;
            /* Rounded corners of the thumb */
            border: 3px solid #f4f4f4;
            /* Space between the thumb and the track */
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #ff5722;
            /* Thumb color on hover */
        }

        body,
        html {
            font-family: "Noto Sans", sans-serif;
            scroll-behavior: smooth;
        }

        .fancy-border-radius {
            border-radius: 68% 32% 68% 32% / 66% 74% 26% 34%;
        }

        #greeting {
            font-family: "Edu VIC WA NT Beginner", cursive;
        }

        #name {
            font-family: "Edu VIC WA NT Beginner", cursive;
        }
    </style>
</head>

<body class="cursor-pointer">
    <nav id="navbar" class="bg-gradient-to-r from-white via-orange-100 to-white shadow-lg transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <!-- Logo -->
            <div class="text-xl font-bold text-gray-800">
                <a href="index.php" id="name">Waleed Anwar</a>
            </div>

            <!-- Menu Items -->
            <div class="hidden md:flex space-x-6 items-center">
                <a href="#about" class="text-gray-600 hover:text-gray-900">About</a>
                <a href="#skills" class="text-gray-600 hover:text-gray-900">Skills</a>
                <a href="#projects" class="text-gray-600 hover:text-gray-900">Projects</a>
                <!-- Button with Tailwind CSS -->
                <a href="#contact" class="inline-block px-6 py-3 rounded-lg bg-orange-600 text-white font-semibold text-lg shadow-md transition-transform transform hover:scale-105 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50">
                    Hire Me
                </a>

            </div>

            <!-- Mobile Menu Button -->
            <div class="mobile-menu-button">
                <button id="mobile-menu-button" class="focus:outline-none lg:hidden">
                    <svg class="h-6 w-6 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden px-4 pb-4">
            <a href="#about" class="block text-gray-700 hover:bg-gray-100 rounded py-2">About</a>
            <a href="#skills" class="block text-gray-700 hover:bg-gray-100 rounded py-2">Skills</a>
            <a href="#projects" class="block text-gray-700 hover:bg-gray-100 rounded py-2">Projects</a>
            <a href="#contact" class="block text-gray-700 hover:bg-gray-100 rounded py-2">Contact</a>
        </div>
    </nav>
    <!-- Main content -->
    <section class="text-white py-20 bg-orange-600 fancy-border-radius-radius">
        <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-center">
            <!-- Left Section: Text Content -->
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 id="greeting" class="text-4xl md:text-5xl font-bold mb-6">Hello, I'm Waleed Anwar</h1>
                <p class="text-lg md:text-xl text-white mb-6">
                    I'm a passionate web developer specializing in creating beautiful and functional websites using modern technologies. Let’s build something amazing together!
                </p>
                <!-- Button with Tailwind CSS -->
                <a href="#projects" class="inline-block px-6 py-3 rounded-lg bg-white text-orange-500 font-semibold text-lg shadow-md transition-transform transform hover:scale-105 hover:bg-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50">
                    View My Work
                </a>
            </div>
            <!-- Right Section: Image -->
            <div class="md:w-1/2 flex justify-center md:justify-end">
                <img src="images/Untitled-removebg-preview.png" alt="Waleed Anwar" class="w-3/4">
            </div>
        </div>
    </section>



    <section id="about" class="py-20 bg-white mt-10">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">About Me</h2>
            <p class="text-lg text-orange-500 text-center">
                Hello! I'm Waleed Anwar, currently pursuing a Bachelor of Science in Computer Science (BSCS) in my 3rd semester at Riphah International University. With a passion for web development and a strong foundation in programming, I am dedicated to building innovative and user-friendly digital solutions. My academic journey has equipped me with essential skills in various technologies, and I am eager to apply and expand my knowledge through hands-on projects and professional experiences.
            </p>
        </div>
    </section>



    <section id="gallery" class="max-w-4xl mx-auto px-4 my-20">
        <h2 class="text-3xl font-bold text-center mb-8">My Gallery</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4" data-aos="slide-up" data-aos-delay="200">
            <!-- Image 1 -->
            <div class="overflow-hidden">
                <img src="images/pexels-hiteshchoudhary-693859.jpg" alt="Description of Image 1" class="w-full h-64 object-cover fancy-border-radius">
            </div>
            <!-- Image 2 -->
            <div class="overflow-hidden">
                <img src="images/pexels-pixabay-270404.jpg" alt="Description of Image 2" class="w-full h-64 object-cover fancy-border-radius">
            </div>
            <!-- Image 3 -->
            <div class="overflow-hidden">
                <img src="images/pexels-pixabay-270632.jpg" alt="Description of Image 3" class="w-full h-64 object-cover fancy-border-radius">
            </div>
        </div>
    </section>



    <section id="skills" class="py-20">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center text-gray-900">My Skills</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8" data-aos="flip-right" data-aos-delay="100">
                <!-- Skill Card -->
                <div class="skill-card relative flex flex-col items-center justify-center p-6 bg-white shadow-lg rounded-lg text-center hover:bg-gradient-to-tr hover:from-white hover:via-orange-100 hover:to-white hover:scale-105 hover:shadow-lg transition-all">
                    <i class="fab fa-html5 text-4xl text-red-600"></i>
                    <h3 class="text-xl font-semibold mt-4">HTML5</h3>
                    <p class="text-gray-700 mt-2">Building structured and semantic web content.</p>
                </div>
                <!-- Skill Card -->
                <div class="skill-card relative flex flex-col items-center justify-center p-6 bg-white shadow-lg rounded-lg text-center hover:bg-gradient-to-tr hover:from-white hover:via-orange-100 hover:to-white hover:scale-105 hover:shadow-lg transition-all">
                    <i class="fab fa-css3-alt text-4xl text-blue-600"></i>
                    <h3 class="text-xl font-semibold mt-4">CSS3</h3>
                    <p class="text-gray-700 mt-2">Designing visually appealing and responsive layouts.</p>
                </div>
                <!-- Skill Card -->
                <div class="skill-card relative flex flex-col items-center justify-center p-6 bg-white shadow-lg rounded-lg text-center hover:bg-gradient-to-tr hover:from-white hover:via-orange-100 hover:to-white hover:scale-105 hover:shadow-lg transition-all">
                    <i class="fab fa-js text-4xl text-yellow-500"></i>
                    <h3 class="text-xl font-semibold mt-4">JavaScript</h3>
                    <p class="text-gray-700 mt-2">Adding interactivity and dynamic content to websites.</p>
                </div>
                <!-- Skill Card -->
                <div class="skill-card relative flex flex-col items-center justify-center p-6 bg-white shadow-lg rounded-lg text-center hover:bg-gradient-to-tr hover:from-white hover:via-orange-100 hover:to-white hover:scale-105 hover:shadow-lg transition-all">
                    <i class="fab fa-php text-4xl text-purple-600"></i>
                    <h3 class="text-xl font-semibold mt-4">PHP</h3>
                    <p class="text-gray-700 mt-2">Server-side scripting for building robust web applications.</p>
                </div>
                <!-- Skill Card -->
                <div class="skill-card relative flex flex-col items-center justify-center p-6 bg-white shadow-lg rounded-lg text-center hover:bg-gradient-to-tr hover:from-white hover:via-orange-100 hover:to-white hover:scale-105 hover:shadow-lg transition-all">
                    <i class="fas fa-database text-4xl text-gray-800"></i>
                    <h3 class="text-xl font-semibold mt-4">MySQL</h3>
                    <p class="text-gray-700 mt-2">Managing and querying relational databases.</p>
                </div>
                <!-- Skill Card -->
                <div class="skill-card relative flex flex-col items-center justify-center p-6 bg-white shadow-lg rounded-lg text-center hover:bg-gradient-to-tr hover:from-white hover:via-orange-100 hover:to-white hover:scale-105 hover:shadow-lg transition-all">
                    <i class="fab fa-bootstrap text-4xl text-purple-600"></i>
                    <h3 class="text-xl font-semibold mt-4">Bootstrap</h3>
                    <p class="text-gray-700 mt-2">Building responsive and modern web designs quickly.</p>
                </div>
                <!-- Skill Card -->
                <div class="skill-card relative flex flex-col items-center justify-center p-6 bg-white shadow-lg rounded-lg text-center hover:bg-gradient-to-tr hover:from-white hover:via-orange-100 hover:to-white hover:scale-105 hover:shadow-lg transition-all">
                    <img src="images/9055799_bxl_tailwind_css_icon.ico" alt="Tailwind" class="w-14 h-14">
                    <h3 class="text-xl font-semibold mt-4">Tailwind CSS</h3>
                    <p class="text-gray-700 mt-2">Utility-first CSS framework for designing custom interfaces.</p>
                </div>
                <!-- Skill Card -->
                <div class="skill-card relative flex flex-col items-center justify-center p-6 bg-white shadow-lg rounded-lg text-center hover:bg-gradient-to-tr hover:from-white hover:via-orange-100 hover:to-white hover:scale-105 hover:shadow-lg transition-all">
                    <i class="fab fa-laravel text-4xl text-red-600"></i>
                    <h3 class="text-xl font-semibold mt-4">Laravel</h3>
                    <p class="text-gray-700 mt-2">Elegant PHP framework for building modern web applications.</p>
                </div>
                <!-- Skill Card -->
                <div class="skill-card relative flex flex-col items-center justify-center p-6 bg-white shadow-lg rounded-lg text-center hover:bg-gradient-to-tr hover:from-white hover:via-orange-100 hover:to-white hover:scale-105 hover:shadow-lg transition-all">
                    <i class="fas fa-cogs text-4xl text-gray-800"></i>
                    <h3 class="text-xl font-semibold mt-4">C++/C</h3>
                    <p class="text-gray-700 mt-2">Programming languages for developing performance-critical applications.</p>
                </div>
                <!-- Skill Card -->
                <div class="skill-card relative flex flex-col items-center justify-center p-6 bg-white shadow-lg rounded-lg text-center hover:bg-gradient-to-tr hover:from-white hover:via-orange-100 hover:to-white hover:scale-105 hover:shadow-lg transition-all">
                    <i class="fa-brands fa-wordpress text-3xl"></i>
                    <h3 class="text-xl font-semibold mt-4">WordPress</h3>
                    <p class="text-gray-700 mt-2">WordPress is a powerful content management system, offering a wide range of customizable themes and plugins.</p>
                </div>
            </div>
        </div>
    </section>


    <section id="experience" class="py-12 bg-white text-black">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center">Experience</h2>

            <div class="space-y-8">
                <!-- Experience Item -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-2 text-white">Front-End Developer</h3>
                    <p class="text-gray-400 mb-4">Company Pebi Technologies - Jan 2022 - Present</p>
                    <p class="text-gray-300 mb-4">Worked on various web development projects, focusing on front-end technologies, user interfaces, and improving overall user experience.</p>

                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-gray-400">HTML & CSS</span>
                            <span class="text-gray-400">90%</span>
                        </div>
                        <div class="relative pt-1">
                            <div class="flex h-2 mb-2 overflow-hidden text-xs flex-rounded bg-gray-700">
                                <div style="width: 90%" class="flex flex-col text-center text-white whitespace-nowrap bg-orange-700"></div>
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <span class="text-gray-400">JavaScript</span>
                            <span class="text-gray-400">85%</span>
                        </div>
                        <div class="relative pt-1">
                            <div class="flex h-2 mb-2 overflow-hidden text-xs flex-rounded bg-gray-700">
                                <div style="width: 85%" class="flex flex-col text-center text-white whitespace-nowrap bg-orange-700"></div>
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <span class="text-gray-400">Tailwind</span>
                            <span class="text-gray-400">90%</span>
                        </div>
                        <div class="relative pt-1">
                            <div class="flex h-2 mb-2 overflow-hidden text-xs flex-rounded bg-gray-700">
                                <div style="width: 90%" class="flex flex-col text-center text-white whitespace-nowrap bg-orange-700"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Experience Item -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-2 text-white">Back-End Developer</h3>
                    <p class="text-gray-400 mb-4">Company Pebi Technologies - Jan 2022 - Present</p>
                    <p class="text-gray-300 mb-4">Focused on server-side logic, database management, and integration of APIs for various applications.</p>

                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-gray-400">PHP</span>
                            <span class="text-gray-400">87%</span>
                        </div>
                        <div class="relative pt-1">
                            <div class="flex h-2 mb-2 overflow-hidden text-xs flex-rounded bg-gray-700">
                                <div style="width: 87%" class="flex flex-col text-center text-white whitespace-nowrap bg-orange-700"></div>
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <span class="text-gray-400">MySQL</span>
                            <span class="text-gray-400">92%</span>
                        </div>
                        <div class="relative pt-1">
                            <div class="flex h-2 mb-2 overflow-hidden text-xs flex-rounded bg-gray-700">
                                <div style="width: 92%" class="flex flex-col text-center text-white whitespace-nowrap bg-orange-700"></div>
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <span class="text-gray-400">Laravel</span>
                            <span class="text-gray-400">82%</span>
                        </div>
                        <div class="relative pt-1">
                            <div class="flex h-2 mb-2 overflow-hidden text-xs flex-rounded bg-gray-700">
                                <div style="width: 82%" class="flex flex-col text-center text-white whitespace-nowrap bg-orange-700"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center text-gray-900">My Projects</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project Card -->
                <div class="relative bg-white shadow-lg rounded-lg overflow-hidden" data-aos=fade-left" data-aos-delay="100">
                    <img src="images/Screenshot (264).png" alt="Project 1" class="w-full h-48 object-cover hover:scale-105 transition-all">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-gray-900">Library Managment System</h3>
                        <p class="text-gray-700 mb-4">The Library Management System (LMS) is a comprehensive software solution designed to manage the operations of a library efficiently. It automates key functions such as book cataloging, member registration, and transaction processing, including checkouts, returns, and reservations.</p>
                        <a href="#" class="inline-block px-4 py-2 bg-orange-700 text-white rounded-lg text-sm font-medium shadow-md transition-transform transform hover:scale-105 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50">
                            View Details
                        </a>
                    </div>
                </div>
                <!-- Project Card -->
                <div class="relative bg-white shadow-lg rounded-lg overflow-hidden" data-aos=fade-down" data-aos-delay="100">
                    <img src="images/Screenshot (265).png" alt="Project 2" class="w-full h-48 object-cover hover:scale-105 transition-all">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-gray-900">E-Commerce</h3>
                        <p class="text-gray-700 mb-4">The E-Commerce Platform is a robust digital marketplace designed to facilitate online buying and selling of products and services. It offers a user-friendly interface for customers to browse, search, and purchase items, while providing merchants with tools to manage inventory, process transactions, and analyze sales performance.</p>
                        <a href="#" class="inline-block px-4 py-2 bg-orange-700 text-white rounded-lg text-sm font-medium shadow-md transition-transform transform hover:scale-105 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50">
                            View Details
                        </a>
                    </div>
                </div>
                <!-- Project Card -->
                <div class="relative bg-white shadow-lg rounded-lg overflow-hidden" data-aos=fade-right" data-aos-delay="100">
                    <img src="images/Screenshot (266).png" alt="Project 3" class="w-full h-48 object-cover hover:scale-105 transition-all">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-gray-900">Social Media Platform</h3>
                        <p class="text-gray-700 mb-4">The Social Media Platform is a dynamic online space designed for users to connect, share, and engage with each other in real-time. It offers features such as profile creation, status updates, photo and video sharing, and messaging. Users can follow friends, join interest-based groups, and participate in discussions, while businesses and influencers can leverage the platform for brand promotion and audience interaction.</p>
                        <a href="#" class="inline-block px-4 py-2 bg-orange-700 text-white rounded-lg text-sm font-medium shadow-md transition-transform transform hover:scale-105 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="faq" class="max-w-3xl mx-auto px-4 my-20 bg-gradient-to-r from-white via-orange-100 to-white">
        <h2 class="text-3xl font-bold text-center mb-8">Frequently Asked Questions</h2>
        <div class="space-y-4">
            <!-- FAQ Item -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden" data-aos=fade-left" data-aos-delay="100">
                <button class="w-full text-left px-4 py-3 text-lg font-semibold bg-gray-200 hover:bg-gray-300 focus:outline-none" onclick="toggleFAQ('faq4')">
                    What is a content management system (CMS)?
                </button>
                <div id="faq4" class="faq-content px-4 py-3 text-gray-700 hidden">
                    A content management system (CMS) is a software platform that allows users to create, manage, and modify digital content on a website without needing technical knowledge.
                </div>
            </div>
            <!-- FAQ Item -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden" data-aos=fade-left" data-aos-delay="100">
                <button class="w-full text-left px-4 py-3 text-lg font-semibold bg-gray-200 hover:bg-gray-300 focus:outline-none" onclick="toggleFAQ('faq5')">
                    How does a search engine optimization (SEO) work?
                </button>
                <div id="faq5" class="faq-content px-4 py-3 text-gray-700 hidden">
                    Search engine optimization (SEO) involves optimizing a website to rank higher in search engine results pages (SERPs) by improving factors like content quality, keywords, and backlinks.
                </div>
            </div>
            <!-- FAQ Item -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden" data-aos=fade-left" data-aos-delay="100">
                <button class="w-full text-left px-4 py-3 text-lg font-semibold bg-gray-200 hover:bg-gray-300 focus:outline-none" onclick="toggleFAQ('faq6')">
                    What is the difference between frontend and backend development?
                </button>
                <div id="faq6" class="faq-content px-4 py-3 text-gray-700 hidden">
                    Frontend development focuses on the user interface and user experience of a website or application, while backend development deals with server-side logic, databases, and application functionality.
                </div>
            </div>
            <!-- FAQ Item -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden" data-aos=fade-left" data-aos-delay="100">
                <button class="w-full text-left px-4 py-3 text-lg font-semibold bg-gray-200 hover:bg-gray-300 focus:outline-none" onclick="toggleFAQ('faq7')">
                    What is responsive web design?
                </button>
                <div id="faq7" class="faq-content px-4 py-3 text-gray-700 hidden">
                    Responsive web design is an approach to web design that ensures websites are optimized for various devices and screen sizes, providing an optimal viewing experience across desktops, tablets, and smartphones.
                </div>
            </div>
            <!-- FAQ Item -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden" data-aos=fade-left" data-aos-delay="100">
                <button class="w-full text-left px-4 py-3 text-lg font-semibold bg-gray-200 hover:bg-gray-300 focus:outline-none" onclick="toggleFAQ('faq8')">
                    How can I improve website performance?
                </button>
                <div id="faq8" class="faq-content px-4 py-3 text-gray-700 hidden">
                    To improve website performance, you can optimize images, minify CSS and JavaScript files, use caching strategies, and employ a content delivery network (CDN) to reduce load times.
                </div>
            </div>
        </div>
    </section>


    <section id="contact" class="max-w-3xl mx-auto px-4 my-20 bg-gradient-to-r from-white via-orange-100 to-white">
        <h2 class="text-3xl font-bold text-center mb-8">Hire Me</h2>
        <form action="contact.php" method="POST" class="space-y-4">
            <div>
                <label for="name" class="block text-lg font-semibold mb-1">Name:</label>
                <input type="text" id="name" name="name" required class="w-full px-4 py-2 border rounded-md">
            </div>
            <div>
                <label for="email" class="block text-lg font-semibold mb-1">Email:</label>
                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border rounded-md">
            </div>
            <div>
                <label for="message" class="block text-lg font-semibold mb-1">Message:</label>
                <textarea id="message" name="message" rows="4" required class="w-full px-4 py-2 border rounded-md"></textarea>
            </div>
            <button type="submit" class="bg-orange-600 text-white px-4 py-2 rounded-md hover:bg-orange-700">Hire Me</button>
        </form>
    </section>
    <h1 class="text-center text-black text-xl mt-20">What Clients Say?</h1>
    <div class="col-md-6 testimonial-wrapper">

<div class="testimonial-item" style="display: block; opacity: 0.872447;">
    <h3>
        Testimonials</h3>
    <hr style="height: 4px; border: none; color: #333; background-color: #7BC83A;; width: 70px;
        margin-left: 0;">
    <h4>
      Shaf/ Seo</h4>
    <blockquote>
        <p>Hi                      
        </p>
    </blockquote>
 </div>

<div class="testimonial-item" style="display: block; opacity: 1;">
    <h3>
        Testimonials</h3>
    <hr style="height: 4px; border: none; color: #333; background-color: #7BC83A;; width: 70px;
        margin-left: 0;">
    <h4>
      Shaje/ As</h4>
    <blockquote>
        <p>Lorem Ipsum Simply Dummy text Lorem Ipsum Simply Dummy text Lorem Ipsum Simply Dummy text Lorem Ipsum Simply Dummy text                       
        </p>
    </blockquote>
 </div>


    <script>
$(document).ready(function () {

var wrapper = $(".testimonial-wrapper");
var testimonialItem = $(".testimonial-wrapper .testimonial-item");
var timeOut = 10000;
var lengthOfItem = testimonialItem.length;
var counter = 0;

startIteration();



function startIteration() {
    testimonialItem.each(function () {
        var current = $(this);
        setInterval(startTestimonialSlider(current), timeOut);
        counter++;
        debugger;
        if (counter == lengthOfItem) {
            counter = 0;
            debugger;
            startIteration();
        }

    });

}

function startTestimonialSlider(itemToDisplay) {
    itemToDisplay.prev().fadeOut();
    itemToDisplay.fadeIn();
}

});
    </script>





    <script>
        function toggleFAQ(id) {
            const content = document.getElementById(id);
            content.classList.toggle('show');
        }
    </script>

    <script>
        const navbar = document.getElementById('navbar');
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

    <script>
        AOS.init({
            duration: 1000, // Animation duration in milliseconds
            easing: 'ease-in-out', // Easing function
            // once: , // Whether animation should happen only once
            offset: 130, // Offset from the original trigger point
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init(); // Initialize AOS
    </script>


    <button id="goTopBtn" class="hidden fixed bottom-10 right-10 bg-orange-500 text-white p-3 rounded-full shadow-md transition-transform transform hover:scale-110 focus:outline-none w-14 h-14">
        <img src="images/9110844_arrow_bold_top_icon.ico" alt="Arrow Top">
    </button>

    <footer class="bg-orange-600 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- About Section -->
            <div class="text-white">
                <h3 class="text-lg font-semibold mb-4">About</h3>
                <p class="textt-white">I am Waleed Anwar, a passionate web developer specializing in creating beautiful and functional websites using modern technologies like Tailwind CSS, PHP, and more.</p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="text-white">
                    <li class="mb-2">
                        <a href="#about" class="hover:text-white">About Me</a>
                    </li>
                    <li class="mb-2">
                        <a href="#projects" class="hover:text-white">Projects</a>
                    </li>
                    <li class="mb-2">
                        <a href="#skills" class="hover:text-white">Skills</a>
                    </li>
                    <li>
                        <a href="#contact" class="hover:text-white">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- Social Media -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Follow Me</h3>
                <ul class="text-white flex space-x-4">
                    <li>
                        <a href="https://linkedin.com" target="_blank" class="hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11.25 20h-3v-10h3v10zm-1.5-11.25c-.966 0-1.75-.784-1.75-1.75s.784-1.75 1.75-1.75 1.75.784 1.75 1.75-.784 1.75-1.75 1.75zm13.25 11.25h-3v-5.5c0-1.542-1.292-2.792-2.792-2.792s-2.792 1.25-2.792 2.792v5.5h-3v-10h3v1.333c.684-.901 1.75-1.333 2.792-1.333 2.124 0 3.75 1.626 3.75 3.75v6.25z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com" target="_blank" class="hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 .5c-6.617 0-12 5.383-12 12 0 5.303 3.438 9.799 8.205 11.387.6.111.82-.26.82-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.758-1.333-1.758-1.091-.747.084-.732.084-.732 1.204.084 1.836 1.236 1.836 1.236 1.071 1.834 2.809 1.304 3.494.998.109-.775.418-1.304.761-1.604-2.665-.3-5.466-1.336-5.466-5.943 0-1.313.469-2.387 1.236-3.234-.124-.303-.536-1.528.116-3.188 0 0 1.008-.322 3.301 1.23.96-.267 1.987-.4 3.008-.405 1.021.005 2.048.138 3.008.405 2.292-1.552 3.3-1.23 3.3-1.23.653 1.661.241 2.886.118 3.188.769.847 1.236 1.921 1.236 3.234 0 4.617-2.803 5.638-5.473 5.933.43.372.814 1.104.814 2.227v3.301c0 .32.217.694.826.576 4.764-1.589 8.199-6.085 8.199-11.386 0-6.617-5.383-12-12-12z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com" target="_blank" class="hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.956-2.178-1.554-3.594-1.554-2.719 0-4.92 2.201-4.92 4.92 0 .385.044.762.127 1.123-4.087-.205-7.713-2.164-10.141-5.144-.423.727-.666 1.57-.666 2.473 0 1.706.869 3.213 2.188 4.097-.807-.026-1.567-.248-2.231-.616-.001.021-.001.042-.001.063 0 2.382 1.693 4.374 3.94 4.828-.413.112-.849.171-1.296.171-.318 0-.627-.031-.928-.089.628 1.957 2.448 3.381 4.604 3.422-1.688 1.322-3.82 2.109-6.134 2.109-.398 0-.79-.023-1.175-.069 2.186 1.402 4.779 2.217 7.557 2.217 9.056 0 14.007-7.507 14.007-14.007 0-.213-.005-.426-.014-.637.961-.694 1.795-1.562 2.457-2.549z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Contact Information</h3>
                <p class="text-white mb-2">Email: waleeddogare@example.com</p>
                <p class="text-white">Phone: +92-323-7216881</p>
            </div>
        </div>

        <div class="border-t border-gray-700 mt-8 pt-4 text-center text-white">
            <p>© 2024 Waleed Anwar. All rights reserved.</p>
        </div>
    </footer>


    <!-- Font Awesome for social icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

    <!-- TypeScript Code -->
    <script type="typescript">
        const greetingElement = document.getElementById('greeting');
        const text: string = "Hello, I'm Waleed Anwar";
        let index: number = 0;

        function typeText() {
            if (greetingElement) {
                greetingElement.innerText = text.slice(0, index);
                index++;
                if (index <= text.length) {
                    setTimeout(typeText, 100); // Adjust speed (in milliseconds) as desired
                } else {
                    index = 0; // Reset the index to loop typing
                    setTimeout(typeText, 500); // Delay before retyping starts
                }
            }
        }

        typeText();
    </script>

    <!-- Compile TypeScript to JavaScript -->
    <script>
        const tsScript = document.querySelector('script[type="typescript"]');
        const tsCode = tsScript.innerHTML;

        const jsCode = ts.transpile(tsCode);
        const script = document.createElement('script');
        script.type = 'text/javascript';
        script.innerHTML = jsCode;
        document.body.appendChild(script);
    </script>
    <script src="script.js"></script>
</body>

</html>