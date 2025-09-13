# ByteBuilt

- ByteBuilt is a **marketplace for buying prebuilt PCs and laptops**, built with **Laravel** and **MySQL**.  
- It provides a clean interface for browsing, comparing, and ordering PCs, along with an **admin panel** for managing products, users, orders and carts

## Landing page:
<img width="1518" height="783" alt="Landing" src="https://github.com/user-attachments/assets/529432fe-1129-46ed-b954-2aaaa19c49a1" />


## Tech Stack

- **Languages:** PHP, HTML, CSS, JavaScript  
- **Framework:** [Laravel](https://laravel.com/)
- **Database:** MySQL
- **Frontend:** [Bulma CSS](https://bulma.io/)
- **Package Manager:** Composer & NPM
- **Version Control:** Git & GitHub
- **Environment:** [XAMPP](https://www.apachefriends.org/index.html) (local development server)

### Validation & Error Handling

- **Login:** checks email exists and password length (6–30 characters)  
- **Registration:** validates name, email uniqueness, password length, and confirmation  
- **Server-side validation:** using Laravel `$request->validate()` for all forms  
- **Client-side validation:** basic checks with JavaScript  
- **Error feedback:** redirects with clear success/error messages for all actions

### Profile Image Upload

- Users can upload a profile picture through their account settings  
- Server-side validation ensures only images (`jpeg`, `png`, `jpg`, `gif`) up to 2MB are accepted  
- Uploaded images are stored in Laravel’s `public` storage folder with a **random 64-character filename** to prevent naming conflicts  
- If a user already has a profile picture, the old image is automatically deleted when a new one is uploaded  
- After a successful upload, the user is redirected to their profile page with a confirmation message

### Forgot Password

- Users can request a password reset via the **Forget Password** page  
- Server-side validation ensures the submitted email exists in the database  
- Generates a **secure 64-character token** stored in `password_reset_tokens` table  
- Sends a password reset link to the user’s email with a custom template (`emails.reset-password`)  
- Users can set a new password via the reset link; new password is validated and hashed before updating  
- After successful reset, the token is deleted and the user is redirected to the login page with a success message  
- Handles invalid tokens or email submissions with clear error messages  

## Features

### User Authentication

**Login**  
Allows users to securely log in to their accounts.
<img width="1524" height="772" alt="loginPage" src="https://github.com/user-attachments/assets/17062e4a-12e6-4c4b-a440-658e0af754ef" />

**Registration**<br>
New users can create an account to access the marketplace.
<img width="1521" height="772" alt="RegisterPage" src="https://github.com/user-attachments/assets/a39c6a6c-017b-48f8-914b-b2754d8f8c5b" />

**Password Recovery**  
Users can reset their password if forgotten.
<img width="1524" height="783" alt="Resetpass" src="https://github.com/user-attachments/assets/8ad7fe4c-26b3-48aa-98b4-4702a6497352" />

