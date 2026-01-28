<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Yohani | Software Engineer</title>
  <meta name="description" content="Software Engineer from Colombo – Building modern web applications with clean code"/>

  <!-- Tailwind CSS Play CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Optional: Custom config to enable dark mode & more utilities -->
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            primary: '#2563eb',    // blue-600
            primaryDark: '#1d4ed8',
          }
        }
      }
    }
  </script>

  <!-- Font (optional – using Google Fonts Inter) -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <style>
    body { font-family: 'Inter', system-ui, sans-serif; }
  </style>
</head>
<body class="bg-gray-50 dark:bg-gray-950 text-gray-900 dark:text-gray-100 transition-colors duration-300">

  <!-- Hero Section -->
  <section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800 px-6">
    <div class="text-center max-w-4xl mx-auto">
      <!-- Your Photo -->
      <div class="relative w-48 h-48 md:w-56 md:h-56 mx-auto mb-8">
        <img 
          src="https://via.placeholder.com/300x300/2563eb/ffffff?text=Yohani" 
          alt="Yohani - Software Engineer" 
          class="rounded-full object-cover border-4 border-white dark:border-gray-700 shadow-2xl"
        />
      </div>

      <h1 class="text-5xl md:text-7xl font-bold mb-4">Yohani</h1>
      <h2 class="text-3xl md:text-4xl font-medium text-primary mb-6">Software Engineer</h2>
      
      <p class="text-xl md:text-2xl mb-10 text-gray-700 dark:text-gray-300 max-w-3xl mx-auto">
        Building scalable web applications with clean, modern code • Based in Colombo, Sri Lanka
      </p>

      <div class="flex flex-col sm:flex-row gap-5 justify-center">
        <a href="#projects" 
           class="px-8 py-4 bg-primary text-white rounded-lg font-medium hover:bg-primaryDark transition text-lg shadow-md">
          View Projects
        </a>
        <a href="#contact" 
           class="px-8 py-4 border-2 border-primary text-primary dark:border-blue-400 dark:text-blue-400 rounded-lg font-medium hover:bg-primary hover:text-white transition text-lg">
          Get in Touch
        </a>
      </div>
    </div>
  </section>

  <!-- About -->
  <section id="about" class="py-20 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-6 max-w-4xl">
      <h2 class="text-4xl font-bold text-center mb-12">About Me</h2>
      <div class="prose lg:prose-lg dark:prose-invert mx-auto text-lg leading-relaxed">
        <p>I'm a passionate Software Engineer specializing in PHP, Laravel (or plain PHP + MySQL), Tailwind CSS, and modern frontend technologies.</p>
        <p>I enjoy creating reliable, performant applications — from backend APIs and database design to responsive user interfaces.</p>
        <p class="text-center mt-8 italic">Currently open to exciting opportunities — remote / hybrid / Colombo-based roles welcome.</p>
      </div>
    </div>
  </section>

  <!-- Skills -->
  <section id="skills" class="py-20 bg-gray-100 dark:bg-gray-800">
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-bold text-center mb-12">Tech Stack</h2>
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6 max-w-5xl mx-auto">
        <?php
          $skills = [
            'PHP', 'Laravel', 'MySQL', 'Tailwind CSS',
            'JavaScript', 'HTML5', 'CSS3', 'Git',
            'REST APIs', 'Docker (basics)', 'Linux', 'VS Code'
          ];
          foreach ($skills as $skill) {
            echo '<div class="bg-white dark:bg-gray-700 p-6 rounded-xl shadow-md text-center font-medium hover:scale-105 transition duration-300">' . $skill . '</div>';
          }
        ?>
      </div>
    </div>
  </section>

  <!-- Projects -->
  <section id="projects" class="py-20 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-bold text-center mb-16">Featured Projects</h2>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">

        <!-- Project 1 -->
        <div class="bg-gray-50 dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300">
          <div class="h-48 bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center text-white text-2xl font-bold">
            Project Name 1
          </div>
          <div class="p-6">
            <h3 class="text-2xl font-semibold mb-3">Inventory Management System</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-4">
              Full PHP/MySQL CRUD application with user roles, reporting and Tailwind frontend.
            </p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm">PHP</span>
              <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm">MySQL</span>
              <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm">Tailwind</span>
            </div>
            <a href="#" class="text-primary hover:underline font-medium">View Project →</a>
          </div>
        </div>

        <!-- Add 2–3 more project cards here following the same structure -->

      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="py-20 bg-gradient-to-br from-primary to-indigo-700 text-white">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-4xl font-bold mb-8">Let's Connect</h2>
      <p class="text-xl mb-10 max-w-2xl mx-auto">
        I'm open to new opportunities, freelance work, or just talking about PHP & web development!
      </p>
      <div class="flex flex-col sm:flex-row gap-8 justify-center text-lg font-medium">
        <a href="mailto:hello@yohani.lk" class="hover:underline">hello@yohani.lk</a>
        <a href="https://linkedin.com/in/yohani" target="_blank" class="hover:underline">LinkedIn</a>
        <a href="https://github.com/yohani" target="_blank" class="hover:underline">GitHub</a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-8 text-center text-gray-500 dark:text-gray-400 bg-gray-100 dark:bg-gray-950">
    <p>&copy; <?php echo date('Y'); ?> Yohani. Built with PHP & Tailwind CSS.</p>
  </footer>

</body>
</html>