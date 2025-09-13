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
- **Payment Simulation:** [Stripe API](https://stripe.com/) with webhook integration  
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

### User Levels & Permissions

- **Guest (Not Logged In)**  
  - Can view the landing page, browse products, and access login/register pages  
  - Trying to access restricted areas redirects to the login page  

- **Registered User (Logged In)**  
  - Can access all standard functionality: view products, manage profile, and place orders  
  - Cannot access the admin panel; direct URL access is blocked with route-level permission checks  

- **Admin / Superuser**  
  - Full access to all features, including the admin panel  
  - Can manage products, users, orders, and carts
 
### Product Catalog

- Browse a catalog of prebuilt PCs and laptops  
- **Search functionality:** users can search products by name  
- **Pagination:** displays 8 products per page for easy browsing 

# Features

## User Authentication

**Login**  
Allows users to securely log in to their accounts.
<img width="1524" height="772" alt="loginPage" src="https://github.com/user-attachments/assets/17062e4a-12e6-4c4b-a440-658e0af754ef" />

**Registration**<br>
New users can create an account to access the marketplace.
<img width="1521" height="772" alt="RegisterPage" src="https://github.com/user-attachments/assets/a39c6a6c-017b-48f8-914b-b2754d8f8c5b" />

**Password Recovery**  
Users can reset their password if forgotten.
<img width="1524" height="783" alt="Resetpass" src="https://github.com/user-attachments/assets/8ad7fe4c-26b3-48aa-98b4-4702a6497352" />

## Product Catalog

**Browse Products**  
View a list of prebuilt PCs and laptops.
<img width="1517" height="781" alt="Catalog" src="https://github.com/user-attachments/assets/3725dc92-1cc6-4a90-a705-513ad85798f5" />

**Product Details**  
See detailed information, specs, and images for each product.
<img width="1519" height="778" alt="Preview" src="https://github.com/user-attachments/assets/691b8cd5-4afe-4ca2-a4da-38b119910ac2" />

## Profile Management

**Order History**  
Users can view a history of their past orders, including order details.
<img width="1520" height="767" alt="OrderHistory" src="https://github.com/user-attachments/assets/692c43a3-dd57-4961-81b3-f3eba5d2a842" />

**Profile Overview**  
View personal information and manage your profile picture.
<img width="1521" height="784" alt="Profile" src="https://github.com/user-attachments/assets/ee6d2aa1-75b6-4030-a067-2f50be12a825" />

## Shopping Cart

**View & Manage Cart**  
Users can view all items in their cart, update quantities, or remove products before checkout. 
<img width="1521" height="784" alt="Cart" src="https://github.com/user-attachments/assets/213124d6-f079-4cf0-a37b-11576a58865d" />

## Admin Panel

**Manage Users**
Admins can view and manage users: delete, add or change their roles.
<img width="1520" height="864" alt="UserManage" src="https://github.com/user-attachments/assets/a1b9c179-e87f-466d-be47-cd9af0f94a1f" />

**Manage Products**  
Admins can add or remove products.
<img width="1520" height="864" alt="Products" src="https://github.com/user-attachments/assets/cf3f7214-2fbf-44f9-85e4-bd04c45f5c6e" />

**Add a Product example**  
Admins can quickly add a new prebuilt PC or laptop to the catalog by filling out the product form.
<img width="1523" height="783" alt="Yep" src="https://github.com/user-attachments/assets/7ee65af8-5343-4391-b924-8c716528a55e" />

## Payment Simulation

**Step 1: Checkout Form**  
Users enter their shipping and contact information before proceeding to payment
<img width="1523" height="782" alt="Amazin" src="https://github.com/user-attachments/assets/480805c6-50ce-41fb-99ad-e96e71447638" />

**Step 2: Stripe Payment**  
Users input their payment information directly into the Stripe API interface.  
The system simulates a purchase, and the webhook automatically updates the order status once the payment is processed. 
<img width="1536" height="779" alt="Stripe" src="https://github.com/user-attachments/assets/d2e94133-7849-4912-ba99-b4a16e04deb2" />
