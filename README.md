## Movie App

The above application is a minimalistic movie app with the following requirements met as requested in the email sent:

- The use of repository pattern as an additional layer between the model 
and the controller.
- Use the Eloquent ORM relationships for the entities.
- Represent each of the entities (i.e. users, showtimes, cinemas, 
movies) as its own Laravel module .
- Ability for an authenticated User to add a movie to a specific cinema.


The application uses a simple UI seeing as the UI is not the focus of the assessment.

## How To Install Locally

- Clone the repository.
- Install composer dependencies *composer install*.
- Create the .env file from .env.example file.
- Generate app encryption key *php artisan key:generate*
- Create database with the name as seen in the .env file.
- Migrate the database *php artisan:migrate*
- Seed the database with the command *php artisan module:seed*
- Serve the application *php artisan serve*

