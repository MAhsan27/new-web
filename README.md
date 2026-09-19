# RR Technologies

Laravel-based company website with home, services, contact, and portfolio pages.

## Requirements
- PHP 8.2+
- Composer 2.x
- Node.js 18+ / npm
- MySQL 8.x

## Setup (fresh clone ke liye)

1. Clone karo:
   git clone https://github.com/USERNAME/rr-technologies.git
   cd rr-technologies

2. PHP dependencies install:
   composer install

3. Node dependencies install:
   npm install

4. .env file banao:
   cp .env.example .env
   php artisan key:generate

5. .env mein apna DB credentials daalo

6. Migrations chalao:
   php artisan migrate

7. Storage link banao:
   php artisan storage:link

8. Frontend assets build karo:
   npm run dev     # development
   npm run build   # production

9. Server start karo:
   php artisan serve

Visit: http://localhost:8000

## Project Structure
- `/resources/views/home.blade.php` — Home page
- `/resources/views/contact.blade.php` — Contact page
- `/resources/views/layouts/header.blade.php` — Shared header
- `/public/css/home.css` — Home styles
- `/public/css/contact.css` — Contact styles
- `/public/css/header.css` — Header styles
- `/public/js/home.js` — Home interactions
- `/public/js/about-cubes-new.js` — About section 3D cubes

## Team
- Dev 1 — Home + Contact pages
- Dev 2 — ...
- Dev 3 — ...
