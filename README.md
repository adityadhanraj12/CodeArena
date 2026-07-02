# CodeArena 🏆

CodeArena is a modern, full-featured **Quiz and Multiple Choice Question (MCQ) Platform** built using Laravel 12, TailwindCSS, and PostgreSQL. It allows users to browse quiz categories, search for active quizzes, test their coding knowledge, and automatically receive downloadable PDF certificates upon successful completion. It also features a robust Admin Dashboard to manage questions, categories, and quizzes.

---

## 🚀 Features

### 👤 User Features
- **User Authentication**: Secure registration, login, logout, and change password features.
- **Email Verification & Password Recovery**: Fully integrated workflows to verify user accounts and securely reset forgotten passwords via email.
- **Quiz Browsing**: Search quizzes by title or browse through dynamically categorized folders.
- **Interactive MCQ Engine**: Take quizzes question-by-question, selecting answers, tracking progress, and submitting attempts.
- **Dynamic Score Tracking**: Instant grading upon quiz submission.
- **PDF Certificate Generation**: Generates customized completion certificates that users can view and download (powered by Spatie Browsershot and Puppeteer).

### 🛠️ Admin Features (Dashboard)
- **Category Management**: Admin capability to create, view, and delete quiz categories.
- **Quiz Creator**: Create new quizzes grouped by their respective technical categories.
- **MCQ Builder**: Add multiple-choice questions (with 4 options and a marked correct answer) associated with specific quizzes and categories.
- **Quiz Auditing**: Browse created quizzes and manage question banks.

---

## 💻 Tech Stack

- **Backend**: PHP 8.2+ & [Laravel 12](https://laravel.com)
- **Frontend**: [TailwindCSS v4](https://tailwindcss.com), Vite, Blade Templates, JavaScript (Axios)
- **Database**: SQLite (Local Development) / PostgreSQL (Production via [Aiven.io](https://aiven.io))
- **PDF Engines**: [Spatie Browsershot](https://github.com/spatie/browsershot) & [Puppeteer](https://pptr.dev) (Headless Chromium)
- **Deployment Hosting**: [Render.com](https://render.com) (Docker Runtime)

---

## ⚙️ Local Installation Guide

Follow these steps to run CodeArena on your local computer:

### 1. Prerequisites
Ensure you have the following installed on your system:
- **PHP 8.2** or higher
- **Composer** (PHP dependency manager)
- **Node.js** & **NPM** (Javascript package manager)
- **SQLite** or another database engine
- **Git**

### 2. Clone the Repository
```bash
git clone https://github.com/your-username/CodeArena.git
cd CodeArena
```

### 3. Install Dependencies
```bash
# Install PHP dependencies
composer install

# Install Javascript packages
npm install
```

### 4. Environment Configuration
Copy the sample environment file and configure your database settings:
```bash
cp .env.example .env
```
Open `.env` and set your application key and database connection (default is sqlite):
```env
APP_NAME="CodeArena"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=sqlite
```

### 5. Setup Local Database
Generate your application key and run the migrations:
```bash
# Generate secure key
php artisan key:generate

# Create SQLite database file
touch database/database.sqlite

# Run migrations and seed tables
php artisan migrate
```

### 6. Compile Assets & Start Server
Start the frontend compiler and Laravel development server concurrently:
```bash
# Compiles and watches Tailwind/Vite assets
npm run dev

# Starts the PHP local server (usually http://127.0.0.1:8000)
php artisan serve
```

---

## 🐳 Production Deployment (Render + Aiven)

CodeArena is configured for containerized deployment using Docker.

1. **Database**: Create a free **PostgreSQL** instance on [Aiven.io](https://aiven.io) and get your connection string.
2. **Web Service**: Deploy the repository on **Render** as a **Docker** service.
3. **Environment Variables**:
   - `DB_CONNECTION=pgsql`
   - `DATABASE_URL=postgres://avnadmin:yourpassword@host:port/defaultdb?sslmode=require`
   - `DB_SSLMODE=require`
   - `APP_KEY`=(your local `.env` app key)
   - `APP_ENV=production`
   - `APP_DEBUG=false`

---

## 📄 License
This project is open-sourced software licensed under the [MIT license](LICENSE).
