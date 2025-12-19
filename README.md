# MDK Starter Kit

This is a Statamic Starter Kit containing a pre-configured setup with Hetzner S3 Object Storage, generic content structures, and essential addons.

## Local Development Workflow

The best way to work on the kit is to make changes in a live Statamic site (like `mdktestlocal`) and then sync them back here.

### 1. Make changes in your test site
Work on your Blueprints, Templates, and Content inside your local test project (e.g. `mdktestlocal`).

### 2. Export changes back to this repository
Run this command from inside your test project directory:
```bash
php please starter-kit:export ../mdkstarter
```

### 3. Commit and Push
Go to the `mdkstarter` directory and commit your changes to GitHub.

---

## Testing Locally

To test this starter kit locally without registering it on Packagist, use the following commands.

### The "One-Liner" Test Command
This command will delete `mdktestlocal`, create a fresh Statamic project, and install this starter kit using a local Composer path repository.

```bash
rm -rf mdktestlocal && statamic new mdktestlocal --no-interaction && cd mdktestlocal && composer config repositories.local '{"type": "path", "url": "/Users/mdk/Herd/mdkstarter"}' && composer require mdk/mdkstarter:@dev --no-interaction && php please starter-kit:install mdk/mdkstarter --no-interaction && npm install && npm run build
```

### Manual Steps
1. **Create Project:** `statamic new my-project`
2. **Link Kit:** `composer config repositories.local '{"type": "path", "url": "/Users/mdk/Herd/mdkstarter"}'`
3. **Require Kit:** `composer require mdk/mdkstarter:@dev`
4. **Install Kit:** `php please starter-kit:install mdk/mdkstarter`

## Features Included
- **Asset Containers:** `images` and `files` configured for Hetzner S3 (see `.env.example`).
- **Collections:** `articles`, `calendar`, `pages`.
- **Pre-created User:** `mortendk@gmail.com` / `foobar123`.
- **Addons:** Statamic Logbook, Toolbar, Responsive Images, Feedamic, etc.