<!DOCTYPE html>
<html lang="en" x-data="portfolio()" :class="{ 'dark': dark }">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Alvin Nario - Software Engineer</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="/images/alvin.jpeg" type="image/x-icon">

  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          fontFamily: {
            sans: ['Sora', 'sans-serif'],
            mono: ['JetBrains Mono', 'monospace'],
          },
        },
      },
    }
  </script>

  <style>
    [x-cloak] { display: none !important; }
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
  </style>
</head>

<body class="bg-white dark:bg-zinc-950 text-zinc-900 dark:text-zinc-100 font-sans text-sm antialiased transition-colors duration-300">
<div class="max-w-4xl mx-auto px-4 py-8 pb-16">

  <!-- ── HERO ── -->
  <div class="animate-fade-up mb-6">

    <!-- Row 1: Avatar LEFT | Info RIGHT | Toggle FAR RIGHT -->
    <div class="flex items-start gap-5">

      <!-- Avatar -->
      <div class="flex-shrink-0 w-40 h-40 rounded-lg overflow-hidden border border-zinc-200 dark:border-zinc-700 bg-zinc-100 dark:bg-zinc-800 group relative">
        <img
            src="/images/alvin.jpeg"
            alt="Alvin Nario"
            class="w-full h-full object-cover object-top absolute opacity-100 group-hover:opacity-0"
            onerror="this.outerHTML='<div class=\'w-full h-full flex items-center justify-center text-4xl\'>👤</div>'"
        />
        <img
            src="/images/alvin1.jpeg"
            alt="Alvin Nario Hover"
            class="w-full h-full object-cover object-top absolute opacity-0 group-hover:opacity-100"
            onerror="this.outerHTML='<div class=\'w-full h-full flex items-center justify-center text-4xl\'>👤</div>'"
        />
    </div>

      <!-- Info block -->
      <div class="flex-1 min-w-0 pt-0.5">
        <!-- Name + verified -->
        <div class="flex items-center gap-2 mb-0.5">
          <h1 class="text-2xl font-bold tracking-tight leading-none">Alvin Nario</h1>
           <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-badge-check text-white">
                <path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z" fill="#2563EB" stroke="#2563EB"/>
                <path d="m9 12 2 2 4-4"/>
            </svg>
            </div>

        <!-- Location -->
        <p class="text-zinc-800 font-medium dark:text-zinc-400 text-sm flex items-center gap-1 mb-2 mt-1.5">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin-icon lucide-map-pin"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
          Castilla, Sorsogon, Philippines
        </p>

        <!-- Roles -->
        <p class="text-zinc-800 dark:text-zinc-400 font-medium text-lg mb-3">Software Engineer</p>

        <!-- Row 2: Action Buttons -->
    <div class="flex flex-wrap items-center gap-2 mt-4 border-zinc-100 dark:border-zinc-800 pt-4">
      <a href="mailto:alvinnario56@gmail.com"
         class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-lg border border-zinc-200 dark:border-zinc-700 text-xs font-medium hover:bg-zinc-50 dark:hover:bg-zinc-800 transition-colors">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
          <rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 7l10 7 10-7"/>
        </svg>
        Send Email
      </a>

      <a href="https://blog.bryllim.com" target="_blank"
         class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-lg border border-zinc-200 dark:border-zinc-700 text-xs font-medium hover:bg-zinc-50 dark:hover:bg-zinc-800 transition-colors">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path stroke-linecap="round" stroke-linejoin="round" d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/>
        </svg>
        Read my blog
      </a>
    </div>
  </div>


      <!-- Theme Toggle -->
      <button
        @click="dark = !dark"
        class="flex-shrink-0 w-9 h-9 rounded-lg border border-zinc-200 dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-800 flex items-center justify-center hover:bg-zinc-100 dark:hover:bg-zinc-700 transition-colors"
    >
        <svg x-show="!dark" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-zinc-600 dark:text-zinc-400"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>

        <svg x-show="dark" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-zinc-400"><path d="M20.985 12.486a9 9 0 1 1-9.473-9.472c.405-.022.617.46.402.803a6 6 0 0 0 8.268 8.268c.344-.215.825-.004.803.401"/></svg>
    </button>
            </div>
    </div>

<!-- ── ABOUT ── -->
<div class="border border-gray-100 dark:border-zinc-800 rounded-xl overflow-hidden mb-3 animate-fade-up stagger-2">
    <div class="px-5 py-3 -mb-5 border-zinc-200 dark:border-zinc-800 text-black text-lg font-bold tracking-widest dark:text-white">About</div>
    <div class="px-5 py-5 space-y-4 text-zinc-700 dark:text-zinc-300 leading-relaxed text-sm">
        <p>I'm a full-stack software engineer specializing in developing solutions with JavaScript, Python, and PHP. I work on projects including building modern web applications, mobile apps, search engine optimization, digital marketing, and making code tutorials.</p>
        <p>I've helped startups and MSMEs grow and streamline their processes through software solutions. I've also built a community of over 200,000 developers sharing knowledge and mentorship.</p>
        <p>Lately, I've been diving deeper into the world of artificial intelligence, focusing on integrating AI tools and techniques into modern applications. My work now includes developing AI-powered solutions, creating intelligent applications, and leveraging generative AI to optimize development workflows and deliver cutting-edge technology.</p>
    </div>
</div>

<!-- ── EXPERIENCE ── -->
<div class="border border-gray-100 dark:border-zinc-800 rounded-xl overflow-hidden mb-3 animate-fade-up stagger-2">
    <div class="px-5 py-3 border-zinc-200 dark:border-zinc-800 text-xs font-semibold tracking-widest uppercase text-zinc-400 dark:text-zinc-500">Experience</div>
    <div class="relative">
        <!-- Vertical line -->
        <div class="absolute left-5 top-5 bottom-10 w-px bg-zinc-200 dark:bg-zinc-800"></div>

        <template x-for="(item, i) in experience" :key="i">
            <div class="group flex items-start justify-between px-5 py-3.5 hover:cursor-pointer dark:hover:bg-zinc-900/50 transition-colors relative"
                 :class="item.edu ? : ''">

                <!-- Square dot indicator -->
                <div class="flex-shrink-0 w-3 h-3 rounded-sm border-2 mt-1 -ml-1.5 mr-4 relative z-10 transition-colors duration-200"
                     :class="i === 0 
                        ? 'bg-zinc-800 border-zinc-800 dark:bg-white dark:border-white' 
                        : 'bg-white dark:bg-zinc-900 border-zinc-400 dark:border-zinc-600 group-hover:bg-zinc-800 group-hover:border-zinc-800 dark:group-hover:bg-white dark:group-hover:border-white'">
                </div>

                <div class="flex-1">
                    <p class="font-semibold text-sm" x-text="item.title"></p>
                    <p class="text-xs text-zinc-500 dark:text-zinc-400 mt-0.5" x-text="item.company"></p>
                </div>
                <span class="text-xs font-mono text-zinc-400 dark:text-zinc-500 mt-0.5 whitespace-nowrap ml-4" x-text="item.year"></span>
            </div>
        </template>
    </div>
</div>

  <!-- ── TECH STACK ── -->
  <div class="border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden mb-3 animate-fade-up stagger-3">
    <div class="px-5 py-3 border-b border-zinc-200 dark:border-zinc-800 flex items-center justify-between">
      <span class="text-xs font-semibold tracking-widest uppercase text-zinc-400 dark:text-zinc-500">Tech Stack</span>
      <a href="#" class="text-xs text-blue-600 font-medium hover:underline">View All</a>
    </div>
    <div class="px-5 py-4 space-y-4">
      <template x-for="group in techStack" :key="group.label">
        <div>
          <p class="text-xs font-semibold uppercase tracking-widest text-zinc-400 dark:text-zinc-500 mb-2" x-text="group.label"></p>
          <div class="flex flex-wrap gap-1.5">
            <template x-for="tech in group.items" :key="tech">
              <span class="px-3 py-1 rounded-full bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 text-xs font-medium text-zinc-700 dark:text-zinc-300 hover:border-blue-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors cursor-default"
                    x-text="tech"></span>
            </template>
          </div>
        </div>
      </template>
    </div>
  </div>

  <!-- ── RECENT PROJECTS ── -->
  <div class="border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden mb-3 animate-fade-up stagger-3">
    <div class="px-5 py-3 border-b border-zinc-200 dark:border-zinc-800 flex items-center justify-between">
      <span class="text-xs font-semibold tracking-widest uppercase text-zinc-400 dark:text-zinc-500">Recent Projects</span>
      <a href="#" class="text-xs text-blue-600 font-medium hover:underline">View All</a>
    </div>
    <div class="p-4 grid grid-cols-2 gap-2.5">
      <template x-for="project in projects" :key="project.name">
        <a :href="project.url" target="_blank"
           class="border border-zinc-200 dark:border-zinc-800 rounded-lg p-3.5 flex flex-col gap-1 hover:border-blue-400 dark:hover:border-blue-600 hover:shadow-sm transition-all group">
          <p class="font-semibold text-sm group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors" x-text="project.name"></p>
          <p class="text-xs text-zinc-500 dark:text-zinc-400 leading-snug" x-text="project.desc"></p>
          <p class="text-xs font-mono text-zinc-400 dark:text-zinc-500 mt-1" x-text="project.domain"></p>
        </a>
      </template>
    </div>
  </div>

  <!-- ── CERTIFICATIONS ── -->
  <div class="border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden mb-3 animate-fade-up stagger-4">
    <div class="px-5 py-3 border-b border-zinc-200 dark:border-zinc-800 flex items-center justify-between">
      <span class="text-xs font-semibold tracking-widest uppercase text-zinc-400 dark:text-zinc-500">Recent Certifications</span>
      <a href="#" class="text-xs text-blue-600 font-medium hover:underline">View All</a>
    </div>
    <div class="p-4 grid grid-cols-2 gap-2.5">
      <template x-for="cert in certifications" :key="cert.name">
        <a :href="cert.url" target="_blank"
           class="border border-zinc-200 dark:border-zinc-800 rounded-lg p-3.5 flex flex-col gap-0.5 hover:bg-zinc-50 dark:hover:bg-zinc-900/50 transition-colors">
          <p class="font-semibold text-sm" x-text="cert.name"></p>
          <p class="text-xs text-zinc-500 dark:text-zinc-400" x-text="cert.issuer"></p>
        </a>
      </template>
    </div>
  </div>

  <!-- ── RECOMMENDATIONS ── -->
  <div class="border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden mb-3 animate-fade-up stagger-4"
       x-data="{ showAll: false }">
    <div class="px-5 py-3 border-b border-zinc-200 dark:border-zinc-800 flex items-center justify-between">
      <span class="text-xs font-semibold tracking-widest uppercase text-zinc-400 dark:text-zinc-500">Recommendations</span>
      <button @click="showAll = !showAll" class="text-xs text-blue-600 font-medium hover:underline"
              x-text="showAll ? 'Show Less' : 'View All'"></button>
    </div>
    <div class="divide-y divide-zinc-100 dark:divide-zinc-800/60">
      <template x-for="(rec, i) in recommendations" :key="i">
        <div class="px-5 py-4" x-show="showAll || i < 3" x-transition>
          <p class="text-sm text-zinc-600 dark:text-zinc-400 leading-relaxed italic mb-2.5" x-text="`\u201c${rec.quote}\u201d`"></p>
          <p class="text-sm font-semibold" x-text="rec.author"></p>
          <p class="text-xs text-zinc-500 dark:text-zinc-400" x-text="rec.role"></p>
        </div>
      </template>
    </div>
  </div>

  <!-- ── SOCIAL LINKS ── -->
  <div class="border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden mb-3 animate-fade-up stagger-5">
    <div class="px-5 py-3 border-b border-zinc-200 dark:border-zinc-800 text-xs font-semibold tracking-widest uppercase text-zinc-400 dark:text-zinc-500">Social Links</div>
    <div class="px-5 py-4 flex flex-wrap gap-2">
      <a href="https://linkedin.com/in/bryllim" target="_blank"
         class="inline-flex items-center gap-2 px-3.5 py-2 border border-zinc-200 dark:border-zinc-700 rounded-lg text-xs font-medium hover:bg-zinc-50 dark:hover:bg-zinc-800 transition-colors">
        <svg class="w-3.5 h-3.5 text-blue-700" fill="currentColor" viewBox="0 0 24 24">
          <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/>
        </svg>
        LinkedIn
      </a>
      <a href="https://github.com/bryllim" target="_blank"
         class="inline-flex items-center gap-2 px-3.5 py-2 border border-zinc-200 dark:border-zinc-700 rounded-lg text-xs font-medium hover:bg-zinc-50 dark:hover:bg-zinc-800 transition-colors">
        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
        </svg>
        GitHub
      </a>
      <a href="https://www.instagram.com/bryl.lim/" target="_blank"
         class="inline-flex items-center gap-2 px-3.5 py-2 border border-zinc-200 dark:border-zinc-700 rounded-lg text-xs font-medium hover:bg-zinc-50 dark:hover:bg-zinc-800 transition-colors">
        <svg class="w-3.5 h-3.5 text-pink-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
          <rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
        </svg>
        Instagram
      </a>
    </div>
  </div>

  <!-- ── SPEAKING ── -->
  <div class="border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden mb-3 animate-fade-up stagger-5">
    <div class="px-5 py-3 border-b border-zinc-200 dark:border-zinc-800 text-xs font-semibold tracking-widest uppercase text-zinc-400 dark:text-zinc-500">Speaking</div>
    <div class="px-5 py-4 flex items-center justify-between gap-4">
      <p class="text-sm text-zinc-500 dark:text-zinc-400">Available for speaking at events about software development and emerging technologies.</p>
      <a href="mailto:bryllim@gmail.com" class="text-sm font-semibold text-blue-600 whitespace-nowrap hover:underline">Get in touch →</a>
    </div>
  </div>

  <!-- ── GALLERY ── -->
  <div class="border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden mb-3 animate-fade-up stagger-5">
    <div class="px-5 py-3 border-b border-zinc-200 dark:border-zinc-800 text-xs font-semibold tracking-widest uppercase text-zinc-400 dark:text-zinc-500">Gallery</div>
    <div class="p-4">
      <div class="grid grid-cols-4 gap-2">
        <div class="col-span-2 row-span-2 bg-blue-50 dark:bg-blue-950/30 rounded-lg flex items-center justify-center text-4xl min-h-[120px] border border-zinc-100 dark:border-zinc-800">🖼️</div>
        <div class="bg-purple-50 dark:bg-purple-950/30 rounded-lg flex items-center justify-center text-2xl aspect-square border border-zinc-100 dark:border-zinc-800">📸</div>
        <div class="bg-green-50 dark:bg-green-950/30 rounded-lg flex items-center justify-center text-2xl aspect-square border border-zinc-100 dark:border-zinc-800">🎤</div>
        <div class="bg-orange-50 dark:bg-orange-950/30 rounded-lg flex items-center justify-center text-2xl aspect-square border border-zinc-100 dark:border-zinc-800">👨‍💻</div>
        <div class="bg-pink-50 dark:bg-pink-950/30 rounded-lg flex items-center justify-center text-2xl aspect-square border border-zinc-100 dark:border-zinc-800">🏆</div>
        <div class="bg-teal-50 dark:bg-teal-950/30 rounded-lg flex items-center justify-center text-2xl aspect-square border border-zinc-100 dark:border-zinc-800">🤝</div>
        <div class="bg-yellow-50 dark:bg-yellow-950/30 rounded-lg flex items-center justify-center text-2xl aspect-square border border-zinc-100 dark:border-zinc-800">🌏</div>
        <div class="bg-indigo-50 dark:bg-indigo-950/30 rounded-lg flex items-center justify-center text-2xl aspect-square border border-zinc-100 dark:border-zinc-800">💡</div>
        <div class="bg-rose-50 dark:bg-rose-950/30 rounded-lg flex items-center justify-center text-2xl aspect-square border border-zinc-100 dark:border-zinc-800">🎓</div>
      </div>
    </div>
  </div>

  <!-- ── CONTACT ── -->
  <div class="border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden mb-3 animate-fade-up stagger-6">
    <div class="px-5 py-3 border-b border-zinc-200 dark:border-zinc-800 text-xs font-semibold tracking-widest uppercase text-zinc-400 dark:text-zinc-500">Get in Touch</div>
    <div class="p-4 grid grid-cols-3 gap-2.5">
      <a href="mailto:bryllim@gmail.com"
         class="border border-zinc-200 dark:border-zinc-800 rounded-lg p-3 flex flex-col gap-1 hover:bg-zinc-50 dark:hover:bg-zinc-900/50 transition-colors">
        <span class="text-xs font-semibold uppercase tracking-widest text-zinc-400 dark:text-zinc-500">Email</span>
        <span class="text-xs font-medium text-blue-600 break-all">bryllim@gmail.com</span>
      </a>
      <a href="https://calendly.com/bryllim/consultation" target="_blank"
         class="border border-zinc-200 dark:border-zinc-800 rounded-lg p-3 flex flex-col gap-1 hover:bg-zinc-50 dark:hover:bg-zinc-900/50 transition-colors">
        <span class="text-xs font-semibold uppercase tracking-widest text-zinc-400 dark:text-zinc-500">Let's Talk</span>
        <span class="text-xs font-medium text-blue-600">Schedule a Call</span>
      </a>
      <a href="https://blog.bryllim.com" target="_blank"
         class="border border-zinc-200 dark:border-zinc-800 rounded-lg p-3 flex flex-col gap-1 hover:bg-zinc-50 dark:hover:bg-zinc-900/50 transition-colors">
        <span class="text-xs font-semibold uppercase tracking-widest text-zinc-400 dark:text-zinc-500">Blog</span>
        <span class="text-xs font-medium text-blue-600">Read my blog</span>
      </a>
    </div>
  </div>

  <!-- ── FOOTER ── -->
  <footer class="text-center text-xs text-zinc-400 dark:text-zinc-600 pt-4 border-t border-zinc-100 dark:border-zinc-800 mt-2">
    © 2026 Bryl Lim. All rights reserved.
  </footer>

</div>

<script>
  function portfolio() {
    return {
      dark: false,

      experience: [
        { title: 'Junior Programmer',           company: 'Bicol University',                           year: 'Present' },
        { title: 'Backend Developer',           company: 'Bicol University - University Student Council',  year: '2024' },
        { title: 'Backend Developer',           company: 'StraStan Solutions Corp.',                 year: '2025' },
      ],

      techStack: [
        { label: 'Frontend',       items: ['JavaScript', 'TypeScript', 'React', 'Next.js', 'Vue.js', 'Tailwind CSS'] },
        { label: 'Backend',        items: ['Node.js', 'Python', 'PHP', 'Laravel', 'PostgreSQL', 'MongoDB'] },
        { label: 'DevOps & Cloud', items: ['AWS', 'Docker', 'Kubernetes', 'GitHub Actions'] },
      ],

      projects: [
        { name: 'CodeCred',                desc: 'Online certifications for programmers', domain: 'codecred.dev',       url: 'https://codecred.dev' },
        { name: 'BASE404',                 desc: 'Online coding bootcamp',                domain: 'base-404.com',       url: 'https://base-404.com' },
        { name: 'DIIN.PH',                 desc: 'AI-powered wardrobe assistant',         domain: 'diin.ph',            url: 'https://diin.ph' },
        { name: 'DYNAMIS Workout Tracker', desc: 'AI-powered workout tracker',            domain: 'dynamis-app.online', url: 'https://dynamis-app.online' },
      ],

      certifications: [
        { name: 'Huawei Developer Expert',    issuer: 'Huawei',   url: 'https://web.facebook.com/photo/?fbid=4320544268000607' },
        { name: 'Generative AI Leader',       issuer: 'Google',   url: 'https://www.credly.com/badges/d4ea07f0-f7f1-4889-8b15-2a0ec22850ff/public_url' },
        { name: 'Software Engineering',       issuer: 'TestDome', url: 'https://app.testdome.com/cert/e802401d0f874e78b3e4bceff900c52f' },
        { name: 'Generative AI Professional', issuer: 'Oracle',   url: '#' },
      ],

      recommendations: [
        { quote: "Bryl was the most talented software engineer I've mentored in a long time. He's a fast learner, and he always makes sure to deliver quality output given a period of time. He is also very keen on learning new technologies, and I find him to be objectively passionate about tech. He's definitely someone you want on your team.", author: 'Cris Lawrence Adrian Militante', role: 'ICT Director at GCM' },
        { quote: 'Intelligent software engineer. Bryl takes lead during software development and can handle and manage teams well.', author: 'Ken Gorro', role: 'Senior Developer at Fullscale' },
        { quote: "Was an intern at PocketDevs and sir Bryl was our main trainer to the different technologies we use in the company such as Laravel, Bootstrap, etc. With his guidance, I was equipped with some of the current trends and insights in the tech industry.", author: 'Patrick Vince Velasco', role: 'Software Engineer, YNS' },
        { quote: "Sir Bryl's teaching approach is incredibly hands-on, and the projects significantly accelerated my learning process in web development. I am truly grateful for the mentorship I received from him during my web development internship.", author: 'John Edmerson Pizarra', role: 'Jr. Full-stack Developer, PocketDevs' },
        { quote: 'Bryl is a good student and software developer who shows professionalism and dedication in whatever he does. His software projects during his academic years are up to standard and is being used by the university for some of its operations.', author: 'Glenn Pepito', role: 'Professor at University of San Carlos' },
        { quote: 'Bryl and I worked together in various projects where I saw his tenacity to deliver what he promised to do. He is able to meet deadlines without sacrificing the quality of the output, and at times even exceeding the set goals.', author: 'Van Honoridez', role: 'Application Development Analyst at Accenture' },
        { quote: "The exposure to real projects and guidance from Sir Bryl was instrumental in my growth as a web developer. His approach to teaching and mentoring helped me understand the intricacies of web development.", author: 'Zinia Ma. Consuelo R. Trinidad', role: 'Web Developer, Quickway Holdings Inc.' },
        { quote: "I was just a K-12 undergrad with zero coding experience, but with the guidance of Sir Bryl, I was able to learn and grow exponentially. His mentorship helped me develop a strong foundation in programming.", author: 'Jomar Neri', role: 'Full-stack Developer, Freelance' },
      ],

      memberships: [
        { name: 'Analytics & Artificial Intelligence Association of the Philippines (AAP)', url: 'https://www.aap.ph' },
        { name: 'Philippine Software Industry Association', url: 'https://www.psia.org.ph' },
      ],
    }
  }
</script>
</body>
</html>