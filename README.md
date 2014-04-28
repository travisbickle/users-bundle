# Email/Password Authenthication
This repository contains a blank slate Symfony2 app, using Doctrine as the ORM. The goal is to implement a full-featured user signup system by integrating a third-party bundle called [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle).

Don't worry too much with the UI, the important thing is that it works according to the following requirements:

1. Users should be able to signup using an email address and password.
2. The user's account will only be active when the email address is verified (by sending a confirmation email).
3. Users should be able to login using their email address and password.
4. Users should be able to change their password.
5. Users should be able to recover an account for which they lost the password.
6. Users must be logged-in to access `/u` (the *Dashboard*)
7. Users should be able to add several email addresses to their account, each one verified by sending a confirmation email.

If you follow this README sequentially you should have no trouble implementing the above requirements.

## Fork the repository
Before you proceed you need a GitHub account. If you don't have one yet, [create it](https://github.com/join). Then login to GitHub and fork this repository by clicking *Fork* (top right). Navigate to your fork's GitHub page and copy the *clone URL*. Then open a terminal and type:

    git clone <paste URL here>

You should then create the branch in which you will work:

    cd users-bundle
    git checkout -b users

## Installation
Now that you have your own branch, proceed to install vendor code:

    php composer.phar install

You will be asked to enter your database credentials. You can either enter them
when asked or input them in `app/config/parameters.yml`. You're free to use your preferred RDBMS.

Create the database:

    app/console doctrine:database:create

Run the PHP development server and access the app at [localhost:8000](http://localhost:8000):

    app/console server:run

If you saw an error or a blank page, make sure you fix the problem before continuing.

## Documentation
Before anything else, take a look at the directory structure. Your code will go under `src/Memeoirs/UsersBundle`. Once you did that, read some of the [Symfony documentation](http://symfony.com/doc/2.3/book/index.html) (always make sure you're reading the documentation for Symfony 2.3). This is just to give you an overview of what symfony does, no need to dive too deep. The following chapters are specially useful:

* [Symfony2 and HTTP Fundamentals](http://symfony.com/doc/2.3/book/http_fundamentals.html)
* [Symfony2 versus Flat PHP](http://symfony.com/doc/2.3/book/from_flat_php_to_symfony2.html)
* [Databases and Doctrine](http://symfony.com/doc/2.3/book/doctrine.html)
* [Security](http://symfony.com/doc/2.3/book/security.html)

Most of what is described in the *Security* section of the documentation is implemented by FOSUserBundle so you won't need to code it yourself. However, it's important to have a general idea of Symfony's security component before proceeding with FOSUserBundle.

## Styleguide
**Please make sure you follow these rules.**

### Code

* Use 4-spaces indentation, never tabs
* Make sure you follow the [Symfony coding standards](http://symfony.com/doc/2.3/contributing/code/standards.html) in your own code.
* Don't leave [trailing spaces](http://programmers.stackexchange.com/questions/121555/why-is-trailing-whitespace-a-big-deal)

### Git
* Each commit must be a logically separate changeset
* You should use the imperative present tense in commit messages. Instead of "I added code to create planet Earth" use "Create planet Earth". Think of "a command that applies a logical changeset" instead of "a message that describes what I did".

## Setup FOSUserBundle
See [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle) for an overview of what it does. Then follow the [instructions](https://github.com/FriendsOfSymfony/FOSUserBundle/blob/master/Resources/doc/index.md) to set it up.

Once you have setup FOSUserBundle, you have all it's needed to implement requirements 1-6 above (leave requirement 7 for later). If you're stuck, see [Next steps](https://github.com/FriendsOfSymfony/FOSUserBundle/blob/master/Resources/doc/index.md#next-steps).

## Implement multiple email addresses
Now that you have requirements 1-6 working, the next step is to implement:

7. Users should be able to add several email addresses to their account, each one verified by sending a confirmation email.

Improve on your existing application to implement this last requirement.

## Pushing
Once you're done, push your commits to GitHub:

    git push origin users

Finally, open a [Pull Request](https://help.github.com/articles/using-pull-requests).