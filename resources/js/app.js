import './bootstrap';

// Define portfolio data for Alpine.js
window.portfolio = function() {
  return {
    dark: false,
    experience: [
      { title: 'Backend Developer', company: 'freelance', year: '2024-present' },
      { title: 'Intern - Backend Developer', company: 'Philcomsat Inc.', year: '2024' },
      { title: 'Capstone Project Lead', company: 'Bicol University', year: '2023-2024' },
    ],
    techStack: [
      {
        label: 'Backend',
        items: ['PHP', 'Laravel', 'MySQL', 'PostgreSQL', 'API Design']
      },
      {
        label: 'DevOps',
        items: ['AWS', 'Docker', 'Linux']
      },
      {
        label: 'Frontend',
        items: ['JavaScript', 'Tailwind CSS', 'Alpine.js']
      }
    ],
    projects: [
      { name: 'Portfolio Website', description: 'Personal portfolio built with Laravel & Vite', tech: 'Laravel, Vite, Tailwind CSS' },
      { name: 'RESTful API System', description: 'Scalable API for university management', tech: 'PHP, Laravel, MySQL' },
      { name: 'Admin Dashboard', description: 'Full-stack admin panel', tech: 'Laravel, Bootstrap' }
    ],
    education: [
      { school: 'Bicol University', degree: 'BS Information Technology', year: 'Graduated Cum Laude 2024', field: 'IT' }
    ],
    certifications: [
      { name: 'AWS Basics', issuer: 'Amazon Web Services', year: '2024' },
      { name: 'PHP Developer Certification', issuer: 'Udemy', year: '2023' }
    ]
  };
};
