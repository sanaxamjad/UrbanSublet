# UrbanSublet 🏠

## Description

This web application is a subleasing platform tailored for college students seeking to lease and sublease apartments. It provides a user-friendly interface for students to post listings for available apartments, search for sublets in their desired locations, and connect with fellow students looking to sublease. Whether you're studying abroad, interning in a different city, or simply looking for a roommate, our platform streamlines the process of finding and arranging sublease agreements among college students. With features designed specifically for student needs, such as flexible lease durations and roommate matching options, we make it easy for college students to find the perfect living situation during their academic journey.

## Features

- **User Registration and Login**: Secure user authentication for college students.
- **Listing Management**: Post, edit, and delete apartment listings.
- **Search Functionality**: Search for available sublets by location, price, and other filters.
- **Roommate Matching**: Find potential roommates based on preferences and habits.
- **Flexible Lease Durations**: Options for short-term and long-term subleases.
- **Messaging System**: Communicate directly with other users through the platform.
- **Admin Dashboard**: Manage users and listings efficiently.

## Usage

To run the application locally:

1. Clone this repository:

    ```sh
    git clone https://github.com/your-username/UrbanSublet.git
    ```

2. Navigate to the project directory:

    ```sh
    cd UrbanSublet
    ```

3. Open `index.html` in your web browser to view the application.

## File Structure

- `admin.html` - Admin dashboard page.
- `header.html` - Common header file for the application.
- `index.html` - Main landing page.
- `login.php` - Server-side script for handling login.
- `register.php` - Server-side script for handling user registration.
- `listings.php` - Server-side script for managing apartment listings.
- `profile.php` - User profile page.
- `messages.php` - Messaging system page.
- `script.js` - JavaScript file containing client-side logic.
- `styles.css` - CSS file for styling the application.

## Installation and Setup

### Prerequisites

- A web server with PHP support (e.g., Apache, Nginx).
- A MySQL or MariaDB database for storing user and listing data.
- Modern web browser (Chrome, Firefox, Edge, Safari).

### Steps

1. Set up a web server with PHP support.
2. Import the `database.sql` file into your MySQL or MariaDB database to create the necessary tables.
3. Configure the database connection in `config.php`.
4. Start the web server and open `index.html` in your browser.

## Contributing

We welcome contributions to enhance UrbanSublet. To contribute:

1. Fork the repository.
2. Create a new branch for your feature or bugfix:

    ```sh
    git checkout -b feature-name
    ```

3. Commit your changes:

    ```sh
    git commit -m "Add new feature"
    ```

4. Push to the branch:

    ```sh
    git push origin feature-name
    ```

5. Open a pull request describing your changes.

## Acknowledgments

- Thanks to the Pygame community for inspiration and support.
- Special thanks to all contributors and users who help improve the platform.

Feel free to contribute to this project by submitting issues or pull requests. Enjoy using UrbanSublet!
