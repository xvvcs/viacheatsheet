# Deploying to Vercel

This Laravel application is configured for serverless deployment on Vercel using the `vercel-php` runtime.

## Prerequisites

- Node.js (for the Vercel CLI)
- PHP (to generate `APP_KEY` locally)
- A [Vercel account](https://vercel.com)

## Install the Vercel CLI

```bash
npm install -g vercel
```

## Deploy

Preview deployment:

```bash
vercel
```

Production deployment:

```bash
vercel --prod
```

## Required environment variables

Set these in the Vercel dashboard under **Project → Settings → Environment Variables**:

| Variable | Value | Notes |
|---|---|---|
| `APP_KEY` | `base64:...` | **Required.** Generate with the command below. |
| `APP_ENV` | `production` | |
| `APP_DEBUG` | `false` | |
| `CACHE_DRIVER` | `array` | Must be `array` — no filesystem cache in serverless. |
| `SESSION_DRIVER` | `array` | Must be `array` — no database or file sessions. |
| `LOG_CHANNEL` | `stderr` | Sends logs to Vercel's log viewer. |

### Generate APP_KEY

Run this locally and copy the output into the Vercel dashboard:

```bash
php artisan key:generate --show
```

## How it works

- `vercel.json` routes all requests to `api/index.php`
- `api/index.php` delegates to `public/index.php`, the standard Laravel entry point
- The `vercel-php@0.7.2` runtime handles PHP execution serverlessly
- `CACHE_DRIVER=array`, `SESSION_DRIVER=array`, and `LOG_CHANNEL=stderr` prevent Laravel from attempting any disk writes, which would fail on Vercel's read-only filesystem
