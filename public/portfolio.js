{
  let theme
  try {
    theme = localStorage.getItem('portfolio-theme')
  } catch {
    // Use the system preference when storage is unavailable.
  }
  document.documentElement.classList.toggle('dark',
    theme ? theme === 'dark' : matchMedia('(prefers-color-scheme: dark)').matches)
}

function portfolio() {
  return {
    dark: document.documentElement.classList.contains('dark'),

    toggleTheme() {
      this.dark = !this.dark
      try {
        localStorage.setItem('portfolio-theme', this.dark ? 'dark' : 'light')
      } catch {
        // Keep the theme switch usable when storage is unavailable.
      }
    },

    experience: [
      { title: 'Junior Programmer',               company: 'Bicol University ICT Office',                  year: 'Oct 2025 – Present' },
      { title: 'WordPress Developer', company: 'EP Social', year: 'June – September 2026' },
      { title: 'Backend Developer',               company: 'Bicol University – University Student Council', year: 'Aug 2024 – July 2026' },
      { title: 'Internship (Backend Developer)',   company: 'StraStan Solutions Corp.',                     year: 'Feb – May 2025' },
    ],

    techStack: [
      { label: 'Frontend',       items: ['JavaScript', 'HTML5', 'CSS3', 'Bootstrap', 'Tailwind CSS', 'Alpine.js', 'Prettier', 'TypeScript', 'Vue.js', 'Next.js', 'React', 'Vite'] },
      { label: 'Backend',        items: ['PHP', 'Laravel', 'Livewire', 'Filament', 'MySQL', 'AWS Lambda', 'DynamoDB', 'OAuth', 'JWT', 'REST', 'Express.js', 'MongoDB'] },
      { label: 'Cloud & DevOps', items: ['AWS', 'AWS CloudFormation', 'AWS API Gateway', 'MinIO S3', 'Grafana', 'Prometheus', 'Linux', 'Ubuntu', 'WSL'] },
      { label: 'Security & Identity', items: ['Auth0', 'AWS IAM', 'AES', 'RSA', 'SHA', 'Cognito', 'GitHub Actions'] },
      { label: 'CMS & No-Code', items: ['WordPress'] },
      { label: 'Developer Tools', items: ['Git', 'GitHub', 'VS Code', 'Postman', 'Discord', 'Notion'] },
      { label: 'AI Development Tools', items: ['Claude', 'Codex', 'ChatGPT', 'Gemini'] },
    ],

    projects: [
      { name: 'Hotel Staylong', desc: 'Website for an apartment hotel in Täby, north of Stockholm, with apartment listings and booking for short and extended stays.', demo: 'https://staylong.se/en/' },
      { name: 'EP Social', desc: 'Website for a digital marketing agency offering Google Ads, Meta Ads, and social media marketing for small businesses.', demo: 'https://ep-social.com/' },
      { name: 'A6 Lås & Larm', desc: 'Website for a Jönköping automotive locksmith offering car key replacement, repairs, and help with lost keys.', demo: 'https://a6security.se/' },
      { name: 'Audi Bilnyckel', desc: 'Service website for Audi car key replacement, repair, and programming.', demo: 'https://audibilnyckel.se/' },
      { name: 'Volvo Bilnyckel', desc: 'Service website for Volvo car key replacement, repair, and programming.', demo: 'https://volvobilnyckel.se/' },
      { name: 'Bicol University Property Management and Monitoring System',                           desc: 'Created the Property Module Management using Filament',             year: '2026',      demo: '' },
      { name: 'Plate — Restaurant Finder',                                         desc: 'Plate is a modern, full-stack web app that lets users search for restaurants in any city around the world. It is built with a clean separation between a React frontend and a Node.js/Express backend, using the Yelp Fusion API as its data source.',                 year: '2026',      demo: '' },
      { name: 'Bicol University Merit System Promotion',                           desc: 'Backend using TALL stack + MinIO S3 for secure file storage and employee records.',             year: '2026',      demo: '' },
      { name: 'Bicol University – University Student Council Website',             desc: 'Laravel & MySQL backend with custom database migrations and student council info management.', year: '2024–2026', demo: '' },
      { name: 'Solutions Chapter Business Excellence Platform',                    desc: 'A cloud-based CMS deployed on AWS, integrating DynamoDB for dynamic content management and high-performance scalability. Built and maintained REST APIs for seamless frontend-backend communication, while collaborating with UX/UI teams to deliver customer-facing features with optimized security and uptime.', year: '2025',      demo: 'https://www.solutionschapter.com/' },
      { name: 'Bicol University Center of Excellence',                             desc: 'Backend system with Laravel, MySQL, user auth restricted to BU email accounts.',               year: '2025',      demo: '' },
      { name: 'AgTech - Web Application for Farmer-Trader Market Optimization',   desc: 'Full-stack app for livestock, users, and transaction management with cloud deploy.',           year: '2024–2025', demo: '' },
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
