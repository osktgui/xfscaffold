# Laravel 5.x Scaffold Generator
## Usage

### Step 1: Install Through Composer

```
composer require xf/xfscaffold:dev-master --dev
```

### Step 2: Add the Service Provider

Open `config/app.php` and, to your **providers** array at the bottom, add:

```
xfscaffold\GeneratorsServiceProvider::class
```

### Step 3: Run Artisan!

You're all set. Run `php artisan` from the console, and you'll see the new commands `make:scaffold`.

## Examples

Use this command to generator scaffolding of **Test** in your project:
```
php artisan make:scaffold Test
```

This command will generate:

```
app/Models/Test.php
app/Http/Controllers/Api/TestController.php
app/Repositories/Test.php
app/Services/Test.php
```


##Collaborators
 [Luis Oscátegui](https://github.com/osktgui "osktgui")