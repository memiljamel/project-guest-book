# Guestbook

The Guestbook project is a web application built using Laravel, Tw-Elements, and TailwindCSS for efficient guest management.

![Home Page](https://drive.usercontent.google.com/download?id=13vGl_RFrWccvnFN2PnTdNJp6b2RB-eA2)

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [Features](#features)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Installation

### Prerequisites

Make sure you have the following installed:

- [PHP](https://php.net) (v8 or higher)
- [Node.js](https://nodejs.org) (v18 or higher)
- [Composer](https://getcomposer.org) (v2 or higher)
- [Laragon](https://laragon.org) / [XAMPP](https://apachefriends.org)
- PHP extensions (ensure enabled in `php.ini`):
  - [zip](https://www.php.net/manual/en/zip.installation.php)
  - [gd](https://www.php.net/manual/en/book.image.php)

### Steps to install

1. Clone the repository:
   ```bash
   git clone https://github.com/memiljamel/project-guest-book.git
   ```

2. Navigate to the project directory:
   ```bash
   cd project-guest-book
   ```

3. Install dependencies.
    - For Laravel/PHP projects:
      ```bash
      composer install
      ```
    - For Node.js projects:
      ```bash
      npm install
      ```

4. Set up environment variables:
   ```bash
   cp .env.example .env
   ```
   
   Edit the `.env` file  with the necessary configuration values (database, environment, etc.).

5. Generate application key:
   ```bash
   php artisan key:generate
   ```

6. Run database migrations:
   ```bash
   php artisan migrate
   ```

7. Seed the database with initial data (optional):
   ```bash
   php artisan db:seed
   ```

8. Start the development server.
    - For Laravel projects:
      ```bash
      php artisan serve
      ```
    - For Node.js projects:
      ```bash
      npm run dev
      ```

## Usage

After completing the installation steps and the server is running, open your browser and navigate to [http://localhost:8000](http://localhost:8000).

## Features

- **Guest Registration:** Allows guests to register their information, including name, contact details, and visit purpose.
- **Create Feedback:** Enables guests to submit feedback about their visit or experience.
- **Authentication:** Provides login, password recovery, and reset functionalities for administrators.
- **Dashboard:** Overview of recent guest activity.
- **Manage Guests:** Enables administrators to view, create, edit, and delete guest information.
- **Manage Staffs:** Enables administrators to view, create, edit, and delete staff information.
- **Manage Department:** Enables administrators to view, create, edit, and delete department information.
- **Manage Feedbacks:** Enables administrators to view, create, edit, and delete feedback information.
- **Search Functionality:** Enables searching for specific records.
- **Data Export:** Supports exporting data to PDF, Excel, and CSV formats.
- **Edit Profile:** Enables administrators to update their profile information.

## Contributing

Feel free to contribute to this project by submitting pull requests or reporting issues.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE.md) file for details.

## Contact

- **Email:** [memiljamel@gmail.com](mailto:memiljamel@gmail.com)
- **LinkedIn:** [linkedin.com/in/memiljamel](https://linkedin.com/in/memiljamel)
- **GitHub:** [github.com/memiljamel](https://github.com/memiljamel)
