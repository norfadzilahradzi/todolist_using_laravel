# LARAVEL TO-DO LIST

A simple TO-DO app using Laravel.

## INSTRUCTION

1. To develop a simple TO-DO app using Laravel.
2. The TO-DO list need to be saved abd loaded from database (Create a simple schema via migration).
3. Allow user to add more into the list and update the page, appending the new record on top (Latest first).
4. Design the user session without the need for authentication/login (End/reset the TO-DO list when browser tab is closed/re-open).

## INSTALLATION

Software and Tools required:

1. Visual Studio Code (Version 1.75.1 is used)
2. Xampp (v3.3.0 is used)
3. phpMyAdmin
4. PHP Extension

Clone this repository:
```bash
git clone https://github.com/norfadzilahradzi/laravel_todolist
```

Go into the repository folder:
```bash
cd todolist
```

Composer install:
```bash
composer install
```

Create an environmental file:
```bash
cp .env.example .env
```

Create a database named `todolist` and run the migrations:
```bash
php artisan migrate
```

Run the server using this command:
```bash
php artisan serve
```

## OUTPUT

View after run:
![image](https://user-images.githubusercontent.com/43487073/221398982-c9e6b389-43a4-49df-9d1f-aa3882b4ef3e.png)

Add the first task:
![image](https://user-images.githubusercontent.com/43487073/221399038-6635c79f-1dc2-48f4-84c5-39b55416a034.png)

Add more tasks (Latest on top):
![image](https://user-images.githubusercontent.com/43487073/221399109-5ad7c434-4950-42fe-94e9-76c5f558837e.png)

Update the task once completed:
![image](https://user-images.githubusercontent.com/43487073/221399150-6f1baed4-73e6-441d-8e8e-33085cb46936.png)

Delete after completed:
![image](https://user-images.githubusercontent.com/43487073/221399169-1b82e39d-1028-410c-9e1e-24a01b7e302e.png)
