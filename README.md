# Laravel Learning

* This repository has the only purpose to control version of Laracast's tutorial project for Laravel 5.4, though I'm using 5.5 and checking what is different. I'll do this README.md a sort of diary for my progress and what I learned.

* The classes are from [Laracasts](https://laracasts.com). They are great, check them out.

* Until 17/09/2017, I've watched until lesson 13. I'll update this list better later so I won't need to write it down all at once.

## Lesson 1 - Laravel Installation and Composer

Installing Laravel, using basic dependencies just like the [docs](https://laravel.com/docs/5.5) recommend me, Composer installation as well.

```
laravel new [nameproject]
``` 

## Lesson 2 - Basic Routing and Views

Basic routing and views knowledge, there is a directory for routes, separated between `api` and `web`, and views that are inside `resources` folder and is based on the use of Blade engine. Routing defines where your resources are going to be processed and, with that said, respect MVC software architecture, we can define which `controller` will take care of business logic.

```
Route::get('/', function ()    {
    return view('greeting', ['name' => 'James']);
});
```

## Lesson 3 - Laravel Valet

Some important tool you can have in Mac, but guess what? I don't have one, lol.


## Lesson 4 - Database Setup and Sequel Pro

You can set up basically any type of SQL database to you application without problem, setting the type in `.env` file. 



## Lesson 5 - Passa Data to your Views
 
Pass the data to your Views through route, an important information is that when your model is named as the view component created in the resources, it automatically recognizes the object as its model, without the need to define it or checking the information in some type of function inside the Controller.

## Lesson 6 - Working with Query Builder



## Lesson 7 - Eloquent 101

## Lesson 8 - Controllers

## Lesson 9 - Route Model Binding

## Lesson 10 - Layouts and Structure

## Lesson 11 - Form Request Data and CSRF

## Lesson 12 - Form Validation 101

## Lesson 13 - Rendering Posts

It teaches you to render information passed from a controller and using Blade engine to make component that are a representation of data. In the matter of model's information, we can use, for example, `Carbon` library to fix some datetime format. It's important to mention that the order, what type of info or anything else that involves the logic of the object, you set it up inside the Controller.

## Lesson 14 - Front End and Laravel Mix

We learn that, inside `resources` directory, we can set some static files like CSS files, Sass, and any other type of front-end framework you want to use, and you can organize it with Laravel Mix, an abstraction of Webpack for Laravel. Laravel Mix can build files and set it in public folders so it can be served correctly. You must have `nodejs` and `npm`. 

Laravel Mix makes it easy you guard your files inside your sass file or css server-side file and generate a version for public access. The configuration is really easy to make and you need `package.json` scripts.

Remember: `npm install`
## Lesson 15 - Eloquent Relationships and Comments

As this application is a blog, there is a need to have comments.