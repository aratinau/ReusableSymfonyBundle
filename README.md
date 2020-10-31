# Creating a Reusable (& Amazing) Symfony Bundle

## Notes

`php bin/console debug:container --show-private knpu`

Retourne :

```
 Select one of the following services to display its information:
  [0] knpu_lorem_ipsum.knpu_ipsum
  [1] KnpU\LoremIpsumBundle\KnpUIpsum
```

Toute la config d'un bundle

`bin/console config:dump framework`

```
 "repositories": [
        {
            "type": "path",
            "url": "LoremIpsumBundle"
        }
    ]
```

`composer require knpuniversity/lorem-ipsum-bundle:*@dev`

Well hi there! This repository holds the code and script
for the [Creating a Reusable (& Amazing) Symfony Bundle](https://knpuniversity.com/screencast/symfony-bundle) course on KnpUniversity.

## Setup

If you've just downloaded the code, congratulations!

To get it working, follow these steps:

**Download Composer dependencies**

Make sure you have [Composer installed](https://getcomposer.org/download/)
and then run:

```
composer install
```

You may alternatively need to run `php composer.phar install`, depending
on how you installed Composer.

**Start the built-in web server**

You can use Nginx or Apache, but the built-in web server works
great:

```
php bin/console server:run
```

Now check out the site at `http://localhost:8000`

Have fun!

## Have Ideas, Feedback or an Issue?

If you have suggestions or questions, please feel free to
open an issue on this repository or comment on the course
itself. We're watching both :).

## Thanks!

And as always, thanks so much for your support and letting
us do what we love!

<3 Your friends at KnpUniversity
