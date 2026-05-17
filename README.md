# Study Tracker

Study Tracker is a web application built to help students manage subjects and log study sessions.

## Features

- Create and manage study subjects
- Register study sessions
- Track:
  - study date
  - duration
  - difficulty level
  - notes
- Dashboard with:
  - total subjects
  - total sessions
  - total study minutes
  - recent sessions
  - study calendar

## Tech Stack

- PHP 8.3
- Laravel
- PostgreSQL
- Docker
- Bootstrap

## Project Structure

```bash
app/
routes/
resources/views/
database/migrations/
docker-compose.yml
Dockerfile
```

## Installation

Clone repository:

```bash
git clone https://github.com/MikaelMagal/study-tracker.git
cd study-tracker
```

Run containers:

```bash
docker compose up -d --build
```

Run migrations:

```bash
docker compose exec app php artisan migrate
```

Access application:

```bash
http://localhost:8000
```

## Author

Mikael Vieira Magalhães

GitHub: https://github.com/MikaelMagal