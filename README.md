# Real-Time Chat Application

## Description

A real-time chat application built with PHP, MySQL, HTML, CSS, and JavaScript. This application allows users to log in, select a chat room, and communicate in real-time without refreshing the page. It also includes a feature to delete all messages in a chat room.

## Features

- **User Authentication:** Users can log in with their username and select a chat room from a dropdown menu.
- **Real-Time Messaging:** Messages are sent and received in real-time using AJAX and PHP, ensuring a smooth user experience without page reloads.
- **Message Deletion:** Users can delete all messages in a chat room with a single click.
- **User Interface:** A user-friendly interface designed with HTML and CSS.

## Technologies Used

- **Backend:** PHP, MySQL
- **Frontend:** HTML, CSS, JavaScript
- **Real-Time Communication:** AJAX

## Installation

1. **Clone the repository:**
    ```bash
    git clone https://github.com/yourusername/repo-name.git
    cd repo-name
    ```

2. **Set up the database:**
    - Import the `database.sql` file into your MySQL database to create the necessary tables.
    - Update the `db.php` file with your database credentials.

3. **Run the application:**
    - Make sure your web server (e.g., Apache) is running.
    - Open `index.html` in your web browser to start using the application.

## Usage

1. **Login:**
    - Enter your username and select a chat room from the dropdown menu.

2. **Chat:**
    - Type your message and click "Send" to post it in the chat room.
    - Messages will appear in real-time without needing to refresh the page.

3. **Delete Messages:**
    - Click the "Delete All Messages" button to clear all messages in the current chat room.

