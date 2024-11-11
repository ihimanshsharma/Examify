<h1 align="center">📚 Examify</h1>

<p align="center">
  Examify is an online examination and classroom management system designed for educational institutions. Built to emulate key features of Google Classroom, it offers seamless login, class joining via code, exam management, result processing, and user roles for students, teachers, and administrators. The project is crafted with a modern tech stack, featuring PHP, MySQL, JavaScript, and Tailwind CSS, ensuring a polished and interactive UI enhanced by Animate.css
</p>

------

<p align="center">
  <img src="https://readme-typing-svg.herokuapp.com?font=Fira+Code&size=22&pause=1000&color=4CAF50&center=true&vCenter=true&width=435&lines=Manage+Exams+Efficiently;Student+and+Teacher+Focused;Secure+and+User-Friendly" alt="Typing SVG">
</p>

<h2 align="left">🌟 Features</h2>
<ul>
  <li><strong>Secure Authentication</strong>: Role-based login for students, teachers, and admins.</li>
  <li><strong>Join Classes with Code</strong>: Students can join with a unique class code.</li>
  <li><strong>Comprehensive Dashboard</strong>: Personalized views for students, teachers, and admins.</li>
  <li><strong>Exam Management</strong>: Create, manage, and monitor exams with ease.</li>
  <li><strong>Interactive UI</strong>: Modern, responsive design using Tailwind CSS and Animate.css.</li>
  <li><strong>Result Processing</strong>: Efficient result viewing and management for teachers and students.</li>
</ul>

<h2 align="left">🔧 Tech Stack</h2>
<p align="left">
  <a href="https://www.html.com/" target="_blank"><img src="https://img.shields.io/badge/HTML-E34C26?style=for-the-badge&logo=html5&logoColor=white"/></a>
<!--   <a href="https://www.javascript.com/" target="_blank"><img src="https://img.shields.io/badge/JavaScript-F0DB4F?style=for-the-badge&logo=javascript&logoColor=white"/></a> -->
  <a href="https://www.php.net/" target="_blank"><img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/></a>
  <a href="https://www.mysql.com/" target="_blank"><img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white"/></a>
  <a href="https://getbootstrap.com/" target="_blank"><img src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white"/></a>
  <a href="https://tailwindcss.com/" target="_blank"><img src="https://img.shields.io/badge/Tailwind_CSS-06B6D4?style=for-the-badge&logo=tailwind-css&logoColor=white"/></a>
  <a href="https://github.com/" target="_blank"><img src="https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white"/></a>
</p>

<h2 align="left">📂 Project Structure</h2>
<pre>
Examify/
│
├── config/
│   ├── database.php
│   └── config.php
│
├── public/
│   ├── index.php
│   ├── login.php
│   └── signup.php
│
├── includes/
│   ├── classes/
│   │   ├── User.php
│   │   ├── Classroom.php
│   │   ├── Exam.php
│   │   └── Result.php
│   └── functions/
│       └── common.php
│
├── pages/
│   ├── student/
│   │   ├── dashboard.php
│   │   ├── take_exam.php
│   │   └── profile.php
│   ├── teacher/
│   │   ├── dashboard.php
│   │   ├── create_exam.php
│   │   └── manage_results.php
│   └── admin/
│       ├── dashboard.php
│       ├── user_management.php
│       ├── exam_overview.php
│       └── site_settings.php
│
└── vendor/ (Composer dependencies)
</pre>

<h2 align="left">🚀 Installation</h2>
<ol>
  <li>Clone the repository:
    <pre><code>git clone https://github.com/ihimanshsharma/Examify.git
cd Examify</code></pre>
  </li>
  <li>Install dependencies:
    <pre><code>composer install</code></pre>
  </li>
  <li>Configure the database in <code>config/database.php</code>.</li>
</ol>

<h2 align="left">💡 Usage</h2>
<p>
  Run the project on a local server (e.g., XAMPP, WAMP) and access it through <code>http://localhost/Examify/</code>.
</p>

<h2 align="left">📝 License</h2>
<p align="left">This project is licensed under the <strong>MIT License</strong>.</p>

<h2 align="left">🤝 Contributing</h2>
<p>
  Contributions are welcome! Please open an issue or submit a pull request.
</p>

<h2 align="left">📬 Contact</h2>
<p align="left">Feel free to reach out via <a href="mailto:talk.himanshsharma@gmail.com">Email</a>.</p>

------

Made with :heart: and PHP
