

# Password Generator 🛡️

A simple and secure **Password Generator** built using PHP and HTML. This project demonstrates the generation of random, strong passwords with customizable length and character combinations. The generated password can be copied with a single click for ease of use.

## Features 📋

- **Random Password Generation**: Includes uppercase, lowercase, numbers, and special characters.
- **Customizable Length**: Choose password length between 6 and 20 characters.
- **Responsive UI**: Designed for mobile and desktop devices.
- **Clipboard Copy**: Copy the generated password with a single click.

## How It Works ⚙️

1. Input the desired password length in the provided field.
2. Click the **Generate Password** button to create a secure password.
3. Copy the password using the **Copy** button.

## Files Structure 📂

- **`ui.html`**: The front-end HTML file for the UI design.
- **`logic.php`**: The PHP script that handles password generation and serves the HTML content.

## Usage 🚀

1. Clone or download the repository.
2. Place the files in your local server directory (e.g., `htdocs` for XAMPP or `www` for WAMP).
3. Open your browser and navigate to `http://localhost/<project-folder>/logic.php`.
4. Interact with the application to generate passwords.

## Code Overview 🔍

### `logic.php`

- Defines character sets for password generation.
- Includes logic to:
  - Randomly select characters from each set.
  - Shuffle the generated password for enhanced security.
- Includes the UI via `include 'ui.html';`.

### `ui.html`

- Provides a clean, responsive UI for user interaction.
- Includes JavaScript for copying passwords to the clipboard.



## About the Creator 💡

Created by **[Aayush Bankar](https://www.linkedin.com/in/aayush-bankar/)**.  

Feel free to connect for collaborations or suggestions!



