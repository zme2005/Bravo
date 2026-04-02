# Bravo E-Commerce (PHP Backend Demo)

Bravo is a PHP/MySQL e-commerce demo project with a storefront and an admin panel.  
The backend is built with procedural PHP and `mysqli`, using session-based authentication and handler-based CRUD flows.

## Repository Description (GitHub)

PHP/MySQL e-commerce demo with storefront auth, cart, contact messaging, and role-based admin CRUD for users, products, and categories.

## Backend Focus

- Storefront authentication (`login`, `register`, `logout`)
- Session-driven user state (`$_SESSION`)
- Cart operations (`add` and increment quantity)
- Contact message submission and admin moderation
- Admin authentication + role checks
- Admin CRUD for users, products, and categories
- MySQL persistence via shared connection file

## Project Structure

```text
.
├─ index.php
├─ login.php / register.php / contact.php
├─ auth/
│  ├─ handleLogin.php
│  ├─ handleRegister.php
│  └─ logout.php
├─ cartFunctions/
│  └─ add.php
├─ contactFunctions/
│  ├─ insert.php
│  ├─ edit.php
│  └─ delete.php
├─ admin/
│  ├─ login.php
│  ├─ dashboard.php
│  ├─ users.php / products.php / categories.php / messages.php
│  ├─ views/users/functions/connection.php
│  ├─ proFunctions/
│  └─ catFunctions/
├─ css/
└─ js/
```

## Core Backend Flows

### 1) User Authentication

- `login.php` posts to `auth/handleLogin.php`
- `register.php` posts to `auth/handleRegister.php`
- User session is stored in `$_SESSION["loggedUser"]`
- Logout via `auth/logout.php`

### 2) Admin Authentication and Authorization

- `admin/login.php` posts to `admin/views/users/functions/handleLogin.php`
- Admin session stored in `$_SESSION["loggedInUser"]`
- Non-admin roles are blocked from admin panel routes

### 3) Cart Flow

- Storefront sends AJAX POST to `cartFunctions/add.php`
- If `(user_id, product_id)` exists, quantity increments
- Otherwise a new cart row is inserted

### 4) Contact Flow

- `contact.php` sends message to `contactFunctions/insert.php`
- Admin can mark message as viewed via `contactFunctions/edit.php`
- Admin can delete messages via `contactFunctions/delete.php`

### 5) Admin CRUD

- Users: `admin/views/users/functions/insert.php`, `update.php`, `delete.php`
- Products: `admin/proFunctions/insert.php`, `update.php`, `delete.php`
- Categories: `admin/catFunctions/add.php`, `edit.php`, `delete.php`

## Tech Stack

- PHP (procedural style)
- MySQL / MariaDB
- `mysqli`
- Apache + PHP runtime (XAMPP expected)
- Bootstrap + jQuery (frontend UI helpers)

## Local Setup (XAMPP)

1. Place the project inside your XAMPP `htdocs` directory.
2. Start **Apache** and **MySQL** from XAMPP Control Panel.
3. Create/import database schema in MySQL (default DB name in code: `bravoadmin`).
4. Verify DB config in:
   - `admin/views/users/functions/connection.php`
5. Open in browser:
   - `http://localhost/e-comme - bravo/`

## Database Notes

Connection defaults in code:

- Host: `localhost`
- User: `root`
- Password: empty
- Database: `bravoadmin`

Expected tables (inferred from code):

- `admins`
- `products`
- `cat`
- `cart`
- `messages`

## Security and Production Readiness

This project is suitable as a learning/demo backend and is **not production-ready** in current form.

Known concerns:

- SQL queries built from raw input in multiple handlers (SQL injection risk)
- No CSRF tokens for state-changing actions
- Output escaping is inconsistent (XSS risk)
- Hardcoded DB credentials
- Session hardening is limited

Recommended hardening:

1. Replace raw SQL with prepared statements.
2. Add CSRF protection to all form and AJAX mutations.
3. Escape all rendered user-generated content.
4. Move credentials to environment configuration.
5. Regenerate session IDs at login and enforce secure cookie settings.

## Limitations

- Some pages are mostly static UI and not fully wired to backend logic.
- No test suite included.
- Error handling/logging is minimal.

## Roadmap Ideas

- Migrate to layered architecture (service/repository) or a PHP framework
- Add REST API endpoints for frontend decoupling
- Add automated tests (PHPUnit + integration tests)
- Improve validation and centralized authorization

## License

No license file is currently included. Add a `LICENSE` file before public distribution.

Live preview:  https://onlinetest.infinityfreeapp.com/?i=1
