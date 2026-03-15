<!DOCTYPE html>
<html lang="en" x-data="portfolio()" :class="{ 'dark': dark }">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Alvin Nario - Developer</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="/images/alvin.png" type="image/x-icon">

  <style>
    [x-cloak] { display: none !important; }

    .avatar-img { transition: filter 0.3s; }
    html:not(.dark) .avatar-img { filter: brightness(1.15) contrast(0.95); background-color: #f4f4f5; }

    .animate-fade-up { animation: fadeUp 0.45s ease both; }
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(14px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .stagger-1 { animation-delay: 0.05s; }
    .stagger-2 { animation-delay: 0.10s; }
    .stagger-3 { animation-delay: 0.15s; }
    .stagger-4 { animation-delay: 0.20s; }
    .stagger-5 { animation-delay: 0.25s; }
    .stagger-6 { animation-delay: 0.30s; }

    /* Smooth touch scrolling */
    html { -webkit-tap-highlight-color: transparent; }
  </style>
</head>

<body class="bg-white dark:bg-zinc-950 text-zinc-900 dark:text-zinc-100 font-sans text-sm antialiased transition-colors duration-300">
<div class="max-w-4xl mx-auto px-4 sm:px-6 py-6 sm:py-8 pb-16">

  <!-- ── HERO ── -->
  <div class="animate-fade-up mb-6">

    <!-- Row: Avatar | Info | Toggle -->
    <div class="flex items-start gap-4 sm:gap-5">

      <!-- Avatar -->
      <div class="flex-shrink-0 w-35 h-35 rounded-lg overflow-hidden border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 group relative">
        <img
            :src="dark ? '/images/alvin.png' : '/images/alvin_light.png'"
            alt="Alvin Nario"
            class="avatar-img w-full h-full object-cover object-top absolute opacity-100 group-hover:opacity-0 transition-opacity duration-300"
            onerror="this.outerHTML='<div class=\'w-full h-full flex items-center justify-center text-4xl\'>👤</div>'"
        />
        <img
            :src="dark ? '/images/alvin1.png' : '/images/alvin1_light.png'"
            alt="Alvin Nario Hover"
            class="avatar-img w-full h-full object-cover object-top absolute opacity-0 group-hover:opacity-100 transition-opacity duration-300"
            onerror="this.outerHTML='<div class=\'w-full h-full flex items-center justify-center text-4xl\'>👤</div>'"
        />
      </div>

      <!-- Info block -->
      <div class="flex-1 min-w-0 pt-3">
        <!-- Name + verified -->
        <div class="flex items-center gap-1.5 sm:gap-2 mb-2 sm:mb-0.5 flex-wrap">
          <h1 class="text-xl sm:text-2xl font-bold tracking-tight leading-none">Alvin Nario</h1>
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-badge-check text-white flex-shrink-0">
            <path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z" fill="#2563EB" stroke="#2563EB"/>
            <path d="m9 12 2 2 4-4"/>
          </svg>
        </div>

        <!-- Location — hidden on very small, shown sm+ -->
        <p class="text-black font-medium dark:text-white text-[10px] sm:text-sm flex items-center gap-1 mb-1.5 sm:mb-2 mt-1 sm:mt-1.5">
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="flex-shrink-0"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
          Sorsogon, Philippines
        </p>

        <!-- Role -->
        <p class="text-zinc-800 dark:text-white font-medium text-md sm:text-lg mb-1 sm:mb-1">Backend Developer</p>

        <!-- Action Buttons -->
        <div class="flex flex-wrap items-center gap-2 mt-3 sm:mt-0">
          <a href="mailto:alvinnario56@gmail.com"
             class="inline-flex items-center gap-1.5 px-3 sm:px-3.5 py-1.5 sm:py-2 rounded-lg border border-zinc-200 dark:border-zinc-700 text-xs font-medium hover:bg-zinc-50 dark:hover:bg-zinc-800 transition-colors whitespace-nowrap">
            <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
              <rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 7l10 7 10-7"/>
            </svg>
            Send Email
          </a>
        </div>
      </div>

      <!-- Theme Toggle -->
      <button
        @click="dark = !dark"
        class="flex-shrink-0 w-8 h-8 sm:w-9 sm:h-9 rounded-lg border border-zinc-200 dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-800 flex items-center justify-center hover:bg-zinc-100 dark:hover:bg-zinc-700 transition-colors relative"
      >
        <svg x-show="!dark" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-zinc-600 dark:text-zinc-400"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>
        <svg x-show="dark" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-zinc-400"><path d="M20.985 12.486a9 9 0 1 1-9.473-9.472c.405-.022.617.46.402.803a6 6 0 0 0 8.268 8.268c.344-.215.825-.004.803.401"/></svg>
      </button>
    </div>
  </div>

  <!-- ── ABOUT ── -->
  <div class="border border-gray-100 dark:border-zinc-800 rounded-xl overflow-hidden mb-3 animate-fade-up stagger-2">
    <div class="px-4 sm:px-5 py-3 text-black text-base sm:text-lg font-bold tracking-widest dark:text-white">About</div>
    <div class="px-4 sm:px-5 pb-5 space-y-3 text-black dark:text-white leading-relaxed text-sm">
      <p>I'm a Backend Developer with experience in building secure and scalable web applications using PHP Laravel, RESTful APIs, AWS, and MySQL. Skilled in working with teams and leading developers to deliver projects on time.</p>
      <p>Passionate about writing clean code and creating reliable systems that solve real-world problems. I've worked on university-level systems, internship projects, and full-stack web applications across various domains.</p>
      <p>I graduated Cum Laude with a BS in Information Technology from Bicol University, and I'm always looking for opportunities to grow and build meaningful software.</p>
    </div>
  </div>

  <!-- ── EXPERIENCE ── -->
  <div class="border border-gray-100 dark:border-zinc-800 rounded-xl overflow-hidden mb-3 animate-fade-up stagger-2">
    <div class="px-4 sm:px-5 py-3 text-xs font-semibold tracking-widest uppercase text-black dark:text-zinc-500">Experience</div>
    <div class="relative">
      <div class="absolute left-4 sm:left-5 top-5 bottom-10 w-px bg-zinc-200 dark:bg-zinc-800"></div>

      <template x-for="(item, i) in experience" :key="i">
        <div class="group flex items-start justify-between px-4 sm:px-5 py-3 sm:py-3.5 hover:cursor-pointer dark:hover:bg-zinc-900/50 transition-colors relative gap-2 sm:gap-4">
          <!-- Square dot indicator -->
          <div class="flex-shrink-0 w-3 h-3 rounded-sm border-2 mt-1 -ml-1.5 mr-3 sm:mr-4 relative z-10 transition-colors duration-200"
               :class="i === 0
                  ? 'bg-zinc-800 border-zinc-800 dark:bg-white dark:border-white'
                  : 'bg-white dark:bg-zinc-900 border-zinc-400 dark:border-zinc-600 group-hover:bg-zinc-800 group-hover:border-zinc-800 dark:group-hover:bg-white dark:group-hover:border-white'">
          </div>

          <div class="flex-1 min-w-0">
            <p class="font-semibold text-sm leading-snug" x-text="item.title"></p>
            <p class="text-xs text-black dark:text-white mt-0.5 leading-snug" x-text="item.company"></p>
          </div>
          <!-- Year: stacks below company on tiny screens -->
          <span class="text-xs font-mono text-black dark:text-white mt-0.5 whitespace-nowrap flex-shrink-0 text-right" x-text="item.year"></span>
        </div>
      </template>
    </div>
  </div>

  <!-- ── TECH STACK ── -->
  <div class="border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden mb-3 animate-fade-up stagger-3">
    <div class="px-4 sm:px-5 py-3 flex items-center justify-between">
      <span class="text-xs font-semibold tracking-widest uppercase text-black dark:text-white">Tech Stack</span>
    </div>
    <div class="px-4 sm:px-5 pb-5 space-y-4">
      <template x-for="group in techStack" :key="group.label">
        <div>
          <p class="text-xs font-semibold uppercase tracking-widest text-black dark:text-white mb-2" x-text="group.label"></p>
          <div class="flex flex-wrap gap-1.5">
            <template x-for="tech in group.items" :key="tech">
              <span class="px-2.5 sm:px-3 py-1 rounded-full bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 text-xs font-medium text-black dark:text-white hover:border-blue-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors cursor-default"
                    x-text="tech"></span>
            </template>
          </div>
        </div>
      </template>
    </div>
  </div>

  <!-- ── PROJECTS ── -->
  <div class="border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden mb-3 animate-fade-up stagger-3">
    <div class="px-4 sm:px-5 py-3 flex items-center justify-between">
      <span class="text-xs font-semibold tracking-widest uppercase text-black dark:text-white">Projects</span>
    </div>
    <!-- 1 col on mobile, 2 cols on sm+ -->
    <div class="p-3 sm:p-4 grid grid-cols-1 sm:grid-cols-2 gap-2 sm:gap-2.5">
      <template x-for="project in projects" :key="project.name">
        <div class="border border-zinc-200 dark:border-zinc-800 rounded-lg p-3 sm:p-3.5 flex flex-col gap-1">
          <p class="font-semibold text-sm leading-snug" x-text="project.name"></p>
          <p class="text-xs text-black dark:text-white leading-snug flex-1" x-text="project.desc"></p>
          <div class="flex items-center justify-between mt-2 gap-2">
            <p class="text-xs font-mono text-black dark:text-white" x-text="project.year"></p>
            <template x-if="project.demo">
              <a :href="project.demo"
                 target="_blank"
                 rel="noopener noreferrer"
                 class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md bg-blue-50 dark:bg-blue-950/40 border border-blue-200 dark:border-blue-800 text-xs font-medium text-blue-600 dark:text-blue-400 hover:bg-blue-100 dark:hover:bg-blue-900/50 transition-colors flex-shrink-0">
                <svg class="w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                  <polyline points="15 3 21 3 21 9"/>
                  <line x1="10" y1="14" x2="21" y2="3"/>
                </svg>
                Live Demo
              </a>
            </template>
            <template x-if="!project.demo">
              <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md bg-zinc-50 dark:bg-zinc-800/60 border border-zinc-200 dark:border-zinc-700 text-xs font-medium text-zinc-400 dark:text-zinc-500 cursor-not-allowed select-none flex-shrink-0">
                <svg class="w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                  <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                </svg>
                Private
              </span>
            </template>
          </div>
        </div>
      </template>
    </div>
  </div>

  <!-- ── EDUCATION ── -->
  <div class="border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden mb-3 animate-fade-up stagger-4">
    <div class="px-4 sm:px-5 py-3 flex items-center justify-between">
      <span class="text-xs font-semibold tracking-widest uppercase text-black dark:text-white">Education</span>
    </div>
    <div class="divide-y divide-zinc-100 dark:divide-zinc-800/60">
      <template x-for="edu in education" :key="edu.school">
        <div class="px-4 sm:px-5 py-4 flex items-start justify-between gap-3 sm:gap-4">
          <div class="min-w-0 flex-1">
            <p class="font-semibold text-sm leading-snug" x-text="edu.degree"></p>
            <p class="text-xs text-black dark:text-white mt-0.5 leading-snug" x-text="edu.school"></p>
          </div>
          <span class="text-xs font-mono text-black dark:text-white whitespace-nowrap flex-shrink-0 mt-0.5" x-text="edu.year"></span>
        </div>
      </template>
    </div>
  </div>

  <!-- ── CERTIFICATIONS ── -->
  <div class="border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden mb-3 animate-fade-up stagger-4">
    <div class="px-4 sm:px-5 py-3 flex items-center justify-between">
      <span class="text-xs font-semibold tracking-widest uppercase text-black dark:text-white">Certificates</span>
    </div>
    <!-- 1 col mobile, 2 cols sm+ -->
    <div class="p-3 sm:p-4 grid grid-cols-1 sm:grid-cols-2 gap-2 sm:gap-2.5">
      <template x-for="cert in certifications" :key="cert.name">
        <div class="border border-zinc-200 dark:border-zinc-800 rounded-lg p-3 sm:p-3.5 flex flex-col gap-0.5 hover:bg-zinc-50 dark:hover:bg-zinc-900/50 transition-colors">
          <p class="font-semibold text-sm" x-text="cert.name"></p>
          <p class="text-xs text-black dark:text-white" x-text="cert.issuer"></p>
        </div>
      </template>
    </div>
  </div>

  <!-- ── CONTACT ── -->
  <div class="border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden mb-3 animate-fade-up stagger-6">
    <div class="px-4 sm:px-5 py-3 text-xs font-semibold tracking-widest uppercase text-black dark:text-zinc-500">Get in Touch</div>
    <div class="p-3 sm:p-4 grid grid-cols-1 sm:grid-cols-2 gap-2 sm:gap-2.5">
      <a href="mailto:alvinnario56@gmail.com"
         class="border border-zinc-200 dark:border-zinc-800 rounded-lg p-3 flex flex-col gap-1 hover:bg-zinc-50 dark:hover:bg-zinc-900/50 transition-colors">
        <span class="text-xs font-semibold uppercase tracking-widest text-black dark:text-zinc-500">Email</span>
        <span class="text-xs font-medium text-blue-600 break-all">alvinnario56@gmail.com</span>
      </a>
    </div>
  </div>

  <!-- ── FOOTER ── -->
  <footer class="text-center text-xs text-black dark:text-zinc-600 pt-4 border-t border-zinc-100 dark:border-zinc-800 mt-2">
    © 2026 Alvin Nario. All rights reserved.
  </footer>

</div>

<script>
  function portfolio() {
    return {
      dark: false,

      experience: [
        { title: 'Junior Programmer',               company: 'Bicol University ICT Office',                  year: 'Oct 2025 – Present' },
        { title: 'Internship (Backend Developer)',   company: 'StraStan Solutions Corp.',                     year: 'Feb – May 2025' },
        { title: 'Backend Developer',               company: 'Bicol University – University Student Council', year: 'Aug 2024 – Mar 2026' },
      ],

      techStack: [
        { label: 'Frontend',       items: ['JavaScript', 'HTML5', 'CSS3', 'Bootstrap', 'Tailwind CSS', 'Alpine.js'] },
        { label: 'Backend',        items: ['PHP', 'Laravel', 'Livewire', 'MySQL', 'RESTful APIs'] },
        { label: 'Cloud & DevOps', items: ['AWS Lambda', 'DynamoDB', 'MinIO S3', 'Git', 'GitHub'] },
        { label: 'Other',          items: ['API Integration', 'Technical Support', 'Troubleshooting', 'Team Collaboration'] },
      ],

      projects: [
        { name: 'Bicol University Merit System Promotion',                           desc: 'Backend using TALL stack + MinIO S3 for secure file storage and employee records.',             year: '2026',      demo: '' },
        { name: 'Bicol University Center of Excellence',                             desc: 'Backend system with Laravel, MySQL, user auth restricted to BU email accounts.',               year: '2025',      demo: '' },
        { name: 'Bicol University – University Student Council Website',             desc: 'Laravel & MySQL backend with custom database migrations and student council info management.', year: '2024–2026', demo: 'https://v2.bu-usc.com/' },
        { name: 'AgTech - Web Application for Farmer-Trader Market Optimization',   desc: 'Full-stack app for livestock, users, and transaction management with cloud deploy.',           year: '2024–2025', demo: 'https://agtech-livestock.infinityfree.me/' },
        { name: 'Employee Attendance System',                                        desc: 'Full-stack dashboard for time tracking, attendance records, and access control.',              year: '2024',      demo: '' },
        { name: 'Unboxed E-Commerce Platform',                                       desc: 'Personal e-commerce site with order processing and product catalog features.',                 year: '2024',      demo: '' },
      ],

      education: [
        { degree: 'BS Information Technology — Cum Laude',         school: 'Bicol University, Legazpi City, Albay',            year: '2021–2025' },
        { degree: 'Senior High School — General Academic Strand',  school: 'Macalaya National High School, Castilla, Sorsogon', year: '2019–2021' },
      ],

      certifications: [
        { name: 'Backend Developer Certificate', issuer: 'University Student Council' },
        { name: 'Internship Certificate',        issuer: 'StraStan Solutions Corp. Inc.' },
      ],
    }
  }
</script>
</body>
</html>